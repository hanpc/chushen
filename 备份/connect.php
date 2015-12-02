<?php
$connect=mysql_connect('localhost','root','12345' ) or die('数据库连接失败');
mysql_select_db('test',$connect);
mysql_query('set names utf8');