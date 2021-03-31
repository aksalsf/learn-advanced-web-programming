<?php

	require 'model/database.php';

	$myDB = new Database('localhost', 'root', '', 'pwl_tugas4');
	$myDB->connect();
	$result = $myDB->select('*', 'tb_identitas');