<?php
header('Content-Type:text/json');
include './connect.php';
$query="select * from menu order by writetime desc";
$result=mysql_query($query);
$data=array();
$json_data=array();
$new=array();
$userids=array();
$usernames=array();
while($row=mysql_fetch_row($result)){
	array_push($userids,$row[1]);
	$new=array('name'=>$row[2],'writetime'=>$row[3],'pic'=>$row[11],'url'=>'./show.php?id='.$row[0]);
	array_push($data,$new);
}
for($i=0;$i<4;$i++){
$id=$userids[$i];
$query="select username from userlist where id ='$id'";
$result=mysql_query($query);
$row=mysql_fetch_row($result);
array_push($usernames,$row[0]);
}


//print_r($usernames);

for($i=0;$i<4;$i++){
	$new=array('name'=>$data[$i]['name'],'author'=>$usernames[$i],'writetime'=>$data[$i]['writetime'],'pic'=>$data[$i]['pic'],'url'=>$data[$i]['url']);
	array_push($json_data,$new);
}
/* 测试数据
$arr1=array('name'=>'农家烧茄子',	'author'=>'testuser2',	'writetime'=>'2014-3-25 13:50',	'pic'=>'njsqz.png',	'url'=>'show.php?name=1');
$arr2=array('name'=>'干锅土豆片',	'author'=>'testuser3',	'writetime'=>'2014-3-24 11:30',	'pic'=>'ggtdp.png',	'url'=>'show.php?name=2');
$arr3=array('name'=>'无油炸鸡',		'author'=>'testuser4',	'writetime'=>'2014-3-14 11:30','pic'=>'wyzj.png',	'url'=>'show.php?name=3');
$arr4=array('name'=>'肉末酱烧茄子',	'author'=>'testuser5',	'writetime'=>'2014-3-09 22:30','pic'=>'rmjsqz.png',	'url'=>'show.php?name=4');
*/

//$array=array(0=>$arr1,1=>$arr2,2=>$arr3,3=>$arr4);
echo json_encode($json_data);
?>