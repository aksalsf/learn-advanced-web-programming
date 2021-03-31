<?php

class Database
{
	protected $user;

	protected $password;

	protected $host;

	protected $database;

	protected $conn;

	public function __construct($host, $user, $password, $database)
	{
		$this->host = $host;
		$this->user = $user;
		$this->password = $password;
		$this->database = $database;
	}

	public function connect()
	{
		// Create connection
		$this->conn = new mysqli($this->host, $this->user, $this->password, $this->database);
		if (mysqli_connect_errno()) {
			session_start();
			$_SESSION['error'] = 'Connection failed: ' . mysqli_connect_error();
			exit();
		}

		return true;
	}

	public function insert(String $sql, String $action_name = 'Insert data')
	{
		session_start();
		if ($this->conn->query($sql) === true) {
			$_SESSION['success'] = $action_name . ' berhasil!';
		} else {
			$_SESSION['error'] = $action_name . ' gagal! (' . $this->conn->error . ')';
		}
	}

	public function select(String $column, String $table_name)
	{
		$sql = 'SELECT ' . $column . ' FROM ' . $table_name;
		$result = mysqli_query($this->conn, $sql);

		return $result;
	}

	public function disconnect()
	{
		$this->conn->close();
	}
}