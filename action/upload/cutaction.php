<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Prototype+php拖拉裁切图片</title>
<link href="../../css/cutimg.css" type=text/css rel=stylesheet>
<script type="text/javascript" src="../../lib/imgcut/prototype.js"></script>
<script type="text/javascript" src="../../lib/imgcut/cropper/scriptaculous.js?load=builder,dragdrop"></script>
<script type="text/javascript" src="../../lib/imgcut/cropper/cropper.js"></script>
<script type="text/javascript">
var position=new Array();
function onEndCrop(opic){
	$('x1').value=position[0]=opic.x1;
	$('y1').value=position[1]=opic.y1;
	$('x2').value=position[2]=opic.x2;
	$('y2').value=position[3]=opic.y2;
}
Event.observe(window,'load',function(){
		new Cropper.ImgWithPreview('opic',{minWidth:120,minHeight:120,ratioDim:{x:10,y:10},displayOnInit:true,onEndCrop:onEndCrop,previewWrap:'preview'})
	});		
</script>
</head>
<body>
<div id="main_frame">
<div id="big_img"><img src="<?php $name=$_GET['newimg']; $path="./temp/$name"; echo $path; ?>" id="opic"/></div>
<div id="small_img" ><h3>裁剪预览：</h3><div id="preview"></div></div>
<form action="contain_cutimg.php" method="post">
<input type="hidden" id="x1" name="x1" size="3" />
<input type="hidden" id="y1" name="y1" size="3"   />
<input type="hidden" id="x2" name="x2" size="3"  />
<input type="hidden" id="y2" name="y2" size="3"  />
<input type="hidden" name="newimg" value="<?php echo $_GET['newimg'];?>"/>
<input name="cropper" id="cropper" type="submit" class="button" value="运行裁图"/>
</form>
</div>
</body>
</html>
