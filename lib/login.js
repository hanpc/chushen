$(document).ready(function() {
    $username=$('#username');
	$password=$('#password');
	
	$em_user=$('#u');
	$em_pass=$('#p');
	$("#submit").click(function(){
		$em_user.html(" ");
		$em_pass.html(' ');
		if($username.val()==''||$username.val()==null){
			$em_user.html("用户名不能为空");
		}else if($password.val()==''||$password.val()==null){
			$em_pass.html('密码不能为空');
		}else{
			//alert('没有空的'+u()+'----'+p))
			var u=$username.val();
			var p=$password.val();
			//alert(u+'----'+p);
			$.post('./action/login.php',{'username':u,'password':p},function(msg){
				if(msg=='nu'){
					$em_user.html("该用户不存在");
				}else if(msg=='ep'){
					$em_pass.html('密码错误');
				}else if(msg=='0'||msg==0){
					window.location="./index.html";
				}
			});
		}
	});
});