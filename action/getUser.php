<?php
session_start();
if(isset($_SESSION['username'])){
	echo "欢迎您：".$_SESSION['username']."   <a href='./personal.html'>个人中心</a>-- <a href='javascript:;' id='logout'>退出登录</a>";
}else{
	echo "0";
}
?>