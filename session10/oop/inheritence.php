<?php 
	include 'exampleOpps.php';
	/**
	 * 
	 */
	class student extends user
	{
		function addUser(){
			echo "Yen xinh dep";
		}
	}
	$testInheritance = new student();
	echo $testInheritance->email;
	echo "<br/>";
	$testInheritance->addUser();
 ?>