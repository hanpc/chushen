$(document).ready(function(e) {
   $dh=$('#list_show ul li a');
   $dh.click(function(){
	url='./classshow.php?class='+$(this).parent().parent('.cls').attr('title')+'&aim='+$(this).html();
		rload(url);
	});
});
function rload(url){
	window.open(url);	
}