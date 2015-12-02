<?php
$connect=mysql_connect('localhost','root','12345' ) or die('数据库连接失败');
mysql_select_db('cs',$connect);
mysql_query('set names utf8');
$query="select * from userlist";
$result=mysql_query($query);
$row=mysql_fetch_row($result);
echo $row[1];