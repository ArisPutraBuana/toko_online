<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_barang extends CI_Controller {

  // Memaksa Admin harus login dulu
  public function __construct()
  {
          parent::__construct();
          
          if ($this->session->userdata('role_id') != '1') 
          {
                  $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Anda Belum Login.!</div>');
                  redirect('auth/login');
          }

  }
  

	public function index()
	{
            $data['barang'] = $this->model_barang->tampil_data()->result();

            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/data_barang', $data);
            $this->load->view('templates_admin/footer');
    }



    public function detail($id_brg)
    {
        $data['detail'] = $this->model_barang->detail_brg($id_brg);

            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/detail_barang', $data);
    }

    
    public function tambah_aksi ()
    {
      $nama_brg        = $this->input->post('nama_brg');
      $keterangan      = $this->input->post('keterangan');
      $kategori        = $this->input->post('kategori');
      $harga           = $this->input->post('harga');
      $stok            = $this->input->post('stok');
      $gambar          = $_FILES['gambar']['name'];

      if ($gambar = '') 
      {

      }
      else 
      {
            $config['upload_path']      = './assets/img';  // Menentukan tempat penyimpanan gambar
            $config['allowed_types']    = 'jpg|png|gif';   // Menentukan Tipe file yang boleh di upload

            $this->load->library('upload', $config);  // Load librarie UPLOAD

            // Jika uploadnya gagal ( foto = file di database )
            if (!$this->upload->do_upload('gambar')) 
            {
              echo "Upload foto gagal";
              die();
            } 
            else 
            {
              // Jika gambar berhasil di upload
              $gambar = $this->upload->data('file_name');
            }
      }

      $data = [
          'nama_brg'      => $nama_brg,
          'keterangan'    => $keterangan,
          'kategori'      => $kategori,
          'harga'         => $harga,
          'stok'          => $stok,
          'gambar'        => $gambar
      ];

      // input ke database
      $this->model_barang->tambah_barang($data, 'tb_barang');
      redirect('admin/data_barang/index');

    }


    public function edit($id_brg) 
    {
      //Jadikan array
      $where = ['id_brg' => $id_brg];

      $data['barang'] = $this->model_barang->edit_barang($where, 'tb_barang')->result();

            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/edit_barang', $data);
    }

    public function update() 
    {
      $id_brg          = $this->input->post('id_brg');
      $nama_brg        = $this->input->post('nama_brg');
      $keterangan      = $this->input->post('keterangan');
      $kategori        = $this->input->post('kategori');
      $harga           = $this->input->post('harga');
      $stok            = $this->input->post('stok');

      $data = [
          'nama_brg'      => $nama_brg,
          'keterangan'    => $keterangan,
          'kategori'      => $kategori,
          'harga'         => $harga,
          'stok'          => $stok
        ];

      $where = ['id_brg' => $id_brg];

      $this->model_barang->update_data($where, $data, 'tb_barang');
      redirect('admin/data_barang/index');

    }


    public function hapus($id_brg)
     {
      $where = ['id_brg' => $id_brg];
      $this->model_barang->hapus_barang($where, 'tb_barang');
      redirect ('admin/data_barang/index');
    }

        
}