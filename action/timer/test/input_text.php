<?php
$filename='./a.txt';
$count=file_get_contents($filename);
$count+=1;
file_put_contents($filename,$count);
?>