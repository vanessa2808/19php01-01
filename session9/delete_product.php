<?php 
	include 'connect.php';
	$id = $_GET['id'];
	$sql = "DELETE FROM products WHERE id = $id";
	if (mysqli_query($connect, $sql) === TRUE) {
		// Xoa thanh cong thi tro ve trang list products
		header("Location: list_product.php");
	}
?>