<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller { 

    public function elektronik() 
    {
        $data['elektronik'] = $this->model_kategori->data_elektronik()->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('elektronik', $data);
        $this->load->view('templates/footer');
    }


    public function pakaian_pria() 
    {
        $data['pakaian_pria'] = $this->model_kategori->pakaian_pria()->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pakaian_pria', $data);
        $this->load->view('templates/footer');
    }



    public function pakaian_wanita() 
    {
        $data['pakaian_wanita'] = $this->model_kategori->pakaian_wanita()->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pakaian_wanita', $data);
        $this->load->view('templates/footer');
    }


    public function pakaian_anak() 
    {
        $data['pakaian_anak'] = $this->model_kategori->pakaian_anak()->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pakaian_anak', $data);
        $this->load->view('templates/footer');
    }



    public function peralatan_olaraga() 
    {
        $data['peralatan_olaraga'] = $this->model_kategori->peralatan_olaraga()->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('peralatan_olaraga', $data);
        $this->load->view('templates/footer');
    }



}    