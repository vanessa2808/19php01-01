<?php 
	include 'config/database.php';

	class Model extends connectDB {
		// Check login
		public function checkLogin($username, $password) {
			$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
			$listUser = mysqli_query($this->connect(), $sql);
			return $listUser;
		}
		// users
		function addUser($username, $password, $avatar) {
			$sql = "INSERT INTO users(username, password, avatar) VALUES ('$username', '$password','$avatar')";
			return mysqli_query($this->connect(), $sql);
		}

		public function listUser() {
			$sql = "SELECT * FROM users";
			$listUser = mysqli_query($this->connect(), $sql);
			return $listUser;
		}
		public function getUser($id) {
			$sql = "SELECT * FROM users WHERE id = $id";
			$result = mysqli_query($this->connect(), $sql);
			return $result->fetch_assoc();
		}
		public function deleteUser($id){
			$sql = "DELETE FROM users WHERE id = $id";
			return mysqli_query($this->connect(),$sql);
		}
		public function editUser($id, $username, $password, $avatar){
			$sql = "UPDATE users SET username = '$username', password = '$password',avatar = '$avatar' WHERE id = $id";
			return mysqli_query($this->connect(),$sql);
		}
		// products
		public function addProduct($productName, $description, $price, $image, $created){
			$sql = "INSERT INTO products(productName, description, price, image, created) VALUES ('$productName','$description','$price','$image','$created')";
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
		public function editProduct($id, $productName, $description, $price, $image){
			$sql = "UPDATE products SET productName ='$productName', description = '$description', price ='$price', image = '$image' WHERE id= $id";
			return mysqli_query($this->connect(), $sql);
		}
		// news
		public function addNews($title, $description, $image, $created){
			$sql = "INSERT INTO news(title, description, image, created) VALUES ('$title','$description','$image','$created')";
			return mysqli_query($this->connect(),$sql);
		}
		public function listNews(){
			$sql = "SELECT * FROM news";
			$listNews = mysqli_query($this->connect(),$sql);
			return $listNews;
		}
		public function getNews($id){
			$sql = "SELECT * FROM news WHERE id = $id";
			$result = mysqli_query($this->connect(),$sql);
			return $result->fetch_assoc();
		}
		public function deleteNews($id){
			$sql = "DELETE FROM news WHERE id= $id";
			return mysqli_query($this->connect(),$sql);
		}
		public function editNews($id, $title, $description, $image){
			$sql = "UPDATE news SET title ='$title', description = '$description ', image = '$image' WHERE id= $id";
			return mysqli_query($this->connect(), $sql);
		}
		// list product in the index
		public function getProductCategories($id){
			$sql = "SELECT * FROM product_categories WHERE id = $id";
			$result = mysqli_query($this->connect(),$sql);
			return $result->fetch_assoc() ;
		}
		public function addProductCategories($productName){
			$sql = "INSERT INTO product_categories(productName) VALUES ('$productName')";
			return mysqli_query($this->connect(), $sql);
		}
		public function listProductCategories(){
			$sql = "SELECT * FROM product_categories";
			$listProductCategories = mysqli_query($this->connect(),$sql);
			return $listProductCategories;
		}
		public function deleteProductCategories($id){
			$sql = "DELETE FROM product_categories WHERE id= $id";
			return mysqli_query($this->connect(),$sql);
		}
		public function getProductDetail($id, $description){
			$productDetail = $description. $id;
			return $productDetail;
		}
		// list product in the index
		public function listProductPage(){
			$sql = "SELECT * FROM products";
			$listProductPage = mysqli_query($this->connect(),$sql);
			return $listProductPage;
		}
		
		

	}
?>