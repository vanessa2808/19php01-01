<?php include 'common/header.php';?>
<style type="text/css">
  img {
    width: 150px;
  }
</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <?php 
    include 'connect.php';
    include 'function/common.php';
    // lay thong tin product can edit ra
    $id = $_GET['id'];
    $sql = "SELECT * FROM products WHERE id = $id";
    $result = mysqli_query($connect, $sql);
    $editProduct = $result->fetch_assoc();
    //
    $errName = $errDes = $errPrice = $errImage = '';
    $name = $editProduct['name'];
    $price =$editProduct['price'];
    $description = $editProduct['description'];
    $image = $editProduct['image'];
    $checkAdd = true;
    if (isset($_POST['edit_product'])) {
      $name = $_POST['name'];
      $description = $_POST['description'];
      $price = $_POST['price'];
      if ($name == '') {
        $errName = 'Please input product name';
        $checkAdd = false;
      }
      if ($description == '') {
        $errDes = 'Please input product description';
        $checkAdd = false;
      }
      if ($price == '') {
        $errPrice = 'Please input product price';
        $checkAdd = false;
      }
      if ($_FILES['image']['error'] == 0 && $_FILES['image']['size'] > 102400) {
        $errImage = 'Please select a photo less than 100kb';
        $checkAdd = false;
      }
      //
      if ($checkAdd) {
        // check and upoad image
        if ($_FILES['image']['error'] == 0) {
          $oldImage = $image;
          $image = uniqid().'_'.$_FILES['image']['name'];
          move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/products/'.$image);
          // Xoa anh cu neu chon anh moi (tru truong hop a cu la anh default)
          if ($oldImage != 'default.jpg') {
            unlink("uploads/products/".$oldImage);  
          }
        }
        // end image upload
        $sql = "UPDATE products SET name = '$name', description = '$description', price = '$price', image = '$image' WHERE id = $id";
        if (mysqli_query($connect, $sql) === TRUE) {
          header("Location: list_product.php");
        } else {
          echo "Add product fail";
        }
      }
    }
    ?>
    <!-- Main content -->
    <section class="content">
	     <div class="row">
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add product</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="#" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group <?php echo ($errName != '')?'has-error':'';?>">
                  <label for="exampleInputEmail1">Product name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter product name"  value="<?php echo $name;?>">
                  <span class="help-block"><?php echo ($errName != '')?$errName:'';?></span>
                </div>
                <div class="form-group <?php echo ($errDes != '')?'has-error':'';?>">
                  <label>Description</label>
                  <textarea class="form-control" name="description" rows="3" placeholder="Enter ..."><?php echo $description;?></textarea>
                  <span class="help-block"><?php echo ($errDes != '')?$errDes:'';?></span>
                </div>
                <div class="form-group <?php echo ($errPrice != '')?'has-error':'';?>">
                  <label for="price">Product price</label>
                  <input type="text" class="form-control" id="price" name="price" placeholder="Enter product price" value="<?php echo $price;?>">
                  <span class="help-block"><?php echo ($errPrice != '')?$errPrice:'';?></span>
                </div>
                <div class="form-group <?php echo ($errImage != '')?'has-error':'';?>">
                  <label for="image">Image</label>
                  <input type="file" name="image">
                  <span class="help-block"><?php echo ($errImage != '')?$errImage:'';?></span>
                  <img class="avatar_user" src="uploads/products/<?php echo $image?>" alt ="image">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="edit_product">Edit product</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div> 
       </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include 'common/footer.php';?>