/**
 * 表单验证
 * @param  {[type]}   obj      [表单对象名]
 * @param  {Function} callback [成功后的回调函数]
 * @return {[type]}            [description]
 */
function validate(obj,callback,flag){
	var validate = $(obj).Validform({//所有可传入的参数如下：;
		btnSubmit:"#btn_sub", 
		btnReset:"#btn_reset",
		tiptype:3, 
		ignoreHidden:false,
	    dragonfly:false,
		tipSweep:true,
		showAllError:false,
		postonce:true,
		ajaxPost:flag,
		beforeCheck:function(curform){
			//在表单提交执行验证之前执行的函数，curform参数是当前表单对象。
			//这里明确return false的话将不会继续执行验证操作;	
		},
		beforeSubmit:function(curform){
			//在验证成功后，表单提交前执行的函数，curform参数是当前表单对象。
			//这里明确return false的话表单将不会提交;	
		},
		callback:function(data){
			if(typeof callback === 'function'){
				callback(data);
			}
		}
	});
}
// 改变语言
function changeLanguage(url){
	$('select[name=lan]').bind('change',function(){
		var lan = $(this).val();
		if(lan != ''){
			ajaxReturn(url,{lan:lan},null,function(data){
				if(data.status == '1'){
					window.location.reload();
				}
			})
		}
		return;
	})
}
function ajaxReturn(url,data,before,callback){
	$.ajax({
		url : url,
		data : data,
		dataType : 'json',
		type : 'POST',
		beforeSend : function(){
			if(typeof before === 'function'){
				before();
			}
		},
		success : function(msg){
			if(typeof callback === 'function'){
				callback(msg);
			}
		},
		error : function(){
			layer.alert('网络错误');
		}
	})
}