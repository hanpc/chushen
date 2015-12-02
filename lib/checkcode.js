function reget(){
		$(this).attr("src",'./action/code_char.php?' + Math.random());
}
function check(){
	var code_char = $("#checkcode").val();
	$.post("./action/chk_code.php",{code:code_char},function(msg){
		
	});
}