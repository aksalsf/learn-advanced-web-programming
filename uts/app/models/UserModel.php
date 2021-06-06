<?php 

    class UserModel {
        private $table = 'tb_user'; // untuk menyimpan nama tabel
        private $db;

        public function __construct()
        {
            $this -> db = new Database;
        }

        public function ambilSemuaDataUser()
        {
            $this -> db -> query('SELECT * FROM ' . $this -> table);
            return $this -> db -> resultAllSet(); // app/core/database.php
        }

        public function tambahData($data) {
            $query = "INSERT INTO " . $this -> table . " VALUES(:nama, :password, :email)";
            $this -> db -> query($query);

            $this -> db -> bind('nama', $data['jeneng']);

            $this -> db -> bind('email', $data['email']);

            $this -> db -> bind('password', $data['password']);

            $this -> db -> execute();
            return $this -> db -> rowCount();
        }

        public function ambilDataDariID($id) {
            $this -> db -> query('SELECT * FROM ' . $this -> table . ' WHERE email = :email');
            $this -> db -> bind('email', $id);
            return $this -> db -> resultSingle();
        }

        public function ubahData($data) {
            $query = "UPDATE " . $this -> table . " SET nama = :nama, email = :email, password = :password WHERE email = :id";
            $this -> db -> query($query);

            $this -> db -> bind('nama', $data['nama']);

            $this -> db -> bind('email', $data['email']);

            $this -> db -> bind('password', $data['password']);

            $this -> db -> bind('id', $data['id']);

            $this -> db -> execute();
            return $this -> db -> rowCount();
        }

        public function hapusData($data)
        {
            $this -> db -> query("DELETE FROM ".$this->table." WHERE email = :email");
            $this -> db -> bind('email', $data['id']);
            $this -> db -> execute();
            return $this -> db -> rowCount();
        }
    }

?>