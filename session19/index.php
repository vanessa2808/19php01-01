<?php 
	session_start();
	include 'controller/frontend_controller.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
	<link rel="stylesheet" type="text/css" href="webroot/css/style.css">
</head>
<body>
	<h1>Frontend website</h1>
	<nav>
		<ul>
			<li><a href="index.php?controller=home&action=home">Home</a></li>
			<li><a href="">News</a></li>
			<li><a href="index.php?controller=product&action=list_product">Products</a></li>
			<?php if(isset($_SESSION['login']['username'])){?>
				<li class="login_account">Hi, <?php echo $_SESSION['login']['username'];?><a href="index.php?controller=user&action=logout"> Logout</a></li>
				<li><a href="admin.php?controller=user&action=list_user">Manage</a></li>
			<?php }else {?>
				<li><a href="index.php?controller=user&action=login">Login</a></li>
				<li><a href="index.php?controller=user&action=register">Register</a></li>
			<?php }?>
		</ul>
	</nav>
	<?php 
		$front = new FrontendController();
		$front->handleRequest();
	?>
</body>
</html>