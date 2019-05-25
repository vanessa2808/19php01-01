<link rel="stylesheet" type="text/css" href="example1.css">
<?php
	echo "<h1>Hello World</h1>";
?>
<p>Hi man!</p>


<?php
	$userName = 'Admin';
	echo $userName;

	$x = 7;
	$y = 8;
	echo "<br/>";
	echo $x + $y;
	echo "<br/>";
	echo $x - $y;
	echo "<br/>";
	echo $x * $y;
	echo "<br/>";
	echo $x / $y;
	/*
		* Created the function to calculate the sum
		* Description: Summary 2 numbers
		* Created by Vanessa
		* Created 2019-05-25
	*/

	function sumNumber($a, $b){
		return $a + $b;
	}

	echo "<br/>";
	echo "Sum of number = ";
	echo sumNumber(22,98);
	echo "<br/>";
	$i = 10;
	if($i % 2){
		echo $i ." is odd number";
	} else {
		echo $i ." is even number";
	}
	for ($i = 1; $i <=10; $i++){
		echo "<br/>";
		echo $i;
		echo "<br/>";
	}
	echo "<br/>";
	$n = 5;
	while ($n < 10) {
		echo $n;
		$n++;
		echo "<br/>";
	}
	echo "<br/>";
	$m = 5;
	do {
		echo $m;
		$m++;
		echo "<br/>";
	}while ($m < 10);
	// comment in php is the same in js

	// 200 -250 chia het cho 3
	echo "<br/>";
	for($i = 200; $i <=250; $i++){
		if($i % 3 == 0){
			echo $i . " ";
		}
	}
	echo "<br/>";
	// Draw 
	function drawCheck(){
		for ($row = 1;$row <= 8; $row++){
			echo "<br>";
			// Note: 
			echo "<div class='line'>";
			for($col = 1;$col <= 8;$col++){
				$total = $row + $col;
				if($total % 2 == 0){
					echo "<div class='red'></div>";
				} else {
					echo "<div class='black'></div>";
				}
			}
			echo "</div>";
		}
	}
	echo drawCheck();
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";


	// demo



	// function drawCheck1(){
	// 	for ($row = 1;$row <= 8; $row++){
	// 		echo "<br/>";
	// 		for($col = 1;$col <= 8;$col++){
	// 			$total = $row + $col;
	// 			if($total % 2 == 0){
	// 				echo "chan"."  ";
	// 			} else {
	// 				echo "le". "  ";
	// 			}
	// 		}
	// 	}
	// }
	// echo drawCheck1();
?>

	<!-- documment.write(usernName) -->
