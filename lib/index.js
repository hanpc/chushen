$(document).ready(function(){
	
//检测是否有当日更新执行daily timer
$.get('./action/timer/timer_update.php');

$list=$('#maintable #dh .list');
$link=$('#lk');
$lkimg=$('#lk #link img');
$listshow=$('#list_show');

$dh=$('#list_show ul li a');
getUser();
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

/////////newmenu最新菜单
$newone=$('#new_1');
$newtwo=$('#new_2');
$newthree=$('#new_3');
$newfour=$('#new_4');



//////获取数据
var newlist_data;
var htmls=['','','',''];
$.getJSON('./action/newlist.php',function(data){
	newlist_data=data;
	var i=0;
for(i=0;i<4;i++){
	htmls[i]="<img src='./img/foods/"+newlist_data[i].pic+"'/><p><span>"+newlist_data[i].name+"</span><span>作者："+newlist_data[i].author+"</span><span>发表时间:"+newlist_data[i].writetime+"</span></p>";
}
$newone.html(htmls[0]);
$newone.click(function(){
	rload(newlist_data[0].url);
});
$newtwo.html(htmls[1]);
$newtwo.click(function(){
	rload(newlist_data[1].url);
});
$newthree.html(htmls[2]);
$newthree.click(function(){
	rload(newlist_data[2].url);
});
$newfour.html(htmls[3]);
$newfour.click(function(){
	rload(newlist_data[3].url);
});
});


var ad_data;
$.getJSON('./action/advertise.php',function(data){
	ad_data=data;
	$('#advertisement #ad_img').attr('src','./img/advertisement/'+ad_data.src);
});

//搜索框默认值
var default_value="请输入搜索关键词";
$keyword=$('#keyword');
$keyword.val(default_value);
$keyword.focus(function(){
	if($keyword.val()==default_value){
		$keyword.val('');
	}else{
		
	}
}).blur(function(){
	if($keyword.val()==''){
		$keyword.val(default_value);
	}
});


});
function load(index){
	switch(index){
		case 0:
			window.location.href="./index.html";
			break;
		case 1:
			rload('./health.html');
			break;
		case 2:
			rload('./seasonal.html');
			break;
		case 3:
			rload('./super.html');
			break;
		case 4:
			rload('personal.html');
			break;

		default:
			alert("false");
	}
}
function rload(url){
	window.location.href=url;	
}
function getUser(){
	//alert('我运行了');
	$.get('./action/getUser.php',function(msg){
		if(msg!="0"){
			$("#usermessage").html(msg);
			$('#logout').click(function(){
				$.get('./action/logout.php',function(){
					rload('index.html');
				});
			});
		}
	});
}
