<?php 
include 'config/database.php';
class BackendModel extends DatabaseConnect {
// Check login session
	public function getListUser() {
		$sql = "SELECT * FROM users";
		return mysqli_query($this->connect(), $sql);
	}
	function register($role, $username, $password, $name, $email, $phone, $birthday, $avatar) {
		$created = date('Y-m-d h:i:s');
		$sql = "INSERT INTO users(role, username, password, name, email, phone, birthday, avatar, created) VALUES ('$role', '$username', '$password', '$name', '$email', '$phone', '$birthday', '$avatar', '$created')";
		return mysqli_query($this->connect(), $sql);
	}
	// CATAGORY
	public function addProductCategory($name) {
		$sql = "INSERT INTO product_categories(name) VALUES('$name')";
		return mysqli_query($this->connect(), $sql);	
	}
	public function getCategory() {
		$sql = "SELECT * FROM product_categories";
		return mysqli_query($this->connect(), $sql);
	}
	// view/PRODUCT
	public function addProduct($name, $price, $description, $product_category_id, $image) {
		$created = date('Y-m-d h:i:s');
		$sql = "INSERT INTO products(name, price, description, product_category_id, image, created) VALUES('$name', '$price', '$description', $product_category_id, '$image', '$created')";
		return mysqli_query($this->connect(), $sql);
	}

	public function getListProduct() {
		$sql = "SELECT products.id,
		 products.name,
		 products.price,
		 products.image,
		 product_categories.name as product_category_name
		 FROM products 
		 INNER JOIN product_categories ON products.product_category_id = product_categories.id
		 ";
		return mysqli_query($this->connect(), $sql);
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
		public function editProduct($id, $name, $description,$price, $image){
			$sql = "UPDATE products SET name = '$name' , description = '$description',  price = '$price', image ='$image' WHERE id= $id";
			return mysqli_query($this->connect(), $sql);
		}
		// view/USERS
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
		public function editUser($id,$role, $username, $password, $name, $email, $phone, $birthday, $avatar){
			$sql = "UPDATE users SET role = '$role', username='$username', password = '$password',name = '$name', email = '$email', phone = '$phone', birthday = '$birthday', avatar = '$avatar'  WHERE id = $id";
			return mysqli_query($this->connect(),$sql);
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
		
		// comment
		function addComment($product_id, $user_id, $content) {
			$created = date('Y-m-d h:i:s');
			$status = 1;
			$sql = "INSERT INTO comments(product_id, user_id, content, created, status) VALUES($product_id, $user_id, '$content', '$created', $status)";
			//var_dump($sql);exit();
			return mysqli_query($this->connect(), $sql);
		}
		
		public function listComment(){
			$sql = "SELECT * FROM comments";
			$listComment = mysqli_query($this->connect(),$sql);
			return $listComment;
		}
		function approveComment($id) {
			$sql = "UPDATE comments SET status = 0 WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}

		function getCommentList() {
			$sql = "SELECT comments.id,
			comments.content,
			comments.created,
			comments.product_id,
			comments.status,
			products.name,
			comments.user_id,
			products.id as product_id
			FROM comments
			INNER JOIN products ON products.id = comments.product_id";
			return mysqli_query($this->connect(), $sql);
		}

	}
?>