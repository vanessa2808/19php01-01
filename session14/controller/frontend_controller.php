<?php 
	include 'model/model.php';
	class FrontendController {
		function handleRequestFrontend() {
			$model = new Model();
			$controller = isset($_GET['controller'])?$_GET['controller']:'home_page';
			$action = isset($_GET['action'])?$_GET['action']:'index';
			echo "ProductPage";
			switch ($controller) {
				case 'home_page':
					
					break;
				case 'product':
				$listProduct = $model->getProduct();
				
					$this->handleProduct($action, $model);
					break;
				default:
					# code...
					break;
			}
			
		}
		function handleProduct($action, $model){
			switch ($action) {
				case 'add_product':
					include_once('view/product/addProductPage.php');
					break;
				case 'list_product':
					include_once('view/product/listProductPage.php');
					break;
				case 'edit_product':
					include_once('view/product/editProductPage.php');
					break;
			}
		}
	}
?>