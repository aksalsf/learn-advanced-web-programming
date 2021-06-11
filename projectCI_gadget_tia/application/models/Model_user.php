<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {
    public function get_user($email)
    {
        return $this->db->get_where('tb_user', ['email' => $email])->row_array();
    }
    public function ganti_password($email, $password)
    {
        $this->db->set('password', $password);
        $this->db->where('email', $email);
        $this->db->update('tb_user');
    }
}