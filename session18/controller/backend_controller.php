<?php 
	include 'model/backend_model.php';
	class Controller {

		function handleRequest(){
			$model = new Model();
			$controller = isset($_GET['controller'])?$_GET['controller']:'home';
			$action = isset($_GET['action'])?$_GET['action']:'index';

			switch ($controller) {
				case 'home':
					# code...
					echo "HOME PAGE";
					break;
				case 'user':
					# code...
					$this->handleUser($action, $model);
					break;
				case 'news':
					# code...
					$this->handleNews($action, $model);
					break;
				case 'product':
					$this->handleProduct($action, $model);
					break;
				case 'product_categories':
					$this->handleProductCategories($action, $model);
					break;
				case 'list_product_page':
					$this->handleListProductPage($action, $model);
					break;
				
				default:
					# code...
					break;
			}
		}

		function handleUser($action, $model) {
			switch ($action) {
				case 'add_user':
					$this->checkLoginSession();
					# code...
					if (isset($_POST['add_user'])) {
						$username = $_POST['username'];
						$password = ($_POST['password']);
						$avatar = 'default.jpg';
						if ($_FILES['avatar']['error'] == 0) {
							$oldImage = $avatar;
						  $avatar = uniqid().'_'.$_FILES['avatar']['name'];
						  move_uploaded_file($_FILES['avatar']['tmp_name'], 'webroot/uploads/users'.$avatar);
						  // Xoa anh cu neu chon anh moi (tru truong hop a cu la anh default)
						  if ($oldImage != 'default.jpg') {
           					 unlink("webroot/uploads/users".$oldImage);  
         				 }
						}

						if($model->addUser($username, $password, $avatar) === TRUE){
							header("Location: admin.php?controller=user&action=list_user");
						}
						# code...
					}
					include 'view/users/add_user.php';
					break;
				case 'list_user':
					$this->checkLoginSession();
					# code...
					$listUser = $model->listUser();
					include 'view/users/list_user.php';
					break;
				case 'delete_user':
					$id = $_GET['id'];
					if($model->deleteUser($id)===TRUE){
					header("Location: admin.php?controller=user&action=list_user");
				}
				case 'edit_user':
					$id = $_GET['id'];
						$editUser =$model->getUser($id);
						// edit
						if (isset($_POST['edit_user_form'])) {
							$username = $_POST['username'];
						  $password = md5($_POST['password']);
						  $avatar = 'default.jpg';
						  if ($_FILES['avatar']['error'] == 0) {
							$oldImage = $avatar;
						  $avatar = uniqid().'_'.$_FILES['avatar']['name'];
						  move_uploaded_file($_FILES['avatar']['tmp_name'], 'webroot/uploads/users'.$avatar);
						  // Xoa anh cu neu chon anh moi (tru truong hop a cu la anh default)
						  if ($oldImage != 'default.jpg') {
           					 unlink("webroot/uploads/users".$oldImage);  
         				 }
						}
						 // edit vao database
						if ($model->editUser($id,$username, $password, $avatar) === TRUE) {
							header("Location: admin.php?controller=user&action=list_user");
						}
						}
						include 'view/users/edit_user.php';
						break;	
				case 'login':
					# code...
					if (isset($_POST['login'])) {
						$username = $_POST['username'];
						$password = ($_POST['password']);
						$checkLogin = $model->checkLogin($username, $password);
						if($checkLogin->num_rows > 0){
							$_SESSION['login'] = $username;
							header("Location: admin.php?controller=user&action=list_user");
						} else {
							header("Location: admin.php?controller=user&action=login");
						}
						# code...
					}
					
					break;
				case 'logout':
					unset($_SESSION['login']);
					header("Location:admin.php?controller=user&action=logout");
					break;
				default:
					# code...
					break;
			}
		}

		function handleNews($action, $model) {
			switch ($action) {
				case 'add_news':
					$this->checkLoginSession();
					# code...
					if (isset($_POST['add_news'])) {
						$title = $_POST['title'];
						$description = $_POST['description'];
						$image = 'default.jpg';
						$created = date('Y-m-d h:i:s');
						if ($_FILES['image']['error'] == 0) {
							$oldImage = $image;
						  $image = uniqid().'_'.$_FILES['image']['name'];
						  move_uploaded_file($_FILES['image']['tmp_name'], 'webroot/uploads/news'.$image);
						  // Xoa anh cu neu chon anh moi (tru truong hop a cu la anh default)
						  if ($oldImage != 'default.jpg') {
           					 unlink("webroot/uploads/news".$oldImage);  
         				 }
						}
						
						if($model->addNews($title, $description, $image,$created) === TRUE){
							header("Location: admin.php?controller=news&action=list_news");
						}
						# code...
					}
					include 'view/news/add_news.php';
					break;
				case 'edit_news':
					$id = $_GET['id'];
						$editNews =$model->getNews($id);
						// edit
						if (isset($_POST['edit_form_news'])) {
							$title = $_POST['title'];
						  	$description = $_POST['description'];
						  	if ($_FILES['image']['error'] == 0) {
							$oldImage = $image;
						  $image = uniqid().'_'.$_FILES['image']['name'];
						  move_uploaded_file($_FILES['image']['tmp_name'], 'webroot/uploads/news'.$image);
						  // Xoa anh cu neu chon anh moi (tru truong hop a cu la anh default)
						  if ($oldImage != 'default.jpg') {
           					 unlink("webroot/uploads/news".$oldImage);  
         				 }
						}
						  	$created = $_POST['created'];
						 // edit vao database
						if ($model->editNews($id,$title, $description, $image) === TRUE) {
							header("Location: admin.php?controller=news&action=list_news");
						}
						}
						include 'view/news/edit_news.php';
					break;
				case 'delete_news':
					$id = $_GET['id'];
					if($model->deleteNews($id)===TRUE){
					header("Location: admin.php?controller=news&action=list_news");
				}
					break;
				case 'list_news':
					$this->checkLoginSession();
					# code...
					$listNews = $model->listNews();
					include 'view/news/list_news.php';
					break;
				default:
					# code...
					break;
			}

		}
		function handleProduct($action, $model){
			switch ($action) {
				case 'add_product':
					$this->checkLoginSession();
					# code...
					if (isset($_POST['add_product'])) {
						$product_category_id = $_POST['product_category_id'];
						$name = $_POST['name'];
						$description = $_POST['description'];
						$image = 'default.jpg';
						$price = $_POST['price'];
						
						$created = date('Y-m-d h:i:s');
						if ($_FILES['image']['error'] == 0) {
							$oldImage = $image;
						  $image = uniqid().'_'.$_FILES['image']['name'];
						  move_uploaded_file($_FILES['image']['tmp_name'], 'webroot/uploads/products'.$image);
						  // Xoa anh cu neu chon anh moi (tru truong hop a cu la anh default)
						  if ($oldImage != 'default.jpg') {
            					unlink("webroot/uploads/products".$oldImage);  
        				  }
						}
						
						if($model->addProduct($product_category_id, $name, $description, $image, $price, $created) === TRUE){
							header("Location: admin.php?controller=product&action=list_product");
				
						}
						# code...
					}
					include 'view/products/add_product.php';
					break;
				case 'edit_product':
					$id = $_GET['id'];
						$editProduct =$model->getProduct($id);
						// edit
						if (isset($_POST['edit_form_product'])) {
							$product_category_id = $_POST['product_category_id'];
							$name = $_POST['name'];
						  	$description = $_POST['description'];
						  	if ($_FILES['image']['error'] == 0) {
							$oldImage = $image;
						  $image = uniqid().'_'.$_FILES['image']['name'];
						  move_uploaded_file($_FILES['image']['tmp_name'], 'webroot/uploads/products'.$image);
						  // Xoa anh cu neu chon anh moi (tru truong hop a cu la anh default)
						  if ($oldImage != 'default.jpg') {
            					unlink("webroot/uploads/products".$oldImage);  
        				  }
						}
						  	$price = $_POST['price'];
						  	
						 // edit vao database
						if ($model->editProduct($id, $product_category_id,$name, $description, $image,  $price) === TRUE) {
							header("Location: admin.php?controller=product&action=list_product");
						}
						}
						include 'view/products/edit_product.php';
						break;	
				case 'delete_product':
					$id = $_GET['id'];
					if($model->deleteProduct($id)===TRUE){
					header("Location: admin.php?controller=product&action=list_product");
					break;
				}
				case 'list_product':
					$this->checkLoginSession();
					# code...
					$listProduct = $model->listProduct();

					include 'view/products/list_product.php';
					break;
				default:
					# code...
					break;
			}
		}
		// product categories
		function handleProductCategories($action, $model){
			switch ($action) {
				case 'add_product_categories':
					$this->checkLoginSession();
					# code...
					if (isset($_POST['add_product_categories'])) {
						$productName = $_POST['productName'];
						
						if($model->addProductCategories($productName) === TRUE){
							header("Location: admin.php?controller=product_categories&action=list_product_categories");
						}
						# code...
					}
					include 'view/product_categories/product_categories.php';
					break;
			
				case 'list_product_categories':
					$this->checkLoginSession();
					# code...
					$listProductCategories = $model->listProductCategories();

					include 'view/product_categories/listProduct_categories.php';
					break;
				case 'delete_product_categories':
					$id = $_GET['id'];
					if($model->deleteProductCategories($id)===TRUE){
					header("Location: admin.php?controller=product_categories&action=list_product_categories");
				}
				default:
					# code...
					break;
			}
		}
		function checkLoginSession() {
			if (!isset($_SESSION['login'])) {
				header("Location: admin.php?controller=user&action=login");
			}
		}
		function handleListProductPage($action, $model){
			switch ($action) {
				case 'add_product_categories':
					$this->checkLoginSession();
					# code...
					if (isset($_POST['add_product_categories'])) {
						$productName = $_POST['productName'];
						
						if($model->addProductCategories($productName) === TRUE){
							header("Location: admin.php?controller=list_product_page&action=list_product_page");
						}
						# code...
					}
					include 'view/product_categories/product_categories.php';
					break;
				case 'list_product_page':
					$this->checkLoginSession();
					# code...
					$listProductPage = $model->listProductPage();

					include 'index.php';
					break;
				default:
					# code...
					break;
			}
			

		}


		
	}
	?>