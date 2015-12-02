<?php
$week=array('周日','周一','周二','周三','周四','周五','周六');

//strtotime('2014-10')  获得指定日期的时间戳('Y-W')
//echo date('Y-m');  //一年中的第几周

$switch='c';

if($switch=='c'){
	include './input_text.php';
}else{
	echo 'no such file';
}
?>