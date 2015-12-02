var index=0;
var score=0;   //当前得分
var message=['糟糕','凑合','不错','好吃','力荐'];
var color=['#F00','#F30','#F60','#f90','#ff0'];

$(document).ready(function(){
	
	$key=$('#key');
	$rulers=$('#star #ruler li');
	$scoreshow=$("#scoreshow");
	$.get('getscore.php',function(data){
		score=data;
		setscore();
	});
	//初始化
	
	move(score);
	$rulers.mouseover(function(){
		move($(this).index());
		show($(this).index());
	})
	.mouseout(function(){
		move(-1);
		showscore();	
	})
	.mousemove(function(){
		showscore();
	})
	.mousedown(function(){
		$key.css('width',index);
		$rulers.unbind('mouseover');
		$rulers.unbind('mouseout');
		$rulers.unbind('mousedown');
		showscore();
		//发送评分
		var newscore=score+1;
		
		if(newscore==0){
			alert('当前评分不合法');
		}else{
			$.get('setscore.php',{score:newscore},function(data){
				alert(data);
			});
		}
	});
});
function move(i){
	score=i;
	index=(score+1)*12;
		$key.css('width',index+'px');
		$key.css('background',color[parseInt(score/2)]);
}
function showscore(){
		$scoreshow.css('display','block');
		var c=parseInt(score/2);
		var d='您的评分是:'+(score+1)+'...'+message[c];
		$scoreshow.html(d);
}
function setscore(){
	$scoreshow.html('当前评分：'+score+'分');
	var i=(score-1)*12;
	$key.css('width',i+'px');
}
