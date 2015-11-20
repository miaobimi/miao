function Reg () {
	
	this.init();
}

Reg.prototype = {
	
	init : function(){
		changeLanguage(url);
		this.validateCode();
		this.icheck();
		this.validateParams();
	},

	validateParams : function(){
		validate('.reg-form',function(data){
			console.log(data)
		},true);
	},

	validateCode : function(){
		//验证码
	  var verifyimg = $(".verifyimg").attr("src");
	  $(".reloadverify").click(function(){
	      if( verifyimg.indexOf('?')>0){
	          $(".verifyimg").attr("src", verifyimg+'&random='+Math.random());
	      }else{
	          $(".verifyimg").attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());
	      }
	  });
	},

	icheck : function(){
		$('input').iCheck({
		    checkboxClass: 'icheckbox_square-blue',
			radioClass: 'iradio_square-blue',
		    increaseArea: '20%' // optional
		});
	}
};