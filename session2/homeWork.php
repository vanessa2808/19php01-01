<link rel="stylesheet" type="text/css" href="homeWork.css">
<?php
function drawTriangle(){
		for ($i=1; $i <= 10 ; $i++) { 
			echo  " " ;
			echo "<br/>";
			for ($j=1 ; $j <= $i ; $j++) { 
				echo  "*". "  ";
			}
		}
		echo "<br/>";
		echo "<br/>";
		echo "<br/>";

		for ($i=10; $i >=1 ; $i--) { 
			echo "*";
			for ($j=1; $j < $i ; $j++) { 
				echo " " . "*";
			}
			echo "<br/>";
		}
		echo "<br/>";
		echo "<div class ='triangle'</div>";
		$n = 10;
		for($i=1;$i <= $n; $i++){
				echo " ";
			for($j = 1;$j <= 2*$i-1; $j++)
				echo "*";
				echo "<br/>";
		}
	}
	echo drawTriangle();
?>