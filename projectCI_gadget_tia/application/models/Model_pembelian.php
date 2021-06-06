<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pembelian extends CI_Model {

    private $table = 'tb_pembelian';
    public function jumlah_data_transaksi()
    {
        return $this->db->count_all($this->table);
    }
    public function insert_data_pembelian($data)
    {
        return $this->db->insert($this->table, $data);
    }
    public function lihat_semua_data()
    {
        return $this->db->get($this->table)->result_array();
    }
}