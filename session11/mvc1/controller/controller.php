<?php 
	include 'model/model.php';
	class Controller {

		public function handleRequest() {
			$model = new Model();
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($action) {
				case 'home':
					// goi model get du lieu
					$home = $model->getHomePage();

					// goi view home
					include 'view/home/home.php';
					break;
				case 'news':
					// goi model xu ly du lieu
					$showNews = $model->getNews();
					$related = $model->getNewsRelated();

					// goi view news
					include 'view/news/news.php';
					break;
				case 'products':
					// goi model xu ly du lieu
					$productList = $model->getProductPage();
					// goi view products
					include 'view/products/products.php';
					break;
				case 'product_detail':
					// lay id cua san pham chi tiet
					$id = $_GET['id'];
					// goi model xu ly du lieu
					$productDetail = $model->getProductDetail($id);
					// goi view products
					include 'view/products/product_detail.php';
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