<?php
$week=array('����','��һ','�ܶ�','����','����','����','����');

//strtotime('2014-10')  ���ָ�����ڵ�ʱ���('Y-W')
//echo date('Y-m');  //һ���еĵڼ���

$switch='c';

if($switch=='c'){
	include './input_text.php';
}else{
	echo 'no such file';
}
?>