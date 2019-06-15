<?php
// Thong tin ket noi data base
	$server = 'localhost';  // $server = '127.0.0.1'
	// ping localhost gitcmd
	$userName = 'root'; //username default
	$passWord = ''; // password default
	$database = '19php01_demo1'; // ket noi den database nay
	// Thuc hien ket noi database
	$connect = mysqli_connect($server, $userName, $passWord, $database);
	//var_dump($connect);
	if($connect === FALSE){
		echo "connect fail". mysqli_connect_error();
	}
	// Du lieu duoc chen vao users
	$name = 'Yu'; //$name = $_POST['name'];
	$email = 'Yu@gmail.com';
	$phone = '0376381262';
	$avatar = 'yen.jpg';
	$city = 'Hue';
	$gender = 'male';
	$sql = "INSERT INTO users(name,email,phone,avatar,city,gender) VALUES('$name','$email','$phone','avatar','city','gender')";
	// Thuc thi cau lenh
	if (mysqli_query($connect, $sql) == TRUE){
		echo "register successfully!";
	} else {
		echo "Fail!";
	}
?>

