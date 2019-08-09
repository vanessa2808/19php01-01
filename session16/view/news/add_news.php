
<?php include 'common/header.php';   ?>
<?php  
    $errTextTitle  = $errTextDescription = $errTextImage =''; 
     if (isset($_POST['add_news'])) {
      $title = $_POST['title'];
      $description = $_POST['description'];
      $created = date('Y-m-d h:i:s');
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Add the Products</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add the news
        <small>Version 2.0</small>
        <p style="color: red">Hi <?php echo $_SESSION['login'];?></p>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add the news</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
<div class="form">
<h1>Add the news</h1>     
<div>
  <form action="admin.php?controller=news&action=add_news" method="POST" enctype="multipart/form-data">
      <div class="box-body">
        <div class="form-group <?php echo $errClassTitle;?>">
          <label for="exampleInputEmail1">Title: </label>
          <textarea type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter title" name="title"></textarea>
            <span class="help-block"><?php echo $errTextTitle;?></span>
        </div>
        <div class="form-group <?php echo $errClassDescription;?>">
          <label for="exampleInputEmail1">Description: </label>
          <textarea type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter description" name="description"></textarea>
            <span class="help-block"><?php echo $errTextDescription;?></span>
        </div>
        <div class="form-group <?php echo $errClassImage ?>">
          <label for="exampleInputFile">Image</label>
          <input type="file" id="exampleInputFile" class="form-control" name="image">
          <span class="help-block"><?php echo $errTextImage;?></span>
         
        </div>
        <!-- radio -->
          
          <button type="submit" class="btn btn-primary" name="add_news">add news</button>
      </div>
      <!-- /.box-body -->
 
     

    </form>
  </div>
  </div>

  </body>
  </html>
    <?php include 'common/footer.php';?>