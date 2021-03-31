<?php 

class MahasiswaModel {
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this -> db = new Database;
    }

    public function getAllMahasiswa()
    {
        $this -> db -> query('SELECT * FROM ' . $this -> table);
        return $this -> db -> resultAllSet();
    }

    public function getMahasiswa($nim)
    {
        $this -> db -> query('SELECT * FROM ' . $this -> table . ' WHERE nim = :nim');
        $this -> db -> bind('nim', $nim);
        return $this -> db -> resultSingle();
    }

    public function newMahasiswa($data)
    {
        $query = "INSERT INTO " . $this -> table . " VALUES(:nim, :nama, :password, :tanggal_lahir, :prodi, :jenis_kelamin, :kewarganegaraan, :status, :keterangan)";
        $this -> db -> query($query);
        $this -> db -> bind('nim', $data['nim']);
        $this -> db -> bind('nama', $data['nama']);
        $this -> db -> bind('password', password_hash($data['password'], PASSWORD_DEFAULT));
        $this -> db -> bind('tanggal_lahir', $data['tanggal_lahir']);
        $this -> db -> bind('prodi', $data['prodi']);
        $this -> db -> bind('jenis_kelamin', $data['jenis_kelamin']);
        if (isset($data['kewarganegaraan'])) {
            $this -> db -> bind('kewarganegaraan', $data['kewarganegaraan']);
        } else {
            $this -> db -> bind('kewarganegaraan', 0);  
        }
        $this -> db -> bind('status', $data['status']);
        $this -> db -> bind('keterangan', $data['keterangan']);

        $this -> db -> execute();

        return $this -> db -> rowCount();
    }

    public function deleteMahasiswa($data)
    {
        $query = "DELETE FROM " . $this -> table . " WHERE nim = :nim";
        $this -> db -> query($query);
        $this -> db -> bind('nim', $data['nim']);
        $this -> db -> execute();
        
        return $this -> db -> rowCount();
    }

    public function updateMahasiswa($data)
    {
        $query = "UPDATE " . $this -> table . " SET 
                    nama = :nama,
                    password = :password,
                    tanggal_lahir = :tanggal_lahir,
                    prodi = :prodi,
                    jenis_kelamin = :jenis_kelamin,
                    kewarganegaraan = :kewarganegaraan,
                    keterangan = :keterangan 
                    WHERE nim = :nim";
        $this -> db -> query($query);
        $this -> db -> bind('nim', $data['nim']);
        $this -> db -> bind('nama', $data['nama']);
        $this -> db -> bind('password', password_hash($data['password'], PASSWORD_DEFAULT));
        $this -> db -> bind('tanggal_lahir', $data['tanggal_lahir']);
        $this -> db -> bind('prodi', $data['prodi']);
        $this -> db -> bind('jenis_kelamin', $data['jenis_kelamin']);
        if (isset($data['kewarganegaraan'])) {
            $this -> db -> bind('kewarganegaraan', $data['kewarganegaraan']);
        } else {
            $this -> db -> bind('kewarganegaraan', "WNA");  
        }
        $this -> db -> bind('keterangan', $data['keterangan']);

        $this -> db -> execute();

        return $this -> db -> rowCount();
    }
}