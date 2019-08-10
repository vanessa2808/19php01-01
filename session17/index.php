<?php 
  ob_start();
  session_start(); 
?>
<?php include 'controller/frontend_controller.php';  ?>
<!DOCTYPE html>
<html>
<head>
	<title>My shop</title>
	<link rel="stylesheet" type="text/css" href="webroot/css/style.css">
</head>
<body>
	<h1>Frontend website</h1>
	<nav id="nav">
		<ul>
			<li ><a href='index.php?controller=front&action=home'>Home</a></li>
			<li><a href='index.php?controller=news&action=list_news'>News</a></li>
			<li class="active"><a href='index.php?controller=product&action=list_product'>Product</a></li>
			<?php if(isset($_SESSION['username'])){?>
			<li class="logout">Hi, <?php echo $_SESSION['username'];?>
			<a href='index.php?controller=user&action=logout'>Logout</a></li>
			<li><a href='admin.php'>Manage</a></li>
			<?php  }else{ ?>
				<li><a href='index.php?controller=user&action=login'>Login</a></li>
				<li><a href='index.php?controller=user&action=register'>Register</a></li>
			<?php }?>
		</ul>
	</nav>
	<?php
		include 'controller/frontend_controller.php';
		$front = new FrontendController();
		$front->handleRequest();
	?>
</body>
</html>