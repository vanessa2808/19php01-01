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
	}
	echo drawTriangle();
?>