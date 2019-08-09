<?php 
	include 'config/database.php';
	class FrontendModel extends ConnectDB{

		function register($username, $password) {

			$checkUserExist = $this->checkUserExist($username);
			// kiem tra username da ton tai chua?
			if ($checkUserExist->num_rows == 0) {
				$sql = "INSERT INTO users(username, password) VALUES('$username', '$password')";
				return mysqli_query($this->connect(), $sql);
			}
			return false;
			
		}

		function login($username, $password) {

			$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
			return mysqli_query($this->connect(), $sql);

		}

		function checkUserExist($username) {

			$sql = "SELECT * FROM users WHERE username = '$username'";
			return mysqli_query($this->connect(), $sql);
			
		}
		public function listProduct(){
			$sql = "SELECT * FROM products";
			$listProduct = mysqli_query($this->connect(),$sql);
			return $listProduct;
		}
		public function getProduct($id){
			$sql = "SELECT * FROM products WHERE id = $id";
			$result = mysqli_query($this->connect(),$sql);
			return $result->fetch_assoc();
		}

	}
?>