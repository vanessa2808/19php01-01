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
				case 'comment':
					$this->handleComment($action);
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
							// check exist username or email
							if ($checkExistUser->num_rows == 0) {
								if ($model->register($role, $username, $password, $name, $email, $phone, $birthday, $avatar) === TRUE) {
									// Dang nhap luon, sau khi dang ky thanh cong
									$login['username'] = $username;
									$login['role'] = $role;
									$_SESSION['login'] = $login;
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
								$checkogin = $checkogin->fetch_assoc();
								$login['username'] = $username;
								$login['role'] = $checkogin['role'];
								$_SESSION['login'] = $login;
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
				case 'list_product':
					# code...
					$model = new FrontendModel();
					$listProduct = $model->getListProduct();
					include 'view/products/list_product_frontend.php';
					break;
				case 'product_detail':
					$id = $_GET['id'];
					$model = new FrontendModel();
					$productDetail = $model->getProductDetail($id);
					$productDetail = $productDetail->fetch_assoc();
					$commentList = $model->getCommentList($id);
					include 'view/products/product_detail_frontend.php';
					# code...
					break;

				default:
					# code...
					break;
			}
		}

		function handleComment($action) {
			switch ($action) {
				case 'add_comment':
					if (isset($_POST['comment'])) {
						if (isset($_SESSION['login'])) {
							$content = $_POST['content'];
							$product_id = $_POST['product_id'];
							$model = new FrontendModel();
							$users = $model->getUserID($_SESSION['login']['username']);
							$user_id = $users->fetch_assoc();
							$user_id = $user_id['id'];
							if ($model->addComment($product_id, $user_id, $content) === TRUE) {
								header("Location:index.php?controller=product&action=product_detail&id=$product_id");
							}
						} else {
							header("Location: index.php?controller=user&action=login");
						}
					}
					break;
				case 'list_comment':
					# code...
					$model = new FrontendModel();
					$commentList = $model->getCommentList($id);
					include 'view/products/list_product_frontend.php';
					break;
				case 'delete_comment':
					$id = $_GET['id'];
					$model = new FrontendModel();
					if($model->deleteComment($id)===TRUE){
					header("Location: admin.php?controller=comment&action=list_comment");
				}
					# code...
					break;
				default:
					# code...
					break;
			}
		}
	}
?>