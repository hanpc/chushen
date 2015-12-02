$(document).ready(function(){
$list=$('#maintable #dh .list');
$link=$('#lk');
$lkimg=$('#lk #link img');
$listshow=$('#list_show');

$dh=$('#list_show ul li a');
var url='';
$list.mouseover(function(){
	$(this).css('background','#FC0');
	})
	.click(function(){
		load($(this).index());
	})
	.mouseout(function(){
		$(this).css('background','none');
	});
$link.mouseover(function(){
		
		$(this).css({background:'#fff',border:'#F77611 1px solid','border-bottom':'1px #fff solid'});
		$lkimg.attr('src','./img/down2.png');
		$listshow.css('display','block');
		//$listshow.show('normal');
	}).mouseout(function(){
		$listshow.css('display','none');

		$(this).css({background:'none',border:'none'});
		$lkimg.attr('src','./img/up2.png');
	});

///添加导航功能
	$dh.click(function(){
	url='./classshow.php?class='+$(this).parent().parent('.cls').attr('title')+'&aim='+$(this).html();
		rload(url);
	});

});
function load(index){
	switch(index){
		case 0:
			window.location.href="./index.html";
			break;
		case 1:
			alert('菜谱');
			break;
		case 2:
			alert('健康');
			break;
		case 3:
			alert('应季菜');
			break;
		case 4:
			alert('达人');
			break;
		case 5:
			alert('个人中心');
			break;
		default:
			alert("false");
	}
}
function rload(url){
	window.location.href=url;	
}