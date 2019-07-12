<?php 
	include 'model/model.php';
	include 'libs/function.php';
	class Controller {

		public function handleRequest() {
			$model = new Model();
			$functionCommon = new FunctionCommon();
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
				case 'delete_product':
				   // lay id cua san pham can xoa
					$id = $_GET['id'];
					// goi model thuc hien xoa san pham
					if ($model->deleteProduct($id) === TRUE) {
						//header("Location: "index.php?action=products);
						$functionCommon->redirectPage('index.php?action=products');
					}
					break;
				case 'add_product':
					# code...
					// check xem da submit add product chua?
					if (isset($_POST['add_product_form'])) {
						$name = $_POST['name'];
						$description = $_POST['description'];
						$price = $_POST['price'];
						$image = 'default.jpg';
						$created = date('Y-m-d h:i:s');
						// save vao database
						if ($model->addProduct($name, $description, $price, $image, $created) === TRUE) {
							$functionCommon->redirectPage('index.php?action=products');
						}
					}
					// goi view hien thi trang add product
					include 'view/products/add_product.php';
					break;
				case 'edit_product':
					if (isset($_POST['add_product_form'])) {
						$name = $_POST['name'];
						$description = $_POST['description'];
						$price = $_POST['price'];
						$image = 'default.jpg';
						$created = date('Y-m-d h:i:s');
						// save vao database
						if ($model->editProduct($name, $description, $price, $image, $created) === TRUE) {
							$functionCommon->redirectPage('index.php?action=products');
						}
					}
					include 'view/products/edit_product.php';
					break;
				default:
					# code...
					break;
			}
		}

	}
?>