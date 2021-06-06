<?php 
	class TransaksiModels{
		private $table = 'tb_transaksi';
		private $db;

		public function __construct(){
			$this -> db = new Database;
		}

		public function ambilData(){
			$this -> db -> query('SELECT * FROM '. $this -> table);
			return $this -> db -> resultAllSet();
		}

		public function ambilDataId($id){
			$this -> db -> query('SELECT * FROM '. $this -> table. ' WHERE id_transaksi = :id_transaksi');
			$this -> db -> bind('id_transaksi', $id);
			return $this -> db -> resultSingle();
		}

		public function ubahStatus($data){
			$query = "UPDATE " . $this -> table . " SET status = :status WHERE id_transaksi = :id_transaksi";
			$this -> db -> query($query);
			$this -> db -> bind('status', $data['status']);
			$this -> db -> bind('id_transaksi', $data['id_transaksi']);
			$this -> db -> execute();
			return $this -> db -> rowCount();
		}

	}
 ?>