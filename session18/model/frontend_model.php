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

	public function checkExistUser($username, $email) {
		$sql = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
		return mysqli_query($this->connect(), $sql);
	}
	public function addProduct($product_category_id, $name, $description,  $image,$price,$created){
			$sql = "INSERT INTO products(product_category_id, name, description,image, price, created) VALUES ('$product_category_id', '$name', '$description', '$image', '$price','$created')";
			return mysqli_query($this->connect(),$sql);
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
	public function deleteProduct($id){
		$sql = "DELETE FROM products WHERE id= $id";
		return mysqli_query($this->connect(),$sql);
	}
	public function editProduct($id, $product_category_id, $name, $description,$image, $price){
		$sql = "UPDATE products SET product_category_id ='$product_category_id', name = '$name' , description = '$description',  image = '$image', price ='$price' WHERE id= $id";
		return mysqli_query($this->connect(), $sql);
	}
	public function productDetail($id){
		$productDetail = 'Detail of product' . $id;
		$sql = "SELECT * FROM products";
		$productDetail = mysqli_query($this->connect(), $sql);
		return $productDetail;
	}
		public function addComment($id, $content,  $created, $status){
			$sql = "INSERT INTO comments(id, content, created, status) VALUES ('$id', '$content', '$created', '$status')";
			return mysqli_query($this->connect(),$sql);
	}
	public function listComment($id){
		$sql = "SELECT * FROM comments, products,users";
		$listComment = mysqli_query($this->connect(),$sql);
		return $listComment;
	}

	public function getUser($id){
		$sql = "SELECT * FROM comments WHERE id = $id";
		$result = mysqli_query($this->connect(),$sql);
		return $result->fetch_assoc();
	}

	public function getProductID($id){
		$sql = "SELECT * FROM comments WHERE id = $id";
		$result = mysqli_query($this->connect(),$sql);
		return $result->fetch_assoc();
	}



}

?>