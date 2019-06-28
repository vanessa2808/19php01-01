<?php
	session_start();
	$_SESSION['name'] = '19PHP01';
		$_SESSION['class'] = 'YEN';

	echo $_SESSION['name'];
	// khi mua hang neu chuwa mua han se luu vao database
	unset($_SESSION['class']);


?>