<?php
//获取推荐的四个菜谱并生成如下四个数组
include './connect.php';
$query="select * from recommend_weekly";

$result=mysql_query($query);
$row=mysql_fetch_row($result);
$id1=$row[0];
$id2=$row[1];
$id3=$row[2];
$id4=$row[3];

$query="select * from menu where id in('$id1','$id2','$id3','$id4')";
$result=mysql_query($query);
$data=array();
$json_data=array();
$new=array();
$userids=array();
$usernames=array();
while($row=mysql_fetch_row($result)){
	$new=array('message'=>$row[2],'src'=>$row[11],'url'=>'./show.php?id='.$row[0]);
	array_push($json_data,$new);
}


//print_r($usernames);

/* 备用数据
$arr1=array('src'=>'qdxcb.png','message'=>'全蛋小餐包','url'=>'http://www.baidu.com');
$arr2=array('src'=>'cwhgr.png','message'=>'川味回锅肉','url'=>'第二张图片');
$arr3=array('src'=>'hmjc.png','message'=>'黄焖鸡翅','url'=>'第三张图片');
$arr4=array('src'=>'hjzjm.png','message'=>'杭椒杂酱面','url'=>'第四张图片');
$array=array(0=>$arr1,1=>$arr2,2=>$arr3,3=>$arr4);
*/
header('Content-Type:text/json');
echo json_encode($json_data);

?>