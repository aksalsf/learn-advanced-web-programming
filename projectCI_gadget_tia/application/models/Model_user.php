<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {
    public function get_user($email)
    {
        return $this->db->get_where('tb_user', ['email' => $email])->row_array();
    }
}