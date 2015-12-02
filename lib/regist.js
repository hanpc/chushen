$(document).ready(function(){
	$.ajaxSetup ({
		cache: false //关闭AJAX相应的缓存
	}); // 关闭缓存功能
	var canSubmit=false;
	$('#regist_form').validate({
		rules:{
			username:{
				onblur:false,
				required:true,
				minlength:3
			},
			password:{
				required:true,
				minlength:4
			},
			repassword:{
				required:true,
				equalTo:"#password"   
			},
			mail:{
				required:true,
				email:true
			},
			checkcode:{
				required:true,
				
			remote:{
					url: "./action/chk_code.php",
                    type: "post",

                    dataType: 'json',

                    data: {
                        'checkcode': function(){return $('input[name="checkcode"]').val();}
                    }
				}
			}
				
		},
		messages:{
			username:{
				required:'请输入用户名',
				minlength:'最少三个字符'
			},
			password:{
				required:'为了您的账户安全，请输入密码',
				minlength:'密码长度过短，最少4个字符'
			},
			repassword:{
				required:'请输入确认密码',
				equalTo:'两次密码输入不一致'
			},
			mail:{
				required:'请输入注册用的邮箱',
				email:'请输入正确的邮箱'
			},
			checkcode:{
				required:'请输入验证码',
				remote:'验证码错误'
			}
		
		}
	});

	
	$('#imgcode').click(function(){
		$(this).attr("src",'./action/code_char.php?' + Math.random());
	});
	$('#submit').click(function(){
			//var data=$('#regist_form').serialize();
			
			$('#regist_form').ajaxSubmit(function(msg){
				$("#regist_table").html(msg);
				$('#complete_regist').click(function(){
					$('#upload_head').show();
				});
				return false;
			});
			

	});
	
	$('#reset').click(function(){
		$('#regist_form')[0].reset();
	});
	
});
