<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_ponsel extends CI_Model {
    public function get_recommended()
    {
        $query = $this->db->get_where('tb_ponsel', array('stok <' => 10));
        return $query -> result();
    }
    public function get_ponsel()
    {
        $this->db->select('*');
        $this->db->from('tb_ponsel');
        $query = $this->db->get();
        return $query -> result();
    }
    public function get_ponsel_single($id)
    {
        $query = $this->db->get_where('tb_ponsel', array('id_ponsel' => $id));
        // Biar hasilnya jadi array
        return $query -> row_array();
    }
    public function get_by_merk($id)
    {
        $query = $this->db->get_where('tb_ponsel', array('id_merk' => $id));
        return $query -> result();
    }
    public function stok_masih($id)
    {
        $this->db->select('stok');
        $this->db->from('tb_ponsel');
        $this->db->where('id_ponsel', $id);
        $query = $this->db->get();
        if ($query -> row() -> stok >= 0) {
            return true;
        } else {
            return false;
        }
    }
    public function get_stok($id)
    {
        $this->db->select('stok');
        $this->db->from('tb_ponsel');
        $this->db->where('id_ponsel', $id);
        $query = $this->db->get();
        return $query -> row() -> stok;
    }
    public function get_nama($id)
    {
        $this->db->select('nama');
        $this->db->from('tb_ponsel');
        $this->db->where('id_ponsel', $id);
        $query = $this->db->get();
        return $query -> row() -> nama;
    }
    public function kurangi_stok($id, $qty)
    {
        // cek stok terkini
        $this->db->select('stok');
        $this->db->from('tb_ponsel');
        $this->db->where('id_ponsel', $id);
        $query = $this->db->get();
        $stok = $query -> row() -> stok;
        // kurangi stok
        $stok = $stok - $qty;
        $this->db->set('stok', $stok);
        $this->db->where('id_ponsel', $id);
        return $this->db->update('tb_ponsel');
    }
}