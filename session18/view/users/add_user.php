

<?php  
    $errTextName  = $errTextPass = $errTextAvatar =''; 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Add the users</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add the users
        <small>Version 2.0</small>
        <p style="color: red">Hi <?php echo $_SESSION['login'];?></p>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add the users</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
<div class="form">
<h1>Add the users</h1>     
<div>
  <form action="admin.php?controller=user&action=add_user" method="POST" enctype="multipart/form-data">
      <div class="box-body">
        <div class="form-group <?php echo $errClassName;?>">
          <label for="exampleInputEmail1">name user: </label>
          <input type="text" class="form-control" id="exampleInputName" placeholder="Enter name"  name="username">
          <span class="help-block"><?php echo $errTextName;?></span>
        </div>
        <div class="form-group <?php echo $errClassEmail;?>">
          <label for="exampleInputEmail1">password</label>
          <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Enter password" name="password">
            <span class="help-block"><?php echo $errTextPass;?></span>
        </div>
        <div class="form-group <?php echo $errClassAvatar ?>">
          <label for="exampleInputFile">Avatar</label>
          <input type="file" id="exampleInputFile" class="form-control" name="avatar">
          <span class="help-block"><?php echo $errTextAvatar;?></span>
         
        </div>
        <!-- radio -->
          
          <button type="submit" class="btn btn-primary" name="add_user">add user</button>
      </div>
      <!-- /.box-body -->
 
     

    </form>
  </div>
  </div>

  </body>
  </html>
  