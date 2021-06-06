<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login_token extends CI_Model {
    private $table = 'tb_login_token';
    public function add_token($email)
    {
        $token = md5(uniqid(rand(), true));
        $data = [
            'id_user' => $email,
            'token' => $token
        ];
        if ($this->db->get_where($this->table, array('id_user' => $email))) {
            $this->db->delete($this->table, ['id_user' => $email]);
        }
        $this->db->insert($this->table, $data);
        return true;
    }
    public function delete_token($token)
    {
        return $this->db->delete($this->table, ['token' => $token]);
    }
    public function get_token($email)
    {
        $this->db->select('token');
        $this->db->where('id_user', $email);
        return $this->db->get($this->table)->row_object()->token;
    }
    public function check_token($token)
    {
        $this->db->get_where($this->table, array('token' => $token));
        return $this->db->count_all_results();
    }
}