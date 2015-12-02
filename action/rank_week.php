<?php
header('Content-Type:text/json');
$arr1=array('name'=>'酱香饼','author'=>'testuser1','clicknum'=>2354,'pic'=>'jxb.png','url'=>'show.php?name=1');
$arr2=array('name'=>'口水鸡','author'=>'testuser1','clicknum'=>2296,'pic'=>'ksj.png','url'=>'show.php?name=2');
$arr3=array('name'=>'鲜肉馄饨','author'=>'testuser1','clicknum'=>2187,'pic'=>'xrhd.png','url'=>'show.php?name=3');
$arr4=array('name'=>'孜然土豆','author'=>'testuser1','clicknum'=>1998,'pic'=>'zrtd.png','url'=>'show.php?name=4');
$arr5=array('name'=>'火腿土司卷','author'=>'testuser1','clicknum'=>1987,'testuser1','pic'=>'httsj.png','url'=>'show.php?name=5');
$arr6=array('name'=>'老婆饼','author'=>'testuser1','clicknum'=>1960,'pic'=>'lpb.png','url'=>'show.php?name=6');
$arr7=array('name'=>'流沙土豆丸','author'=>'testuser1','clicknum'=>1910,'pic'=>'lstdw.png','url'=>'show.php?name=7');
$arr8=array('name'=>'锅巴土豆','author'=>'testuser1','clicknum'=>1903,'pic'=>'gbtd.png','url'=>'show.php?name=8');
$arr9=array('name'=>'酱香芝麻饼','author'=>'testuser1','clicknum'=>1901,'pic'=>'jxzmb.png','url'=>'show.php?name=9');
$arr10=array('name'=>'鲜蔬鸡蛋饼','author'=>'testuser1','clicknum'=>1897,'pic'=>'xsjdb.png','url'=>'show.php?name=10');

$array=array(0=>$arr1,1=>$arr2,2=>$arr3,3=>$arr4,4=>$arr5,5=>$arr6,6=>$arr7,7=>$arr8,8=>$arr9,9=>$arr10);

echo json_encode($array);
?>