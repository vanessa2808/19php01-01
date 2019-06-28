<?php 
$birthday = '06/12/2019';
echo $birthday;
//$newDate = date("d-m-Y", strtotime($originalDate));
$birthday = date("Y-m-d", strtotime($birthday));
echo $birthday;

?>