$(document).ready(function(){

	$week_link=$('#week_link');
	$season_link=$('#season_link');
	$week=$('#week');
	$season=$('#season');
	$w_ul=$('#main #week ul');
	$s_ul=$('#main #season ul');
	//获得数据
	var data_week=['','','','','','','','','',''];
	var data_season=['','','','','','','','','',''];
	
	$.get('./action/rank_week.php?'+Math.random(),function(data){
		data_week=eval(data);
		var  w_html='<a href="">a</a>';
		
		w_html='<li class="selected"><p class="small"><img src="img/rank1.png">&nbsp;<span class="name">'+data_week[0].name+'</span><span class="author">'+data_week[0].author+'</span><span class="clicknum">'+data_week[0].clicknum+'</span></p><p class="big"><img src="./img/foods/'+data_week[0].pic+'"><span class="b_name">'+data_week[0].name+'</span><span  class="b_author">作者：'+data_week[0].author+'</span><span class="b_clicknum">点击量:'+data_week[0].clicknum+'</span></p></li>';

		for(var i=1;i<10;i++){
			w_html+='<li><p class="small"><img src="img/rank'+(i+1)+'.png">&nbsp;<span class="name">'+data_week[i].name+'</span><span class="author">'+data_week[i].author+'</span><span class="clicknum">'+data_week[i].clicknum+'</span></p><p class="big"><img src="./img/foods/'+data_week[i].pic+'"><span class="b_name">'+data_week[i].name+'</span><span  class="b_author">作者：'+data_week[i].author+'</span><span class="b_clicknum">点击量:'+data_week[i].clicknum+'</span></p></li>';
		}
		$w_ul.html(w_html);
		$('#main #week ul li').mouseover(function(){
			var a=$(this).index();
			$(this).attr('class','selected');
			$(this).siblings().removeClass('selected');;
		});
	});
	///////////////////////////////////////////////////////////////////////////////
	$.get('./action/rank_season.php?'+Math.random(),function(data){
		data_season=eval(data);
		var  s_html='';
		
		s_html='<li class="selected"><p class="small"><img src="img/rank1.png">&nbsp;<span class="name">'+data_season[0].name+'</span><span class="author">'+data_season[0].author+'</span><span class="clicknum">'+data_season[0].clicknum+'</span></p><p class="big"><img src="./img/foods/'+data_season[0].pic+'"><span class="b_name">'+data_season[0].name+'</span><span  class="b_author">作者：'+data_season[0].author+'</span><span class="b_clicknum">点击量:'+data_season[0].clicknum+'</span></p></li>';

		for(var i=1;i<10;i++){
			s_html+='<li><p class="small"><img src="img/rank'+(i+1)+'.png">&nbsp;<span class="name">'+data_season[i].name+'</span><span class="author">'+data_season[i].author+'</span><span class="clicknum">'+data_season[i].clicknum+'</span></p><p class="big"><img src="./img/foods/'+data_season[i].pic+'"><span class="b_name">'+data_season[i].name+'</span><span  class="b_author">作者：'+data_season[i].author+'</span><span class="b_clicknum">点击量:'+data_season[i].clicknum+'</span></p></li>';
		}
		$s_ul.html(s_html);
		$('#main #season ul li').mouseover(function(){
			var a=$(this).index();
			$(this).attr('class','selected');
			$(this).siblings().removeClass('selected');;
		});
	});
	
$week_link.click(function(){
		$(this).css('background','#F90');
		$week.css('display','block');
		$season_link.css('background','#999');
		$season.css('display','none');
		
	});
	$season_link.click(function(){
		$(this).css('background','#F90');
		$season.css('display','block');
		$week_link.css('background','#999')
		$week.css('display','none');
		$.get('./action/rank_season.php',function(data){
			
			
		});
	});
	
	
});