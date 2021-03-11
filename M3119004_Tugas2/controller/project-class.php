<?php

    class Mahasiswa {
        public $nim;
        public $nama;
        public $password;
        public $ttl;
        public function __contruct($nim = "XXXXXXXX", $nama = "John Doe", $password = "12345678", $ttl = "2001-01-01") {
            $this->nim = $nim;
            $this->nama = $nama;
            $this->password = password_hash($password, PASSWORD_DEFAULT);
            $this->ttl = $ttl;
        }
        final function inputData($nim, $nama, $password, $ttl) {
            $this->nim = $nim;
            $this->nama = $nama;
            $this->password = password_hash($password, PASSWORD_DEFAULT);
            $this->ttl = $ttl;
        }
        
    }

?>