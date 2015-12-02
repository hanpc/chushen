<?php
session_start();

$code = trim($_POST['checkcode']);
if($code==$_SESSION["my_checkcode"]){
     echo 'true';
}else{
	echo 'false';
}


exit();
?>
