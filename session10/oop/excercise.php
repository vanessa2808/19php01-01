<?php
	class user{
		public $name, $email, $passWord, $phone, $address;
		public function addUser(){
			echo "ADD ";
		}
		public function editUser(){
			echo "Edit";
		}
		public function register(){
			echo "register";
		} 
		public function login(){
			echo "login";
		}
		public function view(){
			echo "view";
		}
		public function listUser(){
			echo "list";
		}
	}
	$testClass = new user();
	$testClass->editUser();
	$testClass->addUser();
	$testClass->register();
	$testClass->login();
	$testClass->view();
	$testClass->listUser();

?>