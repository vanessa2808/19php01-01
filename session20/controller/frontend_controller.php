<?php 
	include 'model/frontend_model.php';
  include 'libs/function.php';
	class FrontendController {

		function handleRequest(){
			// Khoi tao model dung chung
			$frontModel = new FrontendModel();
			// khoi tao Lib dung chung
			$libs = new LibCommon();

			$controller = isset($_GET['controller'])?$_GET['controller']:'front';
			$action = isset($_GET['action'])?$_GET['action']:'home';

			switch ($controller) {
				case 'front':
					$this->handleFront($action, $frontModel, $libs);
					break;
				case 'news':
					$this->handleNews($action, $frontModel, $libs);
					break;
				case 'product':
					$this->handleProduct($action, $frontModel, $libs);
					break;
				case 'user':
					$this->handleUsers($action, $frontModel, $libs);
					break;
				default:
					# code...
					break;
			}
		}

		function handleFront($action, $frontModel, $libs){

		}

		function handleProduct($action, $frontModel, $libs){
			switch ($action) {
				case 'list_product':
					$this->checkLoginSession();
					$listProduct = $frontModel->listUser();
					include 'view/product/list_product.php';
					break;
				
				default:
					# code...
					break;
			}
			
		}

		function handleUsers($action, $frontModel, $libs){
			switch ($action) {
				case 'login':
					# code...
					if (isset($_POST['login'])) {
						$username = $_POST['username'];
						$password = $_POST['password'];
						$checkLogin = $frontModel->login($username, $password);
						if($checkLogin->num_rows) {
							$_SESSION['username'] = $username;
							$libs->redirectPage('index.php?controller=front&action=home');
						}
					}
					include 'view/user/login.php';
					break;
				case 'register':
					# code...
					$errRegister = '';
					if (isset($_POST['register'])) {
						$username = $_POST['username'];
						$password = $_POST['password'];

						if($frontModel->register($username, $password) === TRUE) {
							// Cho phep dang nhap khi dang ky thanh cong!
							$_SESSION['username'] = $username;
							$libs->redirectPage('index.php?controller=front&action=home');
						} else {
								$errRegister = 'Username exist!';
						}
					}
					include 'view/user/register.php';
					break;
				case 'logout':
					unset($_SESSION['username']);
					session_destroy();
					$libs->redirectPage('index.php?controller=front&action=home');
					break;
				default:
					# code...
					break;
			}
		}

		function handleNews($action, $frontModel, $libs){
				switch ($action) {
				case 'list_news':
					$this->checkLoginSession();
					$listNews = $frontModel->listNews();
					include 'view/news/list_news.php';
					break;
				
				default:
					# code...
					break;
			}
		
		function checkLoginSession() {
			if (!isset($_SESSION['login'])) {
				header("Location: admin.php?controller=user&action=login");
			}
		}	
		}

	}
?>