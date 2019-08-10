<?php 
	include 'model/frontend_model.php';
	class FrontendController {
		function handleRequest() {
			$controller = isset($_GET['controller'])?$_GET['controller']:'home';
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($controller) {
				case 'home':
					$this->handeHome($action);
					break;
				case 'user':
					$this->handleUser($action);
					break;
				case 'product':
					$this->handleProduct($action);
					break;
				default:
					# code...
					break;
			}
		}
		function handeHome($action) {

		}
		function handleUser($action) {
				switch ($action) {
					case 'register':
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
							$model = new FrontendModel();
							$errorExistUser = '';
							$checkExistUser = $model->checkExistUser($username, $email);
							if ($checkExistUser->num_rows == 0) {
								if ($model->register($role, $username, $password, $name, $email, $phone, $birthday, $avatar) === TRUE) {
									// Dang nhap luon, sau khi dang ky thanh cong
									$_SESSION['login'] = $username;
									header("Location: index.php");
								}
							} else {
								$errorExistUser = 'Exist email or username';
							}

						}
						include 'view/users/register.php';
						break;
					case 'login':
						if (isset($_POST['login'])) {
							$username = $_POST['username'];
							$password = md5($_POST['password']);
							$model = new FrontendModel();
							$checkogin = $model->login($username, $password);
							if ($checkogin->num_rows > 0) {
								$_SESSION['login'] = $username;
								header("Location: index.php");
							}
						}
						include 'view/users/login.php';
						# code...
						break;
					case 'logout':
						unset($_SESSION['login']);
						header("Location: index.php");
					default:
						# code...
						break;
				}
		}
		function handleProduct($action) {
			switch ($action) {
				case 'add_product':
					# code...
					break;
				case 'list_product':
					$this->checkLoginSession();
					$model = new FrontendModel();
					$listProduct =  $model->listProduct();
					include 'view/products/list_product_page.php';
					break;
				case 'product_detail':
					$product_id = $_GET['product_id'];
					$this->checkLoginSession();
					$model = new FrontendModel();
					$productDetail = $model->productDetail($product_id);
					include 'view/products/product_details.php';
					break;
				case 'add_comment':
					$this->checkLoginSession();
					# code...
					if (isset($_POST['add_comment'])) {
						$id = $_GET['id'];
						$user_id = $_GET['user_id'];
						$product_id = $_GET['product_id'];
						$content = $_POST['content'];	
						$created = date('Y-m-d h:i:s');
						$status = 0;
						$model = new FrontendModel();				
						if($model->addComment($user_id, $product_id, $content, $created, $status) === TRUE){
							header("Location: index.php?controller=product&action=list_comment&user_id=<?php echo $user_id ?>&id=<?php echo $id   ?> &product_id=<?php echo $product_id ?>");
				
						}
						# code...
					}
					include 'view/products/comment.php';
					
					break;
				case 'list_comment':
				
				$id = $_GET['id'];
				$user_id = $_GET['user_id'];
				$product_id = $_GET['product_id'];
				$this->checkLoginSession();
					$model = new FrontendModel();
					$listComment =  $model->listComment($id, $user_id, $product_id);
					include 'view/products/product_comment.php';
					break;
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
	}
?>