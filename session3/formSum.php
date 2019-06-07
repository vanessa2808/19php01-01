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
		$a = $_POST['numberA'];
		echo "<br/>";
		$b = $_POST['numberB'];
		echo "<br/>";
		function Calculate($a, $b){
			if(is_numeric($a) && is_numeric($b)){
				$c = $a + $b;
				return $c;
		} else {
			echo "Please enter number!";
			}
		}
		echo calculate($_POST['numberA'],$_POST['numberB']);
	}
?>
<form action="#" name="register-f" method="POST">
	<p>Enter a: <input type="text" name="numberA"><?php if (isset($_POST['numberA'])){
		echo $_POST['numberA'];
	} ?><p class="error"><?php echo $errorA; ?></p></p>
	<p>Enter b: <input type="text" name="numberB"><?php if(isset($_POST['numberB'])){
		echo $_POST['numberB'];
	} ?><p class="error"><?php echo $errorB; ?></p></p>
	<p><input type="submit" name="sum" value="+"></p>
</form>
</body>
</html>