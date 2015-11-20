$(function(){

	$('#selectedAll').on('ifChecked', function(event){
		$('input').iCheck('check');
	});
	$('#selectedAll').on('ifUnchecked', function(event){
		$('input').iCheck('uncheck');
	});

	$('select[name=groups]').bind('change',function(){

		window.location.href=$(this).val();
	});

	/**
	 * 禁用/启用
	 * @return {[type]} [description]
	 */
	$('.deny').bind('click',function(){
		var self = $(this);
		var uid = self.parent().attr('userid');
		var status = getText(self);
		ajaxReturn({uid:uid,status:status},denyUrl,function(data){
			if(data.status){
				layer.msg(data.info,2,9);
				if(status){
					self.text('禁用');
				}else{
					self.text('启用');
				}
			}else{
				layer.alert(data.info);
			}
		})
	});

	$('.allDeny').bind('click',function(){
		var datas = new Array();
		$('input[type=checkbox]:checked').each(function(){
			var $obj = $(this).parents('td');
			var uid = $obj.attr('userid');
			
			if(getText($obj.parents('tr').find('.deny'))){
				datas.push(uid);
			}		
		})
		var status = 0;
		ajaxReturn({uid:datas,status:status},denyUrl,function(data){

		})
	})

});
function getText(obj){
	var text = $.trim(obj.text());
	if(text == '启用'){
		return 1;
	}else if(text == '禁用'){
		return 0;
	}
}
function ajaxReturn(data,url,callback){
	$.ajax({
		url : url,
		data : data,
		dataType : 'json',
		type: "POST",
        cache: false,
		success : function(msg){
			if(typeof callback === 'function'){
				callback(msg);
			}
		}
	})
}