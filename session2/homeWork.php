<link rel="stylesheet" type="text/css" href="homeWork.css">
<?php
function drawTriangle(){
	echo "<p class='excercise'>Draw the triangle</p>";
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
			for($j=1;$j<=$n-$i;$j++)
				echo " ";
			for($j = 1;$j <= 2*$i-1; $j++)
				echo "*";
				echo "<br/>";
		}
	}
	function moneySum(){
		echo "<p class='excercise'>1. Cần có tổng 1.000.000 đồng từ 3 loại tiền 10.000 đồng, 20.000 đồng, 50.000 đồng. Lập chương trình để tìm ra tất cả các phương án có thể</p>";
	}
	function currencyBank(){
		echo "<p class='excercise'>2. Bạn A gửi ngân hàng 20 triệu đồng, lãi suất 0.6%/tháng. Hỏi sau 3 năm, bạn A nhận được cả gốc lẫn lãi là bao nhiêu?</p>";
	}
	function realMath(){
		echo "<p class='excercise'>3. Bạn B gửi ngân hàng 150 triệu đồng. Lãi suất 0.7%/tháng Cứ 3 tháng bạn B rút 3 triệu đồng, 3 tháng sau rút hơn 3 tháng trước 1 triệu đồng. Hỏi sau 3 năm, bạn B còn lại cả gốc lẫn lãi la bao nhiêu?</p>";
	}
	echo drawTriangle();
	echo moneySum();
	echo currencyBank();
	echo realMath();
?>