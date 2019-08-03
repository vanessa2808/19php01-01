

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>REGNA - Tech World</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="front_end/img/favicon.png" rel="icon">
  <link href="front_end/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="front_end/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="front_end/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="front_end/lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="front_end/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Regna
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="front_end/img/logo.png" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li class="menu-has-children"><a href="">categories</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="menu-has-children"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

 
 

    <!--==========================
      About Us Section
    ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
      </div>
      <div class="credits">
      </div>
    </div>
  </footer>

 <main>
	<?php 
	include 'controller/frontend_controller.php';
	$frontend_controller = new FrontendController();
	$frontend_controller->handleRequestFrontend();

?>

</main>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="front_end/lib/jquery/jquery.min.js"></script>
  <script src="front_end/lib/jquery/jquery-migrate.min.js"></script>
  <script src="front_end/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="front_end/lib/easing/easing.min.js"></script>
  <script src="front_end/lib/wow/wow.min.js"></script>
  <script src="front_end/lib/waypoints/waypoints.min.js"></script>
  <script src="front_end/lib/counterup/counterup.min.js"></script>
  <script src="front_end/lib/superfish/hoverIntent.js"></script>
  <script src="front_end/lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="front_end/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="front_end/js/main.js"></script>

</body>
</html>
