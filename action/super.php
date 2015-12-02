<?php
include './connect.php';
//header("Content-Type:text/json");
$query="select * from super_daily";
$result=mysql_query($query,$connect);
$select_id=mysql_fetch_row($result);


$id1=$select_id[1];
$id2=$select_id[2];
$id3=$select_id[3];
$id4=$select_id[4];
$id5=$select_id[5];
$id6=$select_id[6];
$id7=$select_id[7];
$id8=$select_id[8];
$id9=$select_id[9];

//print_r($select_id);
$query="select * from userlist where id in ('$id1','$id2','$id3','$id4','$id5','$id6','$id7','$id8','$id9')";
$result=mysql_query($query,$connect);
$i=0;
$new=array();
$json_data=array();

while($row=mysql_fetch_row($result)){
	$json_data[$i]=array('id'=>$row[0],'username'=>$row[1],'pic'=>$row[7]);
	$i+=1;
}

count($json_data);
echo json_encode($json_data);
?>