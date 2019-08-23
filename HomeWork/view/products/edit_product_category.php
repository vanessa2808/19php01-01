
<?php  
    $errTextProductName  = ''; 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Edit the Product categories</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
 
    <!-- Main content -->
   
<div class="form">
<h1>Edit the product categories</h1>     
<div>
  <form action="admin.php?controller=product&action=edit_product_category" method="POST" enctype="multipart/form-data">
      <div class="box-body">
        <div class="form-group <?php echo $errClassProductName;?>">
          <label for="exampleInputEmail1">Product Name: </label>
          <input type="text" class="form-control" id="exampleInputName" placeholder="Enter name"  name="name" required value="<?php echo $editProductCategory['name']?>">
          <span class="help-block"><?php echo $errTextProductName;?></span>
        </div>

          <input type="submit" class="btn btn-primary" name="editProductCategory" value="Add product category">
      </div>
      <!-- /.box-body -->
 
     

    </form>
  </div>
  </div>

  </body>
  </html>
