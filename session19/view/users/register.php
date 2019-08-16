<h1>Register page</h1>
<p class="error"><?php echo $errorExistUser?></p>
<form action="index.php?controller=user&action=register" method="POST" enctype="multipart/form-data">
	<p>Role
		<select name="role">
			<option value="admin">Admin</option>
			<option value="customer">Customer</option>
		</select>
	</p>
	<p>
		Username <input type="text" name="username">
	</p>
	<p>
		Password <input type="password" name="password">
	</p>
	<p>
		Name <input type="text" name="name">
	</p>
	<p>
		Email <input type="text" name="email">
	</p>
	<p>
		Phone <input type="text" name="phone">
	</p>
	<p>
		Birthday <input type="date" name="birthday">
	</p>
	<p>
		Avatar <input type="file" name="avatar">
	</p>
	<p>
		<input type="submit" name="register" value="Register">
	</p>
</form>