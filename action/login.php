<?php
session_start();
include './connect.php';

$username=$_POST['username'];
$password=md5($_POST['password']);

$query="select *  from userlist where username='$username'";
$result=mysql_query($query);
$row=mysql_fetch_row($result);
if($row){
	if($row[2]==$password){
		$_SESSION['username']=$_POST['username'];
		$_SESSION['userid']=$row[0];
		echo '0';
		//header("Location: ../index.php");
	}else{
		//echo "errorpassword";
		echo "ep";
	}
}else{
	echo "nu";
}


?>
