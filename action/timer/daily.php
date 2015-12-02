<?php

/*
  每日 tips  	4  	随机
  每日 名人  	9	随机
  
  统计周排行
  统计季度排行
*/
$filename="./data_daily.txt";
$old_date=date('Y-m-d',strtotime(file_get_contents($filename)));
$new_date=date('Y-m-d');
if($new_date==$old_date){
	//echo "today has already updated";
}else{
	//echo 'please update the data';
	include '../connect.php';
	//名人
	$num=9;   //选出9个不同的super
	$query='select id from userlist';
	$result=mysql_query($query,$connect);

	$ids=array();
	$select_id=array();
	$i=0;
	while($row=mysql_fetch_row($result)){
		 array_push($ids,$row[0]);
		 
	}

	$select_id=$ids;
	for($i=0;$i<$num;$i++){
		$a=rand($i,count($select_id)-1);
		$temp=$select_id[$i];
		$select_id[$i]=$select_id[$a];
		$select_id[$a]=$temp;
	}
	$one=$select_id[0];
	$two=$select_id[1];
	$three=$select_id[2];
	$four=$select_id[3];
	$five=$select_id[4];
	$six=$select_id[5];
	$seven=$select_id[6];
	$eight=$select_id[7];
	$nine=$select_id[8];

	$query="update super_daily set one='$one',two='$two',three='$three',four='$four',five='$five',six='$six',seven='$seven',eight='$eight',nine='$nine'";
	$result=mysql_query($query);

	//tips_daily
	$num=2;
	$query='select id from tips';
	$result=mysql_query($query,$connect);

	$ids=array();
	$select_id=array();
	$i=0;
	while($row=mysql_fetch_row($result)){
		 array_push($ids,$row[0]);
		 
	}

	$select_id=$ids;
	for($i=0;$i<$num;$i++){
		$a=rand($i,count($select_id)-1);
		$temp=$select_id[$i];
		$select_id[$i]=$select_id[$a];
		$select_id[$a]=$temp;
	}
	$one=$select_id[0];
	$two=$select_id[1];


	$query="update tips_daily set one='$one',two='$two'";
	$result=mysql_query($query);
	
	
	
	//最后执行时间更新
	file_put_contents($filename,$new_date);
	mysql_close($connect);
}




?>