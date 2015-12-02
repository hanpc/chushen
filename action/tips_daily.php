<?php
include './connect.php';
header("Content-Type:text/json");
///////////////
$num=2;   //选出两个不同的建议
$json_data=array();
$query='select * from tips_daily';
$result=mysql_query($query,$connect);
$select_id=mysql_fetch_row($result);

$id1=$select_id[0];
$id2=$select_id[1];
$query="select * from tips where id in ('$id1','$id2')";
$result=mysql_query($query,$connect);
$i=0;
while($row=mysql_fetch_row($result)){
	////////0--id  1--title  2---short_info   4---pic
	//echo $row[1].'------'.$row[2].'<br>';
	$json_data[$i]=array('id'=>$row[0],'title'=>$row[1],'info'=>$row[2],'pic'=>$row[4]);
	$i++;
}
mysql_close($connect);
echo json_encode($json_data);
?>