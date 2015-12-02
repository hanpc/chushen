<?php
session_start();
include './connect.php';
$menuid=$_SESSION['menuid'];
$query='select  * from score where menuid='.$menuid;
$result=mysql_query($query);
$re=mysql_fetch_row($result);
///////id           score          menuid       num        
//  $re[0].'-----'.$re[1].'-----'.$re[2].'----'.$re[3];
$num=$re[3]+1;
$avg_score=round(($re[1]*$re[3]+$_GET['score'])/$num,2);//保留两位小数

$query='update score set score='.$avg_score.',num='.$num.' where menuid='.$menuid;
$result=mysql_query($query);
if($result){
	echo '分数提交成功';
}
mysql_close($connect);
?>