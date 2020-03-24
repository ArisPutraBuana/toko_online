<?php

class Model_kategori extends CI_Model {

    public function data_elektronik() 
    {
        // Mengambil data KATEGORI di TB_BARANG ( Menggunakan => get_where )
        return $this->db->get_where('tb_barang', ['kategori' => 'Elektronik']);
    }


    public function pakaian_pria() 
    {
        // Mengambil data KATEGORI di TB_BARANG ( Menggunakan => get_where )
        return $this->db->get_where('tb_barang', ['kategori' => 'Pakaian Pria']);
    }


    public function pakaian_wanita() 
    {
        // Mengambil data KATEGORI di TB_BARANG ( Menggunakan => get_where )
        return $this->db->get_where('tb_barang', ['kategori' => 'Pakaian Wanita']);
    }


    public function pakaian_anak() 
    {
        // Mengambil data KATEGORI di TB_BARANG ( Menggunakan => get_where )
        return $this->db->get_where('tb_barang', ['kategori' => 'Pakaian Anak-anak']);
    }


    public function peralatan_olaraga() 
    {
        // Mengambil data KATEGORI di TB_BARANG ( Menggunakan => get_where )
        return $this->db->get_where('tb_barang', ['kategori' => 'Peralatan Olaraga']);
    }

}    