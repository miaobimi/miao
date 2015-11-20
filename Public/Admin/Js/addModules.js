$(function(){

	$('#add-modules').click(function(){
		$.ajax({
		    type: "POST",
		    url: addModulesUrl,
		    data: $("form").serialize(),
		    dataType: "json",
		    success: function(data){
		    	if(data.status){
		    		layer.msg('添加成功',2,9);
		    	}else{
		    		layer.alert(data.info);
		    	}
		    }     
	    });
	})

	// 验证表单
	$('form[name=addUser]').validate({
		errorElement : 'lable',
		errorPlacement: function(error, element) {   
		    error.appendTo(element.parent().next());   
		    element.parents('.form-group').removeClass('has-success').addClass('has-error');
		},
		success : function (label) {
			label.parents('.form-group').removeClass('has-error').addClass('has-success');
		},
		rules:{
			email:{
				required:true
			},
			password : {
				required : true,
			},
			passworded : {
				required : true,
				equalTo : "#pwd"
			},
			username:{
				required:true
			}
		},
		messages : {
			email : {
				required : '账号不能为空',
				remote : '账号已存在'
			},
			password : {
				required : '密码不能为空'
			},
			passworded : {
				required : '请确认密码',
				equalTo : '两次密码不一致'
			},
			username : {
				required : '请填写您的昵称',
				rangelength : '昵称在2-10个字之间',
				remote : '昵称已存在'
			}
		}
	})
});

