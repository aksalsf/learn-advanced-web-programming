<?php
class  MerkModel {
    private $table = 'tb_merk'; //untuk menyimpan nama table
    private $db;

    public function __construct()
    {
        $this -> db = new Database;
    }

    public function ambilDataMerk(){
        $this -> db -> query('SELECT * FROM ' .$this-> table);
        return $this -> db -> resultAllSet(); //app/cpre/database.php
    }

    public function tambahData($data){
        // values : = mewakili nama kolom
        $query = "INSERT INTO " . $this -> table . 
        " VALUES(:id_merk , :nama)";
        $this -> db -> query($query);
        $this -> db -> bind('id_merk', $data['id_merk']);
        $this -> db -> bind('nama', $data['nama']);

        $this ->db -> execute();
        return $this -> db -> rowCount();
    }

    public function ambilDataID($id){
        $this -> db -> query('SELECT * FROM ' . $this -> table . ' WHERE id_merk = :id_merk');
        $this -> db -> bind('id_merk', $id);
        return $this -> db -> resultSingle();
    }

    public function ubahData($data){
        // values : = mewakili nama kolom
        $query = "UPDATE " . $this -> table . 
        " SET id_merk = :id_merk, nama = :nama WHERE id_merk = :id";
        $this -> db -> query($query);
        $this -> db -> bind('id_merk', $data['id_merk']);
        $this -> db -> bind('nama', $data['nama']);
        $this -> db -> bind('id', $data['id']);

        $this ->db -> execute();
        return $this -> db -> rowCount();
    }

    public function hapusData($data){
        $this -> db -> query("DELETE FROM ". $this -> table . " WHERE id_merk = :id_merk");
        $this -> db -> bind('id_merk', $data['id']);
        $this -> db -> execute();
        return $this -> db -> rowCount();
    }
}

?>
