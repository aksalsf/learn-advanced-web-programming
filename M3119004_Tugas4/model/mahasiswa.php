<?php

	class Mahasiswa
	{
		public $email = '';

		public $nama = '';

		public $password = '';

		public $prodi;

		public $gender;

		public $birthday = '';

		public $alamat;

		public $isAgree = 0;

		public function __contruct($email = 'XXXXXXXX', $nama = 'John Doe', $password = '12345678', $birthday = '2001-01-01')
		{
			$this->email = $email;
			$this->nama = $nama;
			$this->password = password_hash($password, PASSWORD_DEFAULT);
			$this->birthday = $birthday;
		}

		public function set_data($email, $nama, $password, $prodi, $gender, $birthday, $alamat, $isAgree)
		{
			$this->email = $email;
			$this->nama = $nama;
			$this->password = password_hash($password, PASSWORD_DEFAULT);
			$this->prodi = $prodi;
			$this->gender = $gender;
			$this->birthday = $birthday;
			$this->alamat = $alamat;
			$this->isAgree = $isAgree;
		}

		public function get_data(String $key = null)
		{
			$data = [
				'email' => $this->email,
				'nama' => $this->nama,
				'password' => $this->password,
				'prodi' => $this->prodi,
				'gender' => $this->gender,
				'birthday' => $this->birthday,
				'alamat' => $this->alamat
			];

			if ($key == null) {
				return $data;
			} else {
				return $data[$key];
			}
		}
	}