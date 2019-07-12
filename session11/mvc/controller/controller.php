<?php 
	class Controller {

		public function handleRequest() {
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($action) {
				case 'home':
					// goi view home
					include 'view/home/home.php';
					break;
				case 'news':
					// goi view news
					include 'view/news/news.php';
					break;
				case 'products':
					// goi view products
					include 'view/products/products.php';
					break;
				case 'contact':
					// goi view contact
					include 'view/contact/contact.php';
					break;
				default:
					# code...
					break;
			}
		}

	}
?>