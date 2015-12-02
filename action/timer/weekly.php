<?php
/*
*每周菜排行 10 week_click 
*获取当前年份 ，本年的第几周如 ：2014-15 即2014年第15周  ('Y-W')
"select id,week from click_weekly where week= '$weeknow'"
if exist (update)
	else{insert }
*/

//每周 食品推荐 4  	随机 
$filename="./data_weekly.txt";
$old_date=file_get_contents($filename);
$new_date=date('Y-W');
if($new_date==$old_date){
	//echo "today has already updated";
}else{
	include '../connect.php';
	//echo 'please update the data';
	//执行每周执行的函数
	/*
	*每周 食品推荐 4  	随机 
	*/
	$num=4;   //选出4个不同的菜
	$query='select id from menu';
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
	
	$query="update recommend_weekly set one='$one',two='$two',three='$three',four='$four'";
	$result=mysql_query($query);
	
	
	//执行完毕 关闭数据库
	file_put_contents($filename,$new_date);
}

?>