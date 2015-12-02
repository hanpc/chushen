
$(document).ready(function(){
	$username=$('#username');
	$.get('./action/judge.php',function(data){
		if(data=='nouser'){
			alert("您还没有登陆您的账号，请先登录！");
			window.parent.location="./index.html";
		}else{
			$username.html(data);
		}
	});
	$logout=$('#logout');
	$logout.click(function(){
		$.get('./action/logout.php');	
	});
});