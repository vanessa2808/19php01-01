<?php 
	include 'connect.php';
	$id = $_GET['id'];
	$sql = "DELETE FROM users WHERE id = $id";
	if (mysqli_query($connect, $sql) === TRUE) {
		// Xoa thanh cong thi tro ve trang list user
		header("Location: list_user.php");
	}
?>