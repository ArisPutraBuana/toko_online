<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_admin extends CI_Controller {

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
                // $data['barang'] = $this->model_barang->tampil_data()->result();

                $this->load->view('templates_admin/header');
                $this->load->view('templates_admin/sidebar');
                $this->load->view('admin/dashboard');
        }
     
        
        
}