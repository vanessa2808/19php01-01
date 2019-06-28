<?php
	// set thoi gian ton tai cua cookie 30 s
	setcookie('name','SDC', time()+10);
	setcookie('class','Vanessa',time()+13);
	echo $_COOKIE['name'];
echo "<br/>";
echo $_COOKIE['class'];

?>