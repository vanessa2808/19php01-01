<?php  
 $errTextProductName  = $errTextDescription = $errTextPrice =$errTextImage= $errTextProduct_category_id=  '';
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Edit the product</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit the products
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit the product</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
<div class="form">
<h1>Edit the products</h1>     
<div>
  <form action="admin.php?controller=product&action=edit_product&id=<?php echo $id ?>" method="POST" enctype="multipart/form-data">
    <div class="box-body">
        <div class="form-group <?php echo $errClassProductCategoryId;?>">
          <label for="exampleInputEmail1">Product Name: </label>
          <input type="text" class="form-control" id="exampleInputName" placeholder="Enter Product id"  name="product_category_id" required value="<?php echo $editProduct['product_category_id']  ?>">
          <span class="help-block"><?php echo $errTextProduct_category_id;?></span>
        </div>

      <div class="box-body">
        <div class="form-group <?php echo $errClassProductName;?>">
          <label for="exampleInputEmail1">Product Name: </label>
          <input type="text" class="form-control" id="exampleInputName" placeholder="Enter name"  name="name" required value="<?php echo $editProduct['productName']  ?>">
          <span class="help-block"><?php echo $errTextProductName;?></span>
        </div>
        <div class="form-group <?php echo $errClassDescription;?>">
          <label for="exampleInputEmail1">Description: </label>
          <textarea type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter description" name="description"> <?php echo  $editProduct['description'];  ?></textarea>
         
            <span class="help-block"><?php echo $errTextDescription;?></span>
        </div>

        <div class="form-group <?php echo $errClassImage ?>">
          <label for="exampleInputFile">Image</label>
          <input type="file" id="exampleInputFile" class="form-control" name="image">
          <img class="avatar_user" src="webroot/uploads/users<?php echo $editProduct['image']?>" alt ="image">
          <span class="help-block"><?php echo $errTextImage;?></span>
         
        </div>
        <div class="form-group <?php echo $errClassPrice;?>">
          <label for="exampleInputEmail1">price: </label>
          <input type="text" class="form-control" id="exampleInputName" placeholder="Enter price"  name="price" required value="<?php echo $editProduct['price']  ?>">
          <span class="help-block"><?php echo $errTextPrice;?></span>
        </div>
        
        <!-- radio -->
          
          <button type="submit" class="btn btn-primary" name="edit_form_product">Update product</button>
      </div>
      <!-- /.box-body -->
 
     

    </form>
  </div>
  </div>

  </body>
  </html>
   