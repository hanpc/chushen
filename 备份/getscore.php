<?php
session_start();
include './connect.php';
$menuid=$_SESSION['menuid'];
$query='select  * from score where menuid='.$menuid;
$result=mysql_query($query);
$re=mysql_fetch_row($result);
///////id           score          menuid       num        
//  $re[0].'-----'.$re[1].'-----'.$re[2].'----'.$re[3];
echo $re[1];
mysql_close($connect);
?>