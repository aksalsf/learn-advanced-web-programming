<?php
    class KatalogModel {
        private $tbProduk = 'tb_ponsel'; //untuk menyimpan nama tabe;
        private $tbTransaksi = 'tb_transaksi';
        private $tbMerk = 'tb_merk';
        private $db; 
   
        public function __construct()
        {
            $this -> db = new Database;
        }

        public function ambilSemuaDataProduk()
        {
            $this -> db -> query('SELECT * FROM ' . $this -> tbProduk);
            return  $this -> db -> resultAllSet(); //sumber -> app/core/database.php
        }

        public function detailDataProduk($id)
        {
            $this -> db -> query('SELECT * FROM ' . $this -> tbProduk . ' WHERE id_ponsel = :id_ponsel');
            $this -> db -> bind('id_ponsel', $id);
            return $this -> db -> resultSingle();
        }

        public function ambilDataMerkFromID($id)
        {
            $this -> db -> query('SELECT * FROM ' . $this -> tbMerk . ' WHERE id_merk = :id_merk');
            $this -> db -> bind('id_merk', $id);
            return $this -> db -> resultSingle();
        }

        public function ambilDataTransaksi()
        {
            $this -> db -> query('SELECT * FROM ' . $this -> tbTransaksi);
            return  $this -> db -> resultAllSet();
        }

        public function tambahDataTransaksi($data)
        {
            $query = "INSERT INTO " . $this -> tbTransaksi . " VALUES(:id_transaksi,:id_ponsel,:nama_pembeli,:alamat_pembeli,:wa_pembeli,:kuantitas,:total,:status,"."CURRENT_TIME()".");UPDATE " . $this -> tbProduk . " SET stok = stok - :kuantitas WHERE id_ponsel = :id_ponsel";
            $this -> db -> query($query);
            $this -> db -> bind('id_transaksi', $data['id_transaksi']);
            $this -> db -> bind('id_ponsel', $data['id_ponsel']);
            $this -> db -> bind('nama_pembeli', $data['nama_pembeli']);
            $this -> db -> bind('alamat_pembeli', $data['alamat_pembeli']);
            $this -> db -> bind('wa_pembeli', $data['wa_pembeli']);
            $this -> db -> bind('kuantitas', $data['kuantitas']);
            $this -> db -> bind('total', $data['harga']*$data['kuantitas']);
            $this -> db -> bind('status', $data['status']);

            $this -> db -> execute();
            return $this -> db -> rowCount();
        }
}
?>