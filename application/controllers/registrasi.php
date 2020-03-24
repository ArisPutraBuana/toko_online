<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// Controller Register
class Registrasi extends CI_Controller {

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


    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Nama wajib di isi.!'
        ]);

        $this->form_validation->set_rules('username', 'Username', 'required', [
            'required' => 'Username wajib di isi.!'
        ]);

        $this->form_validation->set_rules('password1', 'Password', 'required|matches[password2]', [
            'required' => 'Password Wajib di isi.!',
            'matches' => 'Password tidak sama.!'
        ]);
        
        $this->form_validation->set_rules('password2', 'Password', 'required|matches[password1]');

        if ($this->form_validation->run() == FALSE) 
        {
            $this->load->view('templates/header');
            $this->load->view('registrasi');
            $this->load->view('templates/footer');
        } 
        else 
        {
            $data = [
                'id'           => '',
                'nama'         => $this->input->post('nama'),
                'username'     => $this->input->post('username'),
                'password'     => $this->input->post('password1'),
                'role_id'      => 2,
            ];

            $this->db->insert('tb_user', $data);
            redirect('auth/login');
        }
        
    }



    
}    