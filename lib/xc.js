var arr=null;
var index_now=0;
$(document).ready(function(){
	
	$message=$('#message');
	$show=$('#show img');
	$list=$('#list ul');
	var i=0;
	var html_list='';
	$.get('./action/xc_show.php?'+Math.random(),function(data){
		arr=eval(data);
		tab(0);
		for(i=0;i<arr.length;i++){
			html_list+="<li><img src='./img/foods/"+arr[i].src+"'/></li>";
		}
		$list.html(html_list);
		$('#list ul li').bind('mouseover',function(){
			
			var a=$(this).index();
			tab(a);
		});
		//小图片的单击事件
		$('#list ul li').bind('click',function(){   
			var index=$(this).index();
			var url=arr[index].url;
			load(url);
		});
	});
	setInterval(function(){
		index_now=(index_now+1)%4;
		tab(index_now%4);

	},3000);//每三秒换一次
	
//	var a=$(this).index();
//	tab(a);
	$show.click(function(){
		load(arr[index_now].url);
	});

});
function tab(index){
	index_now=index;
	var src='./img/foods/'+arr[index].src;
	$show.attr('src',src);
	$message.html(arr[index].message);
}
function load(url){
	window.open(url);
}