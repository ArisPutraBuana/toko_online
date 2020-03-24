<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    // Memaksa Admin harus login dulu
    public function __construct()
    {
            parent::__construct();
            
            if ($this->session->userdata('role_id') != '2') 
            {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Anda Belum Login.!</div>');
                    redirect('auth/login');
            }

    }


        // FUNCTION INDEX di tempatkan di CLASS yg berbeda, agar USER tdk harus LOGIN

        public function tambah_ke_keranjang($id)
        {
            $barang = $this->model_barang->find($id);    // find = untuk menangkap keranjang yang di clik

            // Cara memasukan ke keranjang
            $data = [
                'id'      => $barang->id_brg,     // $barang = baris-19 / variabel di atasnya
                'qty'     => 1,
                'price'   => $barang->harga,      // $barang = baris-19 / variabel di atasnya
                'name'    => $barang->nama_brg  // $barang = baris-19 / variabel di atasnya
                
            ];
        
                $this->cart->insert($data);
                redirect('welcome');

        }


        public function detail_keranjang()
        {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('keranjang');
        }

        public function hapus_keranjang()
        {
            $this->cart->destroy();  // Menghapus barang di keranjang
            redirect('welcome');
        }

    
        public function pembayaran()
        {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('pembayaran');
        }


        public function proses_pesanan()
        {
            // Data untuk di kirim ke INVOICE
            $is_processed = $this->model_invoice->index();

            if ($is_processed) 
            {
                // Data di keranjang akan di hapus ketika sudah menginput alamat yg akan di kirim
                $this->cart->destroy();
                $this->load->view('templates/header');
                $this->load->view('templates/sidebar');
                $this->load->view('proses_pesanan');
            } 
            else 
            {
                echo "Maaf pesanan Anda gagal di proses";
            }
            
        }


        public function detail($id_brg)
        {
            $data['barang'] = $this->model_barang->detail_brg($id_brg);

            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('detail_barang', $data);
        }




}