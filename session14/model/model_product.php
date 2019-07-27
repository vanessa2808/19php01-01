<?php
	include 'config/database.php';
	/**
	 * 
	 */
	class model_product extends databaseConnect
	{
		
		public function index(){
			$sql = "SELECT * FROM products";
			$listPage = mysqli_query($this->connect(),$sql);
			return $listPage;
		}
	}


?>