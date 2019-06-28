
<?php 
	include 'excercise.php';
	/**
	 * 
	 */
	class customer extends user{
		public $address;
		public $customerID;
		public function payGoods(){
			echo "pay";
		}
		public function history(){
			echo "history";
		}
	}
	$testInheritance = new customer();
	echo "<br/>";
	$testInheritance->editUser();
	echo "<br/>";
	$testInheritance->register();
	echo "<br/>";
	$testInheritance->login();
	echo "<br/>";
	$testInheritance->view();
	echo "<br/>";
	$testInheritance->payGoods();
	echo "<br/>";
	$testInheritance->history();
	echo "<br/>";
 ?>