<link rel="stylesheet" type="text/css" href="homeWork.css">
<?php
function drawTriangle(){
	echo "<p class='excercise'>Draw the triangle</p>";
	echo "<p class='solution'>Solution:</p>";
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
			for($j=2;$j<=$n-$i+1;$j++)
				echo "-";
			for($j = 2; $j <= $i+1 ;$j++)
				echo "* ";
				echo "<br/>";
		}
	}
	function moneySum(){
		echo "<p class='excercise'>1. Cần có tổng 1.000.000 đồng từ 3 loại tiền 10.000 đồng, 20.000 đồng, 50.000 đồng. Lập chương trình để tìm ra tất cả các phương án có thể</p>";
		echo "<p class='solution'>Solution:</p>";
		echo "<p class='details'>";
		$count = 0;
			for( $i = 0; $i <= 100; $i++){
				for ($j = 0; $j <= 50 ; $j++){
					 for ($z=0; $z <= 20; $z++) { 
						if(($i*10000+$j*20000+$z*50000)==1000000){
							echo "Case ". $count. ":   "."(". $i.")". "    10.000VND   "."(". $j.")   "." 20.000VND "."(". $z. ")"."  50.000VND";
							$count++;
							echo "<br/>";
				}
			}
		}
	}
	echo "The sum of case:  ";
	echo $count;

		echo "</p>";
	}
	function currencyBank(){
		echo "<p class='excercise'>2. Bạn A gửi ngân hàng 20 triệu đồng, lãi suất 0.6%/tháng. Hỏi sau 3 năm, bạn A nhận được cả gốc lẫn lãi là bao nhiêu?</p>";
		echo "<p class='solution'>Solution:</p>";
		echo "<p class='details'>";
		$numberOfYear = 3;
		$initialMoney = 20000000;
		$interestPerMonth = 0.6/100;
		$numberOfMonth = $numberOfYear*12;
		echo "<p class='details'>Because the interest per month, so the number of month of 3 years is: ". $numberOfMonth . "  months";
		echo "<br/>";
		for ($i=1; $i <= $numberOfMonth ; $i++) { 
			$receiveInterestMoney = $initialMoney*(pow((1+$interestPerMonth),$numberOfMonth)-1);
		}
		echo "<p class='details'> The interest money that person A will receive after 3 years is:  " ;
		echo number_format($receiveInterestMoney,2). "VND";
		echo "<p class='details'> The sum of principal + interest money that person A will receive after 3 years is:  " ;
		echo number_format($receiveInterestMoney+$initialMoney,2). "VND";
		echo "</p>";
		echo "</p>";
		echo "</p>";
	}
	function realMath(){
		echo "<p class='excercise'>3. Bạn B gửi ngân hàng 150 triệu đồng. Lãi suất 0.7%/tháng. Cứ 3 tháng bạn B rút 3 triệu đồng, 3 tháng sau rút hơn 3 tháng trước 1 triệu đồng. Hỏi sau 3 năm, bạn B còn lại cả gốc lẫn lãi la bao nhiêu?</p>";
		echo "<p class='solution'>Solution:</p>";
		$initialMoney = 150000000;
		$interestPerMonth = 0.7/100;
		$moneyAfter3Month = 3000000;
		$numberOfYear = 3;
		$numberOfMonth = 9;
		$realMoney = 150000000;
		$receiveInterestMoney = 0 ;
		echo "<p class='details'>Because the interest per month, so the number of month of 3 years is: ". $numberOfMonth . "  months";
		echo "<br/>";
		echo "<p class='details'>";
		for ($i=3; $i <= $numberOfMonth; $i = $i+3){ 
			$receiveInterestMoney = $realMoney*(pow((1+$interestPerMonth),3)-1);
			$sum = $realMoney + $receiveInterestMoney;
			$realMoney = $sum - $moneyAfter3Month;
			$moneyAfter3Month = $moneyAfter3Month + 1000000;
		}
		echo "<p class='details'> The sum of principal + interest money that person A will receive after 3 years is:  " ;
		echo number_format($realMoney,2). "VND";
		echo "</p>";
		echo "</p>";
		echo "</p>";
	}
	echo drawTriangle();
	echo moneySum();
	echo currencyBank();
	echo realMath();
	
?>