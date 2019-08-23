

	  <!DOCTYPE html>
<html lang="en">
  <head>
    <title>My website </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="frontend/uptown/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="frontend/uptown/css/animate.css">
    
    <link rel="stylesheet" href="frontend/uptown/css/owl.carousel.min.css">
    <link rel="stylesheet" href="frontend/uptown/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="frontend/uptown/css/magnific-popup.css">

    <link rel="stylesheet" href="frontend/uptown/css/aos.css">

    <link rel="stylesheet" href="frontend/uptown/css/ionicons.min.css">

    <link rel="stylesheet" href="frontend/uptown/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="frontend/uptown/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="frontend/uptown/css/flaticon.css">
    <link rel="stylesheet" href="frontend/uptown/css/icomoon.css">
    <link rel="stylesheet" href="frontend/uptown/css/style.css">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php?controller=home&action=home">Vanessa</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php?controller=home&action=home" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="index.php?controller=about&action=aboutUS" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="index.php?controller=product&action=list_product" class="nav-link">Product</a></li>
	          <li class="nav-item"><a href="index.php?controller=new&action=list_new" class="nav-link">News</a></li>
	          


	          <?php if(isset($_SESSION['login']['username'])){?>
				<li class="nav-item"><span class="nav-item">Hi, <?php echo $_SESSION['login']['username'];?></span><a href="index.php?controller=user&action=logout" class="nav-link"> Logout</a></li>
				<li class="nav-item"><a href="admin.php?controller=user&action=list_user" class="nav-link">Manage</a></li>
			<?php }else {?>
				<li class="nav-item"><a href="index.php?controller=user&action=login" class="nav-link">Login</a></li>
				<li class="nav-item"><a href="index.php?controller=user&action=register" class="nav-link">Register</a></li>
			<?php }?>
	          <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->