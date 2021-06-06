<?php
    class ProdukModel {
        private $table = 'tb_ponsel'; //untuk menyimpan nama tabe;
        private $db; 
   
        public function __construct()
        {
            $this -> db = new Database;
        }

        public function ambilSemuaDataProduk()
        {
            $this -> db -> query('SELECT * FROM ' . $this -> table);
            return  $this -> db -> resultAllSet(); //sumber -> app/core/database.php
        }

        public function ambilDataMerk($kolom)
        {
            $this -> db -> query('SELECT '.$kolom.' FROM tb_merk' );
            return  $this -> db -> resultAllSet(); //sumber -> app/core/database.php
        }

        public function tambahData($data, $file){
            // Bisa mengurangi di hack
            $query = "INSERT INTO " . $this -> table . " VALUES(:id_ponsel, :nama, :id_merk, :harga, :berat, :spesifikasi, :gambar, :stok)";

            $this -> db -> query($query);
            $this -> db -> bind('id_ponsel', $data['id_ponsel']);
            $this -> db -> bind('nama', $data['nama']);
            $this -> db -> bind('id_merk', $data['id_merk']);
            $this -> db -> bind('harga', $data['harga']);
            $this -> db -> bind('berat', $data['berat']);
            $this -> db -> bind('spesifikasi', $data['spesifikasi']);
            $this -> db -> bind('stok', $data['stok']);
            if($this -> uploadGambar($file,$data['id_ponsel']))
            $this -> db -> bind('gambar', $data['id_ponsel'].'.jpg');
            $this -> db -> execute();
            return $this -> db -> rowCount();
        }

        public function uploadGambar($gambar, $id)
        {
            $target_dir = BASEPATH."/img/uploads/";
            $target_file = $target_dir . basename($gambar['gambar']['name']);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $file_savename = $target_dir . $id .'.jpg';

            // Check if image file is a actual image or fake image
            $check = getimagesize($gambar['gambar']["tmp_name"]);
            if($check !== false) {
                $uploadOk = 1;
            } else {
                echo "File bukan gambar!";
                $uploadOk = 0;
            }

            // Check if file already exists
            if (file_exists($target_file)) {
            echo "File sudah ada!";
            $uploadOk = 0;
            }

            // Check file size
            if ($gambar['gambar']["size"] > 5000000) {
            echo "Ukuran file terlalu besar!";
            $uploadOk = 0;
            }

            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                echo "Format berkas tidak diizinkan!";
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "File gagal diunggah!";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($gambar['gambar']["tmp_name"], $file_savename)) {
                    return true;
                } else {
                    return false;
                }
            }
        }

        public function ambilDataID($id) {
            $this -> db -> query('SELECT * FROM ' . $this -> table . ' WHERE id_ponsel = :id_ponsel');
            $this -> db -> bind('id_ponsel', $id);

            return $this -> db -> resultSingle();
        }

        public function ubahData($data, $file){
            // Bisa mengurangi di hack
            $query = "UPDATE " . $this -> table . " SET id_ponsel = :id_ponsel, nama = :nama, id_merk = :id_merk, harga = :harga, berat = :berat, spesifikasi = :spesifikasi, gambar = :gambar, stok = :stok WHERE id_ponsel =:id";
           
            $this -> db -> query($query);
            $this -> db -> bind('id_ponsel', $data['id_ponsel']);
            $this -> db -> bind('nama', $data['nama']);
            $this -> db -> bind('id_merk', $data['id_merk']);
            $this -> db -> bind('harga', $data['harga']);
            $this -> db -> bind('berat', $data['berat']);
            $this -> db -> bind('spesifikasi', $data['spesifikasi']);
            if($this -> uploadGambar($file,$data['id_ponsel']))
            $this -> db -> bind('gambar', $data['id_ponsel'].'.jpg');
            $this -> db -> bind('stok', $data['stok']);

            $this -> db -> bind('id', $data['id']);

            $this -> db -> execute();
            return $this -> db -> rowCount();
        }

        public function hapusData($data){
            // Bisa mengurangi di hack          
            $this -> db -> query("DELETE FROM ".$this->table." WHERE id_ponsel = :id_ponsel");
            $this -> db -> bind('id_ponsel', $data['id']);

            $this -> db -> execute();
            return $this -> db -> rowCount();
    }
}
?>