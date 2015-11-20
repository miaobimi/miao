$(function(){

	// $('#add-role').click(function(){
	// 	$.ajax({
	// 	    type: "POST",
	// 	    url: addRoleUrl,
	// 	    data: $("form").serialize(),
	// 	    dataType: "json",
	// 	    success: function(data){
	// 	    	if(data.status){
	// 	    		layer.msg('添加成功',2,9);
	// 	    	}else{
	// 	    		layer.alert(data.info);
	// 	    	}
	// 	    }     
	//     });
	// })

	validate('.addRole',function(data){
		if(data.status){
    		// layer.alert(data.info,9);
    	}else{
    		// layer.alert(data.info);
    	}
	})
});

