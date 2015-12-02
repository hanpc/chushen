$(document).ready(function(){
	$oUl=$('#show ul');
	var super_data;
	var html_new='';
	$.getJSON('./action/super.php',function(data){
		super_data=data;
		for(var i=0;i<super_data.length;i++){
			
			html_new+='<li class="user"><img src="./'+super_data[i].pic+'"><p>'+super_data[i].username+'</p></li>';
		}
		$oUl.html(html_new);
	});
});