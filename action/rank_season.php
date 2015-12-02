<?php
header('Content-Type:text/json');
$arr1=array('name'=>'农家烧茄子','author'=>'testuser2','clicknum'=>12354,'pic'=>'njsqz.png','url'=>'show.php?name=1');
$arr2=array('name'=>'干锅土豆片','author'=>'testuser3','clicknum'=>12296,'pic'=>'ggtdp.png','url'=>'show.php?name=2');
$arr3=array('name'=>'无油炸鸡','author'=>'testuser4','clicknum'=>12187,'pic'=>'wyzj.png','url'=>'show.php?name=3');
$arr4=array('name'=>'肉末酱烧茄子','author'=>'testuser5','clicknum'=>11998,'pic'=>'rmjsqz.png','url'=>'show.php?name=4');
$arr5=array('name'=>'牙签肉','author'=>'testuser6','clicknum'=>11987,'testuser1','pic'=>'yqr.png','url'=>'show.php?name=5');
$arr6=array('name'=>'粉蒸排骨','author'=>'testuser7','clicknum'=>11960,'pic'=>'fzpg.png','url'=>'show.php?name=6');
$arr7=array('name'=>'酱香饼','author'=>'testuser8','clicknum'=>11910,'pic'=>'jxb.png','url'=>'show.php?name=7');
$arr8=array('name'=>'红薯蔬菜小甜饼','author'=>'testuser9','clicknum'=>11903,'pic'=>'hsscxtb.png','url'=>'show.php?name=8');
$arr9=array('name'=>'煎酿豆腐','author'=>'testuser10','clicknum'=>11901,'pic'=>'jndf.png','url'=>'show.php?name=9');
$arr10=array('name'=>'彩色水晶蛋','author'=>'testuser11','clicknum'=>11897,'pic'=>'cssjd.png','url'=>'show.php?name=10');

$array=array(0=>$arr1,1=>$arr2,2=>$arr3,3=>$arr4,4=>$arr5,5=>$arr6,6=>$arr7,7=>$arr8,8=>$arr9,9=>$arr10);

echo json_encode($array);
?>