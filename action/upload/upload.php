<body style="overflow-y:hidden">
<form enctype="multipart/form-data" action="" method="post">
<input type="file" name="myimg"/>
<input type="submit" value="头像截取" name="up_start"/>
</form>
<?php
header('Content-type:text/html;charset=utf8');
if(isset($_POST['up_start'])){
	if($_FILES['myimg']['error']>0){
		echo '错误'.$_FILES['myimg']['error'];
	}else{
		$tmp_filename=$_FILES['myimg']['tmp_name'];
		$filename=$_FILES['myimg']['name'];
		$dir="temp/";
		$newname=time().$filename;
		if(is_uploaded_file($tmp_filename)){
			if(move_uploaded_file($tmp_filename,$dir.$newname)){   //移动文件并重命名
				echo '上传文件成功<br>';
				echo '文件名：'.$newname.'<br>';
				echo '文件大小为'.round($_FILES['myimg']['size']/1024,2).'KB-----'.time();
				header("Location: cutaction.php?newimg=$newname");
			}else{
				echo '上传文件失败！';
			}
		}
	}
}
?>
</body>