<?php include 'common/header.php';?>
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
      include 'function.php';
      $checkAdd = true;
      $errClassNameProduct = $errClassPriceProduct = $errClassDescriptedProduct = $errClassImage = $errClassDay = '';
      $errTextNameProduct = $errTextPriceProduct = $errTextDescriptedProduct = $errTextImage = $errTextDay = '';
      $nameProduct = $priceProduct = $description = $imageDe = $datePro = $oldImage = '';
      if(isset($_POST['addPro'])){
        $nameProduct = $_POST['nameProduct'];
        $priceProduct = $_POST['priceProduct'];
        $description = $_POST['description'];
        $datePro = $_POST['datePro'];
        $datePro = date("Y-m-d", strtotime($datePro));
        $imageDe = 'default.png';
        if ($nameProduct == '') {
          $errClassNameProduct = 'has-error';
          $errTextNameProduct = 'Please input name of product';
          $checkAdd = false;
        }
        if ($priceProduct == '') {
          $errClassPriceProduct = 'has-error';
          $errTextPriceProduct = 'Please input price of product';
          $checkAdd = false;
        }
        if ($description == '') {
          $errClassDescriptedProduct = 'has-error';
          $errTextDescriptedProduct = 'Please input the description of product';
          $checkAdd = false;
        }
         if($imageDe == '') {
          $errClassImage = 'has-error';
          $errTextImage = 'Please input your avatar';
          $checkAdd = false;
        }
        if ($datePro == '') {
          $errClassDay = 'has-error';
          $errTextDay = 'Please input date of product';
          $checkAdd = false;
        }
        if(checkExistNameProduct($nameProduct, $connect)) {
          $errTextNameProduct = 'Product name existed';
          $checkAdd = false;
      }
       if ($_FILES['imageDe']['error'] == 0 && $_FILES['imageDe']['size'] > 102400) {
            $errTextImage = 'please choose availid image';
            $checkAdd = false;
          }

        if($checkAdd){
          if ($_FILES['imageDe']['error'] == 0) {
            $imageDe = uniqid().'_'.$_FILES['imageDe']['name'];
            move_uploaded_file($_FILES['imageDe']['tmp_name'], 'uploads/products/'.$imageDe);
            if ($oldImage != 'default.jpg') {
            unlink("uploads/products/".$oldImage);  
          }
          }
           $sql = "INSERT INTO products(nameProduct, priceProduct, description, imageDe, datePro) VALUES ('$nameProduct', '$priceProduct', '$description', '$imageDe', '$datePro')";
          if(mysqli_query($connect, $sql) === TRUE){
            // check and upload image
            // end umage upload
            header("Location: list_product.php");
          }

        }
      }


     ?>
    <!-- Main content -->
    <section class="content">
	    <div class="row">
       <div class="col-md-12">
         <div class="box box-primary">
           <div class="box-header with-border">
             <h3 class="box-title">Add product</h3>
           </div>
           <form role = 'form' action="#" method="POST" enctype="multipart/form-data">
            <div class="box-body">
              <!-- Input name of product -->
                <div class="form-group <?php echo $errClassNameProduct;?>">
                  <label for="exampleInputEmail1">Name of Product</label>
                  <input type="text" class="form-control" id="exampleInputNameProduct" placeholder="Enter name of product" name="nameProduct" value="<?php echo $nameProduct;?>">
                  <span class="help-block"><?php echo $errTextNameProduct;?></span>
                </div>
                <!-- input price of product -->
                <div class="form-group <?php echo $errClassPriceProduct;?>">
                  <label for="exampleInputEmail1">Product of Product</label>
                  <input type="text" class="form-control" id="exampleInputPriceProduct" placeholder="Enter price of product" name="priceProduct" value="<?php echo $priceProduct;?>">
                  <span class="help-block"><?php echo $errTextPriceProduct;?></span>
                </div>
                <!-- input the description -->

                 <div class="form-group <?php echo $errClassDescriptedProduct;?>">
                  <label for="exampleInputEmail1">Description</label>
                  <textarea type="text" class="form-control boxDescription" id="exampleInputDecriptedProduct" placeholder="Enter description of product" name="description"  value="<?php echo $description;?>"></textarea>
                  <span class="help-block"><?php echo $errTextDescriptedProduct;?></span>
                </div>

                <!-- Image -->
                 <div class="form-group <?php echo $errClassImage ?>">
                  <label for="exampleInputFile">Image</label>
                  <input type="file" id="exampleInputFile" class="form-control" name="imageDe" value="<?php echo $imageDe ?>">
                  <span class="help-block"><?php echo $errTextImage;?></span>
                </div>
                <!-- date -->
              <div class="form-group">
                <label>Date:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="datePro" value="<?php echo $datePro  ?>" class="form-control pull-right" id="birthday">
                </div>
                <span class="help-block"><?php echo $errTextDay;?></span>
                <!-- /.input group -->
              </div>



              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="addPro">Add product</button>
              </div>
           </form>
         </div>
       </div> 
      </div>
    </section>
    <!-- /.content -->
    <!-- var_dump -->
  </div>
  <!-- /.content-wrapper -->

  <?php include 'common/footer.php';?>