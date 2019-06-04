<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
<h1>Form</h1>
<?php
	$errorName = $errorDate = $errorEmail = $errorPhone  = $errorGender = $errorAddress = '';
	if (isset($_POST['register'])){
		if($_POST['name'] ==''){
			$errorName = 'please enter';
		} else {
			$errorName = '';
		}
		if($_POST['email'] ==''){
			$errorEmail = 'please enter';
		} else {
			$errorEmail = '';
		}

		if($_POST['phone'] ==''){
			$errorPhone = 'please enter';
		} else {
			$errorPhone = '';
		}

		if($_POST['gender'] == ''){
			$errorGender = 'please enter';
		} else {
			$errorGender = '';
		}
		if($_POST['address'] ==''){
			$errorAddress = 'please enter';
		} else {
			$errorAddress = '';
		}

		if($_POST['dateOB'] ==''){
			$errorDate = 'please enter';
		} else {
			$errorDate = '';
		}

		echo $_POST['name'];
		echo "<br/>";
		echo $_POST['email'];
		echo "<br/>";
		echo $_POST['phone'];
		echo "<br/>";
		echo $_POST['gender'];
		echo "<br/>";
		echo $_POST['address'];
		echo "<br/>";
		echo $_POST['dateOB'];
		echo "<br/>";
		}
?>
<form action="#" name="register-f" method="POST">
	<p>Name: <input type="text" name="name" value="<?php if(isset($_POST['name'])) {echo $_POST['name'];} ?>"><p class="error"><?php echo $errorName; ?></p></p>
	<p>Email: <input type="text" name="email"><p class="error"><?php echo $errorEmail; ?></p></p>
	<p>Phone: <input type="text" name="phone"><p class="error"><?php echo $errorPhone; ?></p></p>
	<p>Male: <input type="radio" name="gender">
	<p>Female: <input type="radio" name="gender">
		<p class="error"><?php echo $errorGender; ?></p></p></p>
	<p>Address: <select name="address">
		<option>QN</option>
		<option>TTH</option>
	</select> <p class="error"><?php echo $errorAddress ?></p></p>
	<p>Date: <input type="date" name="dateOB"><?php echo $errorDate;
	 ?></p>
	 <p><input type="submit" name="register" value="Register"></p>
</form>
</body>
</html>