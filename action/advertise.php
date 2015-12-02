<?php

header('Content-Type:text/json');

$arr1=array('src'=>'0f000cHqelH6nbqNEiNz0s.jpg',	'message'=>'ad1','url'=>'ftghvj');
$arr2=array('src'=>'0f00025NIVQ3albpLGbqO0.jpg',	'message'=>'川味回锅肉',	'url'=>'第二张图片');
$arr3=array('src'=>'2014-04-09_171143.png',			'message'=>'黄焖鸡翅',		'url'=>'第三张图片');
$arr4=array('src'=>'2014-04-09_171153.png',			'message'=>'杭椒杂酱面',	'url'=>'第四张图片');
$arr5=array('src'=>'2014-04-09_171205.png',			'message'=>'杭椒杂酱面',	'url'=>'第四张图片');
$arr6=array('src'=>'2014-04-09_171253.png',			'message'=>'杭椒杂酱面',	'url'=>'第四张图片');
$arr7=array('src'=>'2014-04-09_171327.png',			'message'=>'杭椒杂酱面',	'url'=>'第四张图片');
$arr8=array('src'=>'2014-04-09_171333.png',			'message'=>'杭椒杂酱面',	'url'=>'第四张图片');
$arr9=array('src'=>'5511584_095812169300_2.jpg',	'message'=>'杭椒杂酱面',	'url'=>'第四张图片');
$arr10=array('src'=>'5547453_151336023000_2.jpg',	'message'=>'杭椒杂酱面',	'url'=>'第四张图片');
$arr11=array('src'=>'9475807_094006465000_2.jpg',	'message'=>'杭椒杂酱面',	'url'=>'第四张图片');
$array=array($arr1,$arr2,$arr3,$arr4,$arr5,$arr6,$arr7,$arr8,$arr9,$arr10,$arr11);

$result=$array[rand(0,10)];
echo json_encode($result);

?>