<?php
session_start();
$_SESSION['menuid']=$_GET['id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>mystar</title>
<link type="text/css" href="./css/star.css" rel="stylesheet" />
<script type="text/javascript" src="./lib/jquery.js"></script>
<script type="text/javascript" src="./lib/star.js"></script>
</head>

<body>
<div id="star">
	<div id="key"></div>
    <ul id="ruler">
    	<li title="1"></li>
        <li title="2"></li>
        <li title="3"></li>
        <li title="4"></li>
        <li title="5"></li>
        <li title="6"></li>
        <li title="7"></li>
        <li title="8"></li>
        <li title="9"></li>
		<li title="10"></li>
    </ul>
    <div id="scoreshow"></div>
</div>

</body>
</html>
<?php

?>