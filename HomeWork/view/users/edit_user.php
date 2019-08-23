<p class="error"><?php 
	$errorExistUser = '';
	echo $errorExistUser ;
	$errTextName  = $errTextPass = $errTextAvatar =''; 
	?>
</p>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Edit the user</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>


<div class="form">
   
<div>
  <form action="admin.php?controller=user&action=edit_user&id=<?php echo $id ?>" method="post" enctype="multipart/form-data" >
      <div class="box-body">
      	<div class="form-group">
          <label for="exampleInputEmail1">Role: </label>
          	<select name="role">
			<option value="admin">Admin</option>
			<option value="customer">Customer</option>
		</select>
		<?php echo  $editUser['role']; ?>
  <span class="help-block"><?php echo $errTextName;?></span>
        </div>


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

        <div class="form-group <?php echo $errClassName;?>">
          <label for="exampleInputEmail1">name : </label>
          <input type="text" class="form-control" id="exampleInputName" placeholder="Enter name"  name="name" required value="<?php echo $editUser['name'];?>">
          <span class="help-block"><?php echo $errTextName;?></span>
        </div>

        <div class="form-group <?php echo $errClassName;?>">
          <label for="exampleInputEmail1">Email: </label>
          <input type="text" class="form-control" id="exampleInputName" placeholder="Enter name"  name="email" required value="<?php echo $editUser['email'];?>">
          <span class="help-block"><?php echo $errTextName;?></span>
        </div>

        <div class="form-group <?php echo $errClassName;?>">
          <label for="exampleInputEmail1">phone:  </label>
          <input type="text" class="form-control" id="exampleInputName" placeholder="Enter name"  name="phone" required value="<?php echo $editUser['phone'];?>">
          <span class="help-block"><?php echo $errTextName;?></span>
        </div>

        <div class="form-group <?php echo $errClassName;?>">
          <label for="exampleInputEmail1">birthday:  </label>
          <input type="text" class="form-control" id="exampleInputName" placeholder="Enter birthday"  name="birthday" required value="<?php echo $editUser['birthday'];?>">
          <span class="help-block"><?php echo $errTextName;?></span>
        </div>

        <div class="form-group <?php echo $errClassAvatar ?>">
          <label for="exampleInputFile">Avatar</label>
          <input type="file" id="exampleInputFile" class="form-control" name="avatar" required value="<?php echo $editUser['avatar']  ?>" value="<?php echo $avatar; ?>">
          <span class="help-block"><?php echo $errTextAvatar;?></span>
          <img class="avatar_user" src="webroot/uploads/users/<?php echo $editUser['avatar']?>" alt ="image">
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
