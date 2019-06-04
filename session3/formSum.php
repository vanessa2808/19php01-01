<!DOCTYPE html>
<html>
<head>
	<title>Form to calculate Math</title>
</head>
<body>
<h1>Form to calculate</h1>
<?php
	$errorA = $errorB = '';
	if (isset($_POST['numberA']) && isset($_POST['numberB'])){
		if($_POST['numberA'] ==''){
			$errorA = 'please enter';
		} else {
			$errorA = '';
		}
		if($_POST['numberB'] ==''){
			$errorB = 'please enter';
		} else {
			$errorA = '';
		}
		echo $_POST['numberA'];
		echo "<br/>";
		echo $_POST['numberB'];
		$sumNumBer = $numberA + $numberB;
		echo $sumNumBer;
		}
?>
<form action="#" name="register-f" method="POST">
	<p>Enter a: <input type="number" name="numberA"><p class="error"><?php echo $errorA; ?></p></p>
	<p>Enter b: <input type="number" name="numberB"><p class="error"><?php echo $errorB; ?></p></p>
	<p><input type="submit" name="sum" value="+"><?php
	 ?></p>
</form>
</body>
</html>