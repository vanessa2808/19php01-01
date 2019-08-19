<?php 
	include 'model/backend_model.php';
	class BackendController {

		function handleRequest() {
			$controller = isset($_GET['controller'])?$_GET['controller']:'dashboard';
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($controller) {
				case 'home':
					$this->handeDashboard($action);
					break;
				case 'user':
					$this->handleUser($action);
					break;
				case 'product':
					$this->handleProduct($action);
					break;
				case 'comment':
					$this->handleComment($action);
					break;
				default:
					# code...
					break;
			}
		}
		
		function handleProduct($action) {
			switch ($action) {
				case 'add_product_category':
					if (isset($_POST['add'])) {
						$name = $_POST['name'];
						$model = new BackendModel();
					  if ($model->addProductCategory($name) === TRUE) {
					  	header("Location: admin.php");
					  }
					}
					include 'view/products/add_product_category.php';
					# code...
					break;
				case 'add_product':
				  $model = new BackendModel();
					$categories = $model->getCategory();
					if (isset($_POST['add'])) {
						$name = $_POST['name'];
						$price = $_POST['price'];
						$description = $_POST['description'];
						$product_category_id = $_POST['product_category_id'];
						$image = "default.png";
						if ($_FILES['image']['error'] == 0) {
							$image = $_FILES['image']['name'];
							$pathUpload = 'webroot/uploads/products/';
						}
					  if ($model->addProduct($name, $price, $description, $product_category_id, $image) === TRUE) {
					  	move_uploaded_file($_FILES['image']['tmp_name'], $pathUpload.$image);
					  	header("Location: admin.php?controller=product&action=list_product");
					  }
					}
					include 'view/products/add_product.php';
					# code...
					break;
				case 'list_product':
					# code...
					$model = new BackendModel();
					$listProduct = $model->getListProduct();
					include 'view/products/list_product.php';
					break;
				case 'edit_product':
					$id = $_GET['id'];
					$model = new BackendModel();
						$editProduct =$model->getProduct($id);
						// edit
						if (isset($_POST['edit_product'])) {
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
						if ($model->editProduct($id,$name, $description, $price,  $image) === TRUE) {
							header("Location: admin.php?controller=product&action=list_product");
						}
						}
						include 'view/products/edit_product.php';
						break;	
				case 'delete_product':
					$id = $_GET['id'];
					$model = new BackendModel();
					if($model->deleteProduct($id)===TRUE){
					header("Location: admin.php?controller=product&action=list_product");
				}
					break;
				default:
					# code...
					break;
			}
		}
		function handleUser($action) {
			switch ($action) {
				case 'add_user':
						if (isset($_POST['register'])) {
							$role = $_POST['role'];
							$username = $_POST['username'];
							$password = md5($_POST['password']);
							$name = $_POST['name'];
							$email = $_POST['email'];
							$phone = $_POST['phone'];
							$birthday = date('Y-m-d', strtotime($_POST['birthday']));
							$avatar = 'default.png';
							$pathUpload = 'webroot/uploads/users/';
							if ($_FILES['avatar']['error'] == 0) {
								move_uploaded_file($_FILES['avatar']['tmp_name'], $pathUpload.$_FILES['avatar']['name']);
								$avatar = $_FILES['avatar']['name'];
							}
							// save vao database
							$model = new BackendModel();
							
							// check exist username or email
							if ($checkExistUser->num_rows == 0) {
								if ($model->register($role, $username, $password, $name, $email, $phone, $birthday, $avatar) === TRUE) {
									// Dang nhap luon, sau khi dang ky thanh cong
									$login['username'] = $username;
									$login['role'] = $role;
									$_SESSION['login'] = $login;
									header("Location: admin.php?controller=user&action=list_user");
								}
							} else {
								$errorExistUser = 'Exist email or username';
							}

						}
						include 'view/users/add_user.php';
						break;
				case 'list_user':
					# code...
					$model = new BackendModel();
					$listUser = $model->getListUser();
					include 'view/users/list_user.php';
				break;
				case 'delete_user':
					$id = $_GET['id'];
					$model = new BackendModel();
					if($model->deleteUser($id)===TRUE){
					header("Location: admin.php?controller=user&action=list_user");
			}
					break;
				case 'edit_user':
						$id = $_GET['id'];
						$model = new BackendModel();
						$editUser =$model->getUser($id);
						// edit
						if (isset($_POST['edit_user_form'])) {
							$role = $_POST['role'];
							$username = $_POST['username'];
						  $password = md5($_POST['password']);
						  $name = $_POST['name'];
						  $email = $_POST['email'];
						  $phone = $_POST['phone'];
						  $birthday = $_POST['birthday'];
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
						if ($model->editUser($id, $role, $username, $password, $name, $email, $phone, $birthday, $avatar) === TRUE) {
							header("Location: admin.php?controller=user&action=list_user");
						}
						}
						include 'view/users/edit_user.php';
						
					break;
				default:
					# code...
					break;
			}
		}
	function handleComment($action){
			switch ($action) {
				case 'add_comment':
				if (isset($_POST['comment'])) {
						if (isset($_SESSION['login'])) {
							$content = $_POST['content'];
							$product_id = $_POST['product_id'];
							$model = new BackendModel();
							$users = $model->getUserID($_SESSION['login']['username']);
							$user_id = $users->fetch_assoc();
							$user_id = $user_id['id'];
							if ($model->addComment($product_id, $user_id, $content) === TRUE) {
								header("Location:admin.php?controller=comment&action=list_comment&id=$product_id");
							}
						} else {
							header("Location: admin.php?controller=user&action=login");
						}
					}
					break;
				case 'list_comment':
					# code...
					$model = new BackendModel();
					$listComment = $model->getCommentList();
					include 'view/products/list_comment.php';
					break;

				case 'approve_comment':
						$id = $_GET['id'];
						$model = new BackendModel();
						if ($model->approveComment($id) === TRUE) {
							header("Location: admin.php?controller=comment&action=list_comment");
						}
						# code...
						break;
				default:
					# code...
					break;
			}
	}}
?>