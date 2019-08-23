

<?php  
    $errTextProductName  = ''; 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Add the Product categories</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add the product categories
        <small>Version 2.0</small>
        <p style="color: red">Hi <?php echo $_SESSION['login'];?></p>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add the product categories</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
<div class="form">
<h1>Add the product categories</h1>     
<div>
  <form action="admin.php?controller=product_categories&action=add_product_categories" method="POST" enctype="multipart/form-data">
      <div class="box-body">
        <div class="form-group <?php echo $errClassProductName;?>">
          <label for="exampleInputEmail1">Product Name: </label>
          <input type="text" class="form-control" id="exampleInputName" placeholder="Enter name"  name="productName">
          <span class="help-block"><?php echo $errTextProductName;?></span>
        </div>
      
        <!-- radio -->
          
          <button type="submit" class="btn btn-primary" name="add_product_categories">add product categories</button>
      </div>
      <!-- /.box-body -->
 
     

    </form>
  </div>
  </div>

  </body>
  </html>
    