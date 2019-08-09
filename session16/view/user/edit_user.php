<?php include 'common/header.php';   ?>
<?php  
    $errTextName  = $errTextPass = $errTextAvatar =''; 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Edit the user</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit the user
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit the users</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
<div class="form">
<h1>Edit the users</h1>     
<div>
  <form action="admin.php?controller=user&action=edit_user&id=<?php echo $id?>" method="post" enctype="multipart/form-data" >
      <div class="box-body">
        <div class="form-group <?php echo $errClassName;?>">
          <label for="exampleInputEmail1">name user: </label>
          <input type="text" class="form-control" id="exampleInputName" placeholder="Enter name"  name="username" required value="<?php echo $editUser['username'];?>">
          <span class="help-block"><?php echo $errTextName;?></span>
        </div>
        <div class="form-group <?php echo $errClassEmail;?>">
          <label for="exampleInputEmail1">password</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="password" required value="<?php echo $editUser['password'];?>">
            <span class="help-block"><?php echo $errTextPass;?></span>
        </div>
        <div class="form-group <?php echo $errClassAvatar ?>">
          <label for="exampleInputFile">Avatar</label>
          <input type="file" id="exampleInputFile" class="form-control" name="avatar" required value="<?php echo $editUser['avatar']  ?>" value="<?php echo $avatar; ?>">
          <span class="help-block"><?php echo $errTextAvatar;?></span>
          <img class="avatar_user" src="uploads/<?php echo $editUser['avatar']?>" alt ="image">
        </div>
        <!-- radio -->
          
          <button type="submit" class="btn btn-primary" name="edit_user_form">Update</button>
      </div>
      <!-- /.box-body -->
 
     

    </form>
  </div>
  </div>

  </body>
  </html>
    <?php include 'common/footer.php';?>