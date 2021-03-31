<?php

	class MahasiswaModel
	{
		private $host = 'localhost';

		private $user = 'root';

		private $password = '';

		private $database = 'pwl_mvc_mar25';

		private $conn;

		public function __construct()
		{
			$this->conn = mysqli_connect(
				$this->host,
				$this->user,
				$this->password,
				$this->database
			);
			if (mysqli_connect_errno()) {
				echo mysqli_connect_error();
			}
		}

		public function insertDB(String $nim, String $nama, int $tahun_lahir)
		{
			$sql = "INSERT INTO mahasiswa (nim, nama, tahun_lahir) VALUES ('$nim', '$nama', '$tahun_lahir')";
			if (mysqli_query($this->conn, $sql)) {
				echo 'Sukses!';
			} else {
				echo mysqli_error($this->conn);
			}
		}
	}

	$paijo = new MahasiswaModel();