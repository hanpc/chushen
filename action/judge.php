<?php 
session_start();
if(isset($_SESSION['username'])){
	$username=$_SESSION['username'];
	//$userid=$_SESSION['userid'];
	echo $username;
	
}else{
	echo "nouser";
}
?>