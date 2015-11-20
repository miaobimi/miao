//导航高亮
function highlight_subnav(url){
    $('#side-menu').find('a[href="'+url+'"]').parents('li').addClass('active');
}

function ajaxReturn(url,data,before,callback){
	$.ajax({
		url : url,
		data : data,
		type : 'POST',
		dataType : 'json',
		cache : false,
		beforeSend : function(){
			if(typeof before === 'function'){
				before();
			}
		},
		success : function(result){
			if(typeof callback === 'function'){
				callback(result);
			}
		}
	})
}