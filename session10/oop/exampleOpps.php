<?php
	class user{
		public $name;
		public $email = 'sdc@gmail.com';
		function addUsers(){
			echo "Add users";

		}
		function editUser($old = 20){
			echo $this->email.'-------'.$old;
		}

	}

	$user = new user();
	$user->addUsers();
	echo "<br/>";
	echo $user->email;
	echo "<br/>";
	// co doi so
	$test = $user ->editUser('230');
	echo $test;
	echo "<br/>";
	$test = $user ->editUser();
	echo $test;
?>