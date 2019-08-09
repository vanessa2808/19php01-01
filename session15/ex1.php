<h1>print triangle</h1>

<?php
$n = 10;
$count = 1;
	for($i = 1; $i <= $n ; $i++){
		for ($j=$i; $j > 0 ; $j--) { 
			echo  " ". $count;
			$count++;
		}
		echo "<br/>";
	}
	

?>