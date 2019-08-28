

<p class="error"><?php 
	$errorExistUser = '';
	echo $errorExistUser?>
	
</p>
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
  
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
    <section class="content">
<div class="form">
<h1>Add the users</h1>     
<div>
  <form action="admin.php?controller=user&action=add_user" method="POST" enctype="multipart/form-data">
      <div class="box-body">
      	<div class="form-group">Role
		<select name="role">
			<option value="admin">Admin</option>
			<option value="customer">Customer</option>
		</select>
	</div>
	 <div class="form-group <?php echo $errClassEmail;?>">
          <label for="exampleInputEmail1">name user: </label>
          <input type="text" class="form-control" id="exampleInputName" placeholder="Enter name"  name="username">
          <span class="help-block"><?php echo $errTextName;?></span>
        </div>

        <div class="form-group <?php echo $errClassEmail;?>">
          <label for="exampleInputEmail1">password</label>
          <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Enter password" name="password">
            <span class="help-block"><?php echo $errTextPass;?></span>
        </div>

        <div class="form-group <?php echo $errClassEmail;?>">
          <label for="exampleInputEmail1">Name:</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="name">
            <span class="help-block"><?php echo $errTextName;?></span>
        </div>

        <div class="form-group <?php echo $errClassEmail;?>">
          <label for="exampleInputEmail1">Email</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email">
            <span class="help-block"><?php echo $errTextPass;?></span>
        </div>

         <div class="form-group <?php echo $errClassEmail;?>">
          <label for="exampleInputEmail1">phone</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter phone" name="phone">
            <span class="help-block"><?php echo $errTextPass;?></span>
        </div>

         <div class="form-group <?php echo $errClassEmail;?>">
          <label for="exampleInputEmail1">birthday</label>
          <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Enter date of birth" name="birthday">
            <span class="help-block"><?php echo $errTextPass;?></span>
        </div>




        <div class="form-group <?php echo $errClassAvatar ?>">
          <label for="exampleInputFile">Avatar</label>
          <input type="file" id="exampleInputFile" class="form-control" name="avatar">
          <span class="help-block"><?php echo $errTextAvatar;?></span>
         
        </div>
        <!-- radio -->
          
          <button type="submit" class="btn btn-primary" name="register">add user</button>
      </div>
      <!-- /.box-body -->
 
     

    </form>
  </div>
  </div>

  </body>
  </html>
