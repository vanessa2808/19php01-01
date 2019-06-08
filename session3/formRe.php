<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="formRe.css">
</head>
<body>
<h1>Form</h1>
<?php
	$errorName = $errorDate = $errorEmail = $errorPhone  = $errorGender = $errorAddress = '';
	if (isset($_POST['register'])){
		if($_POST['name'] ==''){
			$errorName = 'please enter your name!';
		} else {
			$errorName = '';
		}
		if($_POST['email'] ==''){
			$errorEmail = 'please enter your mail';
		} else {
			$errorEmail = '';
		}

		if($_POST['phone'] ==''){
			$errorPhone = 'please enter your phone';
		} else {
			$errorPhone = '';
		}

		if($_POST['gender'] == ''){
			$errorGender = 'please enter your gender';
		} else {
			$errorGender = '';
		}
		if($_POST['address'] ==''){
			$errorAddress = 'please enter your address';
		} else {
			$errorAddress = '';
		}

		if($_POST['dateOB'] ==''){
			$errorDate = 'please enter dateOB';
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
	<p>Name: <input class="box" type="text" name="name" value="<?php if(isset($_POST['name'])) {echo $_POST['name'];} ?>"><p class="error"><?php echo $errorName; ?></p></p>
	<p>Email: <input class="box"  type="text" name="email" value="<?php if (isset($_POST['email'])) {
		echo $_POST['email'];
	}?>"><p class="error"><?php echo $errorEmail; ?></p></p>
	<p>Phone: <input class="box" type="text" name="phone" value="<?php
	if(isset($_POST['phone'])){
		echo $_POST['phone'];
	}
	?>"><p class="error"><?php echo $errorPhone; ?></p></p>

	 Male <input class="maleFemale" type="radio" name="gender" value="male" <?php if (isset($_POST['gender'])) {
	 		if($_POST['gender'] ==  'Male')
				echo "check = \"check\"";
			}
		?>>
	 <input type="radio" name="gender" value="female" <?php if (isset($_POST['gender'])) {
	 		if($_POST['gender'] == 'Female')
				echo "check = \"check\"";
			}
		?>>Female<br>
		</p></p><p class="error"><?php echo $errorGender; ?></p>
	<p>Address: <select class="box1" name="address">
		<option></option>
		<option>Quang Nam</option>
		<option>Da Nang</option>
		<option>Thua Thien Hue</option>
	</select><?php if (isset($_POST['address'])) {
		# code...
		echo $_POST['address'];
	} ?> <p class="error"><?php echo $errorAddress ?></p></p>
	<p>Date: <input class="box2" type="date" name="dateOB" value="<?php if (isset($_POST['dateOB'])) {
		echo $_POST['dateOB'];
	} ?>"><p class="error"><?php echo $errorDate;
	 ?></p></p>
	 <p><input class="submit" type="submit" name="register" value="Register"></p>
</form>
</body>
</html>