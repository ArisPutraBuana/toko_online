<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Controller Login
class Auth extends CI_Controller {

    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required', [
            'required' => 'Username wajib di isi.!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required', [
            'required' => 'Password wajib di isi.!'
        ]);

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header');
            // $this->load->view('templates/sidebar');  // Untuk halaman Login tdk ada Sidebars
            $this->load->view('form_login');
        } 
        else 
        {
            $auth = $this->model_auth->cek_login();

            // Pesan jika gagal Login
            if ($auth == FALSE )
            {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Username atau Password Anda salah</div>');
                redirect('auth/login');
            } 
            else 
            {
                // Jika login berhasil
                $this->session->set_userdata('username',$auth->username);
                $this->session->set_userdata('role_id',$auth->role_id);

                // Cek Admin atau User
                switch($auth->role_id) {
                    case 1 : redirect('admin/dashboard_admin');
                            break;
                    case 2 : redirect('welcome');
                            break;
                    default: break;                
                }
            }
        }
    }



    public function logout()
    {
        // Menghapus SESSION
        $this->session->sess_destroy();
        redirect('auth/login');
    }


}    