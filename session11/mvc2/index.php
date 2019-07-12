<link rel="stylesheet" type="text/css" href="webroot/css/style.css">
<a href="index.php">Home</a>
 | <a href="index.php?action=news">News</a>
| <a href="index.php?action=products">Products</a>
| <a href="index.php?action=contact">Contact</a>
<?php
	include 'controller/controller.php';
	$controller = new Controller();
	$controller->handleRequest();
?>