$(document).ready(function(){
	$left=$('#tip_left');
	$right=$('#tip_right');
	var tips_data;
	var html_l="";
	var html_r="";
	$.getJSON('./action/tips_daily.php',function(data){
		tips_data=data;
		//alert(tips_data[0].id+'---'+tips_data[1].id);
		html_l='<img src="./img/tips/'+tips_data[0].pic+'"><p class="title"><a href="./tips.php?id='+tips_data[0].id+'" target="_top">'+tips_data[0].title+'</a></p><p class="short_info">&nbsp;&nbsp;&nbsp;&nbsp;'+tips_data[0].info+'</p>';
		
		html_r='<img src="./img/tips/'+tips_data[1].pic+'"><p class="title"><a href="./tips.php?id='+tips_data[1].id+'"  target="_top">'+tips_data[1].title+'</a></p><p class="short_info">&nbsp;&nbsp;&nbsp;&nbsp;'+tips_data[1].info+'</p>';
		$left.html(html_l);
		$right.html(html_r);
	});

});