<?php
// The file
$filename = "temp/".$_GET['newimg'];
// 进行图片剪切 生成图片并上传
// Content type
header('Content-type: image/jpeg');

// Get new dimensions
list($width, $height) = getimagesize($filename);
$size=getimagesize($filename);
$truewidth=$size[0];
$trueheight=$size[1];
////width=300 
$n=$truewidth/300;

$new_width = ($_GET['x2']-$_GET['x1'])*$n;
$new_height = ($_GET['y2']-$_GET['y1'])*$n;

// Resample
$image_p = imagecreatetruecolor(300,300);  //画布
$image = imagecreatefromjpeg($filename);

//imagecopyresampled(dst_image, src_image, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h)
imagecopyresampled($image_p, $image, 0, 0, $_GET['x1']*$n,$_GET['y1']*$n,300, 300,$new_width,$new_height);

// Output
imagejpeg($image_p, null, 100);
$newname="../../img/heads/".$_GET['newimg'];

imagejpeg($image_p, $newname, 100);
unlink($filename);  //删除临时文件


?> 