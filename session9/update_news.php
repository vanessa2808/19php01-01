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
    include 'function/common.php';
    $errTitle = $errContent  = $errImage = $errWriter  = '';
    $title = $content  = $writer = $postDate = $image  = '';
    $checkAdd = true;
    if (isset($_POST['add_new'])) {
      $title = $_POST['title'];
      $content = $_POST['content'];
      $writer = $_POST['writer'];
      $postDate = date('Y-m-d h:i:s');
      $image = 'default.jpg';
      if ($title == '') {
        $errTitle = 'Please input news title';
        $checkAdd = false;
      }
      if ($content == '') {
        $errContent = 'Please input the content';
        $checkAdd = false;
      }
      if ($writer == '') {
        $errWriter = 'Please input the writer';
        $checkAdd = false;
      }
      //
      if ($checkAdd) {
        // check and upoad image
        if ($_FILES['image']['error'] == 0) {
          $oldImage = $image;
          $image = uniqid().'_'.$_FILES['image']['name'];
          move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/news/'.$image);
          if ($oldImage != 'default.jpg') {
            unlink("uploads/news/".$oldImage);  
          }
        }
        // end image upload
        $sql = "INSERT INTO news (title, content, image, writer, postDate) VALUES ('$title', '$content', '$image', '$writer', '$postDate')";
        if (mysqli_query($connect, $sql) === TRUE) {
          header("Location: list_news.php");
        } else {
          echo "Add news fail";
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
              <h3 class="box-title">Update news</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="#" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group <?php echo ($errTitle != '')?'has-error':'';?>">
                  <label>title: </label>
                  <textarea class="form-control" name="title" rows="3" placeholder="enter title"><?php echo $title;?></textarea>
                  <span class="help-block"><?php echo ($errTitle != '')?$errTitle:'';?></span>
                </div>
                <div class="form-group <?php echo ($errContent != '')?'has-error':'';?>">
                  <label>content: </label>
                  <textarea class="form-control" name="content" rows="3" placeholder="enter content"><?php echo $content;?></textarea>
                  <span class="help-block"><?php echo ($errContent != '')?$errContent:'';?></span>
                </div>
                <div class="form-group <?php echo ($errWriter != '')?'has-error':'';?>">
                  <label for="price">Writer</label>
                  <input type="text" class="form-control" id="writer" name="writer" placeholder="Enter writer" value="<?php echo $writer;?>">
                  <span class="help-block"><?php echo ($errWriter != '')?$errWriter:'';?></span>
                </div>

                <div class="form-group <?php echo ($errImage != '')?'has-error':'';?>">
                  <label for="image">Image</label>
                  <input type="file" name="image">
                  <span class="help-block"><?php echo ($errImage != '')?$errImage:'';?></span>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="add_new">Submit</button>
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