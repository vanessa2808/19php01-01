<?php 
	// thong tin ket noi database
	$server = 'localhost'; //$server = '127.0.0.1'
	$username = 'root'; // username default
	$password = ''; // password default
	$database = '19php01_demo1'; // ket noi den database nay
	
	// thuc hien ket noi database
	$connect = mysqli_connect($server, $username, $password, $database);

	// utf-8 connect
	mysqli_set_charset($connect,"utf8");
	// kiem tra ket noi database
	if ($connect === FALSE) {
		echo "Connect fail ".mysqli_connect_error();
	}
	
