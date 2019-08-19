<?php 
	session_start(); 
	include 'controller/backend_controller.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Administrator website</title>
	<link rel="stylesheet" type="text/css" href="webroot/css/style_backend.css">
</head>
<body>
	<h1>Backend website</h1>
	<p>Hi <?php echo $_SESSION['login']['username'];?>
	<a href="index.php?controller=user&action=logout">Logout</a></p>
	<nav>
		<ul>
			<li><a href="admin.php?controller=dashboard&action=home">Dashboard</a></li>
			<li><a href="">News</a></li>
			<li><a href="admin.php?controller=product&action=list_product">Products</a></li>
		  <li><a href="admin.php?controller=user&action=list_user">Users</a></li>
		</ul>
	</nav>
	<?php 
		if (isset($_SESSION['login'])) {
			$backend = new BackendController();
			$backend->handleRequest();
		} else {
			header('Location: index.php');
		}
	?>
</body>
</html>