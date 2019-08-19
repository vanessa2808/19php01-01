

<p class="error"><?php 
	
	echo $errorExistUser?>
	
</p>
<form action="admin.php?controller=user&action=edit_user&id=<?php echo $id ?>" method="POST" enctype="multipart/form-data">
	<p>Role
		<select name="role">
			<option value="admin">Admin</option>
			<option value="customer">Customer</option>
		</select>
		<?php echo  $editUser['role']; ?>

	</p>
	<p>
		Username <input type="text" name="username" required value="<?php echo $editUser['username'] ?>">
	</p>
	<p>
		Password <input type="password" name="password" required value="<?php echo $editUser['password'] ?>">
	</p>
	<p>
		Name <input type="text" name="name" required value="<?php echo $editUser['name'] ?>">
	</p>
	<p>
		Email <input type="text" name="email" required value="<?php echo $editUser['email'] ?>">
	</p>
	<p>
		Phone <input type="text" name="phone" required value="<?php echo $editUser['phone'] ?>">
	</p>
	<p>
		Birthday <input type="date" name="birthday" required value="<?php echo $editUser['birthday'] ?>">
	</p>
	<p>
		Avatar <input type="file" name="avatar">
		<img class="avatar_user" src="webroot/uploads/users/<?php echo $editUser['avatar']?>" alt ="image">
	</p>
	<p>
		<input type="submit" name="edit_user_form" value="Update">
	</p>
</form>