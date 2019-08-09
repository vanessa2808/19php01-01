<?php
	function changeValueTogether(){
		$number1 = 12;
		$number2 = 9;
		$number1 = $number1 + $number2;
		$number2 = $number1 - $number2;
		$number1 = $number1 - $number2;
		echo $number1;
		echo "<br/>";
		echo $number2;
	}
	echo changeValueTogether();
?>