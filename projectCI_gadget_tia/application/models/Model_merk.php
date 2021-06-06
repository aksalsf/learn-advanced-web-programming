<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_merk extends CI_Model {
    public function get_merk()
    {
        $this->db->select('*');
        $this->db->from('tb_merk');
        $query = $this->db->get();
        return $query -> result();
    }
    public function get_merk_single($id)
    {
        $query = $this->db->get_where('tb_merk', array('id_merk' => $id));
        // Biar hasilnya jadi array
        return $query -> row_array();
    }
    public function count_merk()
    {
        return $this->db->count_all('tb_merk');
    }
}