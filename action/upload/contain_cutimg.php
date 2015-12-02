<?php
session_start();
	include '../connect.php';
	$newimg=$_POST['newimg'];
	$x1=$_POST['x1'];
	$x2=$_POST['x2'];
	$y1=$_POST['y1'];
	$y2=$_POST['y2'];
	$url="cutimg.php?newimg=".$newimg."&x1=".$x1."&x2=".$x2."&y1=".$y1."&y2=".$y2;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>contain_cutimg</title>
</head>

<body>
<img src='<?php echo $url;?>' />
<a href="../../index.html" target="_top">头像设置成功，登陆进行体验吧！！！</a>
</body>
</html>
<?php
$setpath='img/heads/'.$_POST['newimg'];
////上传到数据库
$userid=$_SESSION['userid'];
$query="update userlist set headpic='".$setpath."' where id= '$userid'";
$result=mysql_query($query,$connect);
mysql_close($connect);
?>
