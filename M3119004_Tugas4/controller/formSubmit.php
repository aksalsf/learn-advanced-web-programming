<?php

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		require '../model/mahasiswa.php';
		if (isset($_POST['submit'])) {
			$mhs = new Mahasiswa();
			$mhs->set_data(
				$_POST['email'],
				$_POST['nama'],
				$_POST['password'],
				$_POST['prodi'],
				$_POST['gender'],
				$_POST['birthday'],
				$_POST['alamat'],
				$_POST['agreement']
			);
			$mhs->get_data();

			require '../model/database.php';
			$myDB = new Database('localhost', 'root', '', 'pwl_tugas4');
			$myDB->connect();
			$sql = "INSERT INTO tb_identitas (email,nama,password,prodi,gender,birthday,alamat,agreement) VALUES ('$mhs->email', '$mhs->nama', '$mhs->password', '$mhs->prodi', '$mhs->gender', '$mhs->birthday', '$mhs->alamat', '$mhs->agreement')";
			$myDB->insert($sql);
			header('Location: ../');
		}
	}