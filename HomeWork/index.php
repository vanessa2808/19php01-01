<?php 
	session_start();
	include 'controller/frontend_controller.php';
?>


<?php include 'view/element_frontend/header.php'; ?>
    <!-- END nav -->

 <?php 
    $front = new FrontendController();
    $front->handleRequest();
  ?>


