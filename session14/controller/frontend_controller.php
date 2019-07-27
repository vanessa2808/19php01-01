<?php 
	include 'model/model_product.php';
	class FrontendController {
		function handleRequestFrontend() {
			$model_product = new model_product();
			$controller = isset($_GET['controller'])?$_GET['controller']:'home_page';
			$action = isset($_GET['action'])?$_GET['action']:'index';
			echo "ProductPage";
			switch ($controller) {
				case 'home_page':
					
					break;
				case 'product':
					$this->handleProduct($action, $model);
					break;
				default:
					# code...
					break;
			}
			
		}
		function handleProduct($action, $model){
			switch ($action) {
				case 'list_product':
					$this->checkLoginSession();
					# code...
					$listPage = $model_product->listPage();

					include 'index.php';
					break;
				
				default:
					# code...
					break;
			}
		}
	}
?>