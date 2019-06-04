<!DOCTYPE html>
<html>
<head>
	<title>Form example - session 3</title>
</head>
<body>
<?php
	$errName = $errPass = '';
	if (isset($_POST['register'])){
		if($_POST['name'] ==''){
			$errName = 'please enter';
		} else {
			$errName = '';
		}
		if($_POST['password'] ==''){
			$errPass = 'please enter';
		} else {
			$errPass = '';
		}
		echo $_POST['name'];
		echo "<br/>";
		echo $_POST['password'];
}
?>
<h1>Register form</h1>
<form action="#" name="registerForm" method="POST">
	<p>Name: <input type="text" name="name"><p class="error">
		<?php
			echo $errName;
		?>
	</p></p> 
	<p>Password: <input type="password" name="password"></p><p class="errPass"><p class="error">
		<?php
			echo $errPass;
		?>
	</p></p>
	<p> <input type="submit" name="register" value="Register"></p>
</form>
</body>
</html>


<?php

// vadidare = js or html5 thif goi la vadidate client
//vadidatte = php calles vadidate server
?>