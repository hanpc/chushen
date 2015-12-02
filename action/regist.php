<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>注册</title>
</head>
<?php
include './connect.php';
//echo $_POST['username'].'-----'.$_POST['password']; 
//username 
//password
//email
//addtime
//clicknum
//headpic
$username=$_POST['username'];
$password=MD5($_POST['password']);
$email=$_POST['mail'];
$sex=$_POST['sex'];
if($sex=="男"){
	$headpic="img/man.png";
}else{
	$headpic="img/woman.png";
}
$addtime=date("Y-m-d H:i:s",time());
$query="insert into userlist (username,password,sex,email,addtime,clicknum,headpic) values('$username','$password','$sex','$email','$addtime','0','$headpic')";
$result=mysql_query($query,$connect) or die(mysql_error());
if($result){
	$_SESSION['username']=$username;
	$query=@"select id from userlist where username='$username'";
	$result=mysql_query($query,$connect);
	$row=mysql_fetch_row($result);
	$_SESSION['userid']=$row[0];
	echo '注册成功!!  '.$_SESSION['username'].'您是我站第'.$_SESSION['userid'].'位注册会员<br><a href="./regist_head.html" id="complete_regist">上传头像进行我们的美食之旅吧</a><br><br><br><br><a href="./index.html" id="login_now">暂不上传,直接进行登陆</a>';
}else{
	echo '注册失败';
}
mysql_close($connect);
?>
</html>