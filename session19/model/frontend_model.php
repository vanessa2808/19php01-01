<?php 
include 'config/database.php';

class FrontendModel extends DatabaseConnect {

	function register($role, $username, $password, $name, $email, $phone, $birthday, $avatar) {
		$created = date('Y-m-d h:i:s');
		$sql = "INSERT INTO users(role, username, password, name, email, phone, birthday, avatar, created) VALUES ('$role', '$username', '$password', '$name', '$email', '$phone', '$birthday', '$avatar', '$created')";
		return mysqli_query($this->connect(), $sql);
	}

	function login($username, $password) {
		$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
		return mysqli_query($this->connect(), $sql);

	}

	function checkExistUser($username, $email) {
		$sql = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
		return mysqli_query($this->connect(), $sql);
	}

	function getListProduct() {
		$sql = "SELECT products.id,
		 products.name,
		 products.price,
		 products.image,
		 products.description,
		 product_categories.name as product_category_name
		 FROM products 
		 INNER JOIN product_categories ON products.product_category_id = product_categories.id
		 ";
		return mysqli_query($this->connect(), $sql);
	}
		function getProductList() {
			$sql = "SELECT * FROM products";
			return mysqli_query($this->connect(), $sql);
		}

	
	function getProductDetail($id) {
		$sql = "SELECT products.id,
		 products.name,
		 products.description,
		 products.price,
		 products.image,
		 product_categories.name as product_category_name
		 FROM products 
		 INNER JOIN product_categories ON products.product_category_id = product_categories.id
		  WHERE products.id = $id";
		return mysqli_query($this->connect(), $sql);
	}
	function getUserID($username) {
			$sql = "SELECT id FROM users WHERE username = '$username'";
			return mysqli_query($this->connect(), $sql);
		}
		function getProductID($name){
			$sql = "SELECT id FROM products WHERE name = '$name'";
			return mysqli_query($this->connect(), $sql);
		}
		function addComment($product_id, $user_id, $content) {
			$created = date('Y-m-d h:i:s');
			$status = 1;
			$sql = "INSERT INTO comments(product_id, user_id, content, created, status) VALUES($product_id, $user_id, '$content', '$created', $status)";
			//var_dump($sql);exit();
			return mysqli_query($this->connect(), $sql);
		}

		function getCommentList($product_id) {
			$sql = "SELECT * FROM comments
			INNER JOIN users ON comments.user_id = users.id 
			WHERE product_id = $product_id AND status = 0";
			return mysqli_query($this->connect(), $sql);
		}
		public function deleteComment($id){
			$sql = "DELETE FROM comments WHERE id= $id";
			return mysqli_query($this->connect(),$sql);
		}


}

?>