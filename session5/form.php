<!DOCTYPE html>
<html>
<head>
	<title>Register - Session 22</title>
	<style type="text/css">
		.error {
			color: red;
		}
		img {
			width: 150px;
		}
	</style>
</head>
<body>
			<?php
		$server = 'localhost';
		$username = 'root';
		$password = '';
		$database = 'quanlidancu';

		$connect = mysqli_connect($server, $username, $password, $database);
		mysqli_set_charset($connect, 'UTF8');
		if ($connect === FALSE) {
			echo "connect fail ". mysqli_connect_error();
		}

		$name = '';
		$avatar = '';
		$email = '';
		$city = '';
		$gender = '';
		$birthday = '';

		if($_SERVER["REQUEST_METHOD"] == "POST"){
			if(isset($_POST["name"])){
				$name = $_POST['name'];
			}
			if(isset($_POST["avatar"])){
				$avatar = $_POST['avatar'];
			}
			if(isset($_POST["email"])){
				$email = $_POST['email'];
			}
			if(isset($_POST["city"])){
				$city = $_POST['city'];
			}
			if(isset($_POST["gender"])){
				$gender = $_POST['gender'];
			}
			if(isset($_POST["birthday"])){
				$birthday = $_POST['birthday'];
			}
			$sql = "INSERT INTO lists(avatar,name,email,city,gender,birthday) VALUES ('$avatar','$name','$email','$city','$gender','$birthday')";
			if(mysqli_query($connect, $sql) == TRUE){
				echo "register successfully!";
			} else {
				echo "fail";
			}
		}

	?>

	
	<?php
		$arrCity = array(
				'quangnam' => 'Quang Nam',
				'danang' => 'Da Nang',
				'hue' => 'Hue',
			);
		$arrGenderEn = array(
			'male' => 'Male',
			'female' => 'Female',
			'other' => 'Other',
		);
		$arrGenderVi = array(
			'male' => 'Nam',
			'female' => 'Nữ',
			'other' => 'Khác',
		);
		//echo "<pre>";
		//var_dump($arrCity);
		$errName = '';
		$errEmail = '';
		$errPhone = '';
		$errBithday = '';
		$errCity = '';
		$errGender = '';
		// Khoi tao gia tri ban dau
		$name = '';
		$email = '';
		$phone = '';
		$city = '';
		$gender = '';
		$bithday = '';

		// bien check loi
		$checkRegister = true;
		if (isset($_POST['register'])) {
			$name    = $_POST['name'];
			$email   = $_POST['email'];
			$phone   = $_POST['phone'];
			$gender  = isset($_POST['gender'])?$_POST['gender']:'';
			$bithday = $_POST['bithday'];
			$city    = $_POST['city'];
			if ($name == '') {
				$errName = 'Please input your name';
				$checkRegister = false;
			}
			if ($email == '') {
				$errEmail = 'Please input your email';
				$checkRegister = false;
			}
			if ($phone == '') {
				$errPhone = 'Please input your phone';
				$checkRegister = false;
			}
			if ($gender == '') {
				$errGender = 'Please choose your gender';
				$checkRegister = false;
			}
			if ($city == '') {
				$errCity = 'Please choose your city';
				$checkRegister = false;
			}
			if ($bithday == '') {
				$errBithday = 'Please choose your bithday';
				$checkRegister = false;
			}
			// in ra
			if ($checkRegister) {
				//upload avatar
				//echo "<pre>";
				//var_dump($_FILES['avatar']);
				if ($_FILES['avatar']['error'] == 0) {
					$avatarName = uniqid().'-'.$_FILES['avatar']['name'];
					$pathUpload = 'uploads/'.$avatarName;
					move_uploaded_file($_FILES['avatar']['tmp_name'], $pathUpload);
				}
				echo "<p>English</p>";
				echo "Name: $name <br> Email: $email <br> City:";
				echo  $arrCity["$city"];
				echo " <br> Birthday: $bithday <br>Gender:";
				echo  $arrGenderEn["$gender"];
				echo "<br> Phone: $phone";
				echo "<img src='$pathUpload' alt='Avatar'>";
				echo "<p>Tiếng Việt</p>";
				echo "Name: $name <br> Email: $email <br> City:";
				echo  $arrCity["$city"];
				echo " <br> Birthday: $bithday <br>Gender:";
				echo  $arrGenderVi["$gender"];
				echo "<br> Phone: $phone";
			}
		}
	?>
	<h1>Register</h1>
	<form action="#" method="POST" enctype="multipart/form-data">
		<p>Name
			<input type="text" name="name" value="<?php echo $name;?>">
		</p>
		<p>Avatar
			<input type="file" name="avatar">
		</p>
		<p class="error"><?php echo $errName;?></p>
		<p>Email
			<input type="text" name="email" value="<?php echo $email;?>">
		</p>
		<p class="error"><?php echo $errEmail;?></p>
		<p>Phone
			<input type="text" name="phone" value="<?php echo $phone;?>">
		</p>
		<p class="error"><?php echo $errPhone;?></p>
		<p>Gender
			<input type="radio" name="gender" value="male" 
			<?php if($gender == 'male'){ echo "checked";}?>>Male
			<input type="radio" name="gender" value="female"
			<?php echo $gender == 'female'?"checked":'';?>>Female
			<input type="radio" name="gender" value="other"
			<?php echo $gender == 'other'?"checked":'';?>>Other
		</p>
		<p class="error"><?php echo $errGender;?></p>
		<p>Bithday
			<input type="date" name="bithday" value="<?php echo $bithday;?>">
		</p>
		<p class="error"><?php echo $errBithday;?></p>
		<p>City
			<select name="city">
				<option value="" <?php echo $city == ''?"selected":'';?>>Please choose city</option>
				<option value="danang" <?php echo $city == 'danang'?"selected":'';?>>Da Nang</option>
				<option value="quangnam" <?php echo $city == 'quangnam'?"selected":'';?>>Quang Nam</option>
				<option value="hue" <?php echo $city == 'hue'?"selected":'';?>>Hue</option>
			</select>
		</p>
		<p class="error"><?php echo $errCity;?></p>
		<p><input type="submit" name="register" value="Register"></p>
	</form>
</body>
</html>