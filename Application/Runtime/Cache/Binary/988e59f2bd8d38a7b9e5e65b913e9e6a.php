<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
 <head>
 	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
 	<!-- Bootstrap -->
	<link href="/Public/Static/bootstrapv3/css/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript" src="/Public/Static/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="/Public/Static/bootstrapv3/js/bootstrap.min.js"></script>
	<!-- Bootstrap end-->
	<!-- icheck -->
	<link href="/Public/Static/iCheck/skins/all.css?v=1.0.2" rel="stylesheet">
	<script src="/Public/Static/iCheck/icheck.min.js"></script>
	<!-- icheck 结束 -->
	<!-- layer -->
	<script src="/Public/Static/layerv1.9.1/layer.js"></script>
	<script src="/Public/Static/layerv1.9.1/extend/layer.ext.js"></script>
	<!-- layer 结束 -->
	<!-- validate -->
	<script src="/Public/Static/Validform_v5.3.2_min.js"></script>
	<!-- validate 结束 -->
	<script src="/Public/Binary/Js/common.js"></script>
	<link rel="stylesheet" type="text/css" href="/Public/Binary/Css/home.css">
	<title>中远融投－注册</title>
</head>
<body>
	<div class="col-sm-2" id="lan">
      <select class="form-control select" name="lan">
      	<option value="">切换语言</option>
      	<option value="zh-cn">中文简体</option>
      	<option value="en-us">英文</option>
      </select>
    </div>
    <h4 style="color:#fff;width:588px;margin:10px auto;text-align:center;"><?php echo (L("regtext")); ?></h4>
	<div id="reg-div">

		<form action="<?php echo U('reg');?>" method="POST" class="form-horizontal reg-form">
		  <div class="form-group">
		    <label for="" class="col-sm-2 control-label"><?php echo (L("name")); ?>:</label>
		    <div class="col-sm-6">
		      <input name="name" type="text" dataType="*2-10" nullmsg="不能为空" class="form-control" id="" placeholder="<?php echo (L("name")); ?>">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="" class="col-sm-2 control-label"><?php echo (L("country")); ?>:</label>
		    <div class="col-sm-4">
		      <select class="form-control select" name="country" id="">
		      	<option selected>Afganistan</option>
			      <option>Albania</option>
			      <option>Algeria</option>
			      <option>American Samoa</option>
			      <option>Andorra</option>
			      <option>Angola</option>
			      <option>Anguilla</option>
			      <option>Antigua &amp Barbuda</option>
			      <option>Argentina</option>
			      <option>Armenia</option>
			      <option>Aruba</option>
			      <option>Australia</option>
			      <option>Austria</option>
			      <option>Azerbaijan</option>
			      <option>Azores</option>
			      <option>Bahamas</option>
			      <option>Bahrain</option>
			      <option>Bangladesh</option>
			      <option>Barbados</option>
			      <option>Belarus</option>
			      <option>Belgium</option>
			      <option>Benin</option>
			      <option>Bermuda</option>
			      <option>Bhutan</option>
			      <option>Bolivia</option>
			      <option>Bonaire</option>
			      <option>Bosnia & Herzegovina</option>
			      <option>Botswana</option>
			      <option>Brazil</option>
			      <option>British Indian Ocean Ter</option>
			      <option>Brunei</option>
			      <option>Bulgaria</option>
			      <option>Burkina Faso</option>
			      <option>Burundi</option>
			      <option>Cambodia</option>
			      <option>Cameroon</option>
			      <option>Canada</option>
			      <option>Canary Islands</option>
			      <option>Cape Verde</option>
			      <option>Cayman Islands</option>
			      <option>Central African Republic</option>
			      <option>Chad</option>
			      <option>Channel Islands</option>
			      <option>Chile</option>
			      <option>China</option>
			      <option>Christmas Island</option>
			      <option>Cocos Island</option>
			      <option>Columbia</option>
			      <option>Comoros</option>
			      <option>Congo</option>
			      <option>Cook Islands</option>
			      <option>Costa Rica</option>
			      <option>Cote D'ivoire</option>
			      <option>Croatia</option>
			      <option>Cuba</option>
			      <option>Curaco</option>
			      <option>Cyprus</option>
			      <option>Czeck Republic</option>
			      <option>Denmark</option>
			      <option>Djibouti</option>
			      <option>Dominica</option>
			      <option>Dominican Republic</option>
			      <option>Dubai</option>
			      <option>East Timor</option>
			      <option>Ecuador</option>
			      <option>Egypt</option>
			      <option>El Salvador</option>
			      <option>Equatorial Guinea</option>
			      <option>Eritrea</option>
			      <option>Estonia</option>
			      <option>Ethiopia</option>
			      <option>Falkland Islands</option>
			      <option>Faroe Islands</option>
			      <option>Fiji</option>
			      <option>Finland</option>
			      <option>France</option>
			      <option>French Guiana</option>
			      <option>French Polynesia</option>
			      <option>French Southern Ter</option>
			      <option>Gabon</option>
			      <option>Gambia</option>
			      <option>Georgia</option>
			      <option>Germany</option>
			      <option>Ghana</option>
			      <option>Gibraltar</option>
			      <option>Great Britain</option>
			      <option>Greece</option>
			      <option>Greenland</option>
			      <option>Grenada</option>
			      <option>Guadeloupe</option>
			      <option>Guam</option>
			      <option>Guatemala</option>
			      <option>Guinea</option>
			      <option>Guyana</option>
			      <option>Haiti</option>
			      <option>Hawaii</option>
			      <option>Honduras</option>
			      <option>Hong Kong</option>
			      <option>Hungary</option>
			      <option>Iceland</option>
			      <option>India</option>
			      <option>Indonesia</option>
			      <option>Iran</option>
			      <option>Iraq</option>
			      <option>Ireland</option>
			      <option>Isle of Man</option>
			      <option>Israel</option>
			      <option>Italy</option>
			      <option>Jamaica</option>
			      <option>Japan</option>
			      <option>Jordan</option>
			      <option>Kazakhstan</option>
			      <option>Kenya</option>
			      <option>Kiribati</option>
			      <option>Korea North</option>
			      <option>Korea South</option>
			      <option>Kuwait</option>
			      <option>Kyrgyzstan</option>
			      <option>Laos</option>
			      <option>Latvia</option>
			      <option>Lebanon</option>
			      <option>Lesotho</option>
			      <option>Liberia</option>
			      <option>Libya</option>
			      <option>Liechtenstein</option>
			      <option>Lithuania</option>
			      <option>Luxembourg</option>
			      <option>Macau</option>
			      <option>Macedonia</option>
			      <option>Madagascar</option>
			      <option>Malawi</option>
			      <option>Malaysia</option>
			      <option>Maldives</option>
			      <option>Mali</option>
			      <option>Malta</option>
			      <option>Marshall Islands</option>
			      <option>Martinique</option>
			      <option>Mauritania</option>
			      <option>Mauritius</option>
			      <option>Mayotte</option>
			      <option>Mexico</option>
			      <option>Midway Islands</option>
			      <option>Moldova</option>
			      <option>Monaco</option>
			      <option>Mongolia</option>
			      <option>Montserrat</option>
			      <option>Morocco</option>
			      <option>Mozambique</option>
			      <option>Myanmar</option>
			      <option>Nambia</option>
			      <option>Nauru</option>
			      <option>Nepal</option>
			      <option>Netherland Antilles</option>
			      <option>Netherlands</option>
			      <option>Nevis</option>
			      <option>New Caledonia</option>
			      <option>New Zealand</option>
			      <option>Nicaragua</option>
			      <option>Niger</option>
			      <option>Nigeria</option>
			      <option>Niue</option>
			      <option>Norfolk Island</option>
			      <option>Norway</option>
			      <option>Oman</option>
			      <option>Pakistan</option>
			      <option>Palau Island</option>
			      <option>Palestine</option>
			      <option>Panama</option>
			      <option>Papua New Guinea</option>
			      <option>Paraguay</option>
			      <option>Peru</option>
			      <option>Philippines</option>
			      <option>Pitcairn Island</option>
			      <option>Poland</option>
			      <option>Portugal</option>
			      <option>Puerto Rico</option>
			      <option>Qatar</option>
			      <option>Reunion</option>
			      <option>Romania</option>
			      <option>Russia</option>
			      <option>Rwanda</option>
			      <option>Saipan</option>
			      <option>Samoa</option>
			      <option>Samoa American</option>
			      <option>San Marino</option>
			      <option>Sao Tome & Principe</option>
			      <option>Saudi Arabia</option>
			      <option>Senegal</option>
			      <option>Serbia & Montenegro</option>
			      <option>Seychelles</option>
			      <option>Sierra Leone</option>
			      <option>Singapore</option>
			      <option>Slovakia</option>
			      <option>Slovenia</option>
			      <option>Solomon Islands</option>
			      <option>Somalia</option>
			      <option>South Africa</option>
			      <option>Spain</option>
			      <option>Sri Lanka</option>
			      <option>St Barthelemy</option>
			      <option>St Eustatius</option>
			      <option>St Helena</option>
			      <option>St Kitts-Nevis</option>
			      <option>St Lucia</option>
			      <option>St Maarten</option>
			      <option>St Pierre & Miquelon</option>
			      <option>St Vincent & Grenadines</option>
			      <option>Sudan</option>
			      <option>Suriname</option>
			      <option>Swaziland</option>
			      <option>Sweden</option>
			      <option>Switzerland</option>
			      <option>Syria</option>
			      <option>Tahiti</option>
			      <option>Taiwan</option>
			      <option>Tajikistan</option>
			      <option>Tanzania</option>
			      <option>Thailand</option>
			      <option>Togo</option>
			      <option>Tokelau</option>
			      <option>Tonga</option>
			      <option>Trinidad & Tobago</option>
			      <option>Tunisia</option>
			      <option>Turkey</option>
			      <option>Turkmenistan</option>
			      <option>Turks & Caicos Is</option>
			      <option>Tuvalu</option>
			      <option>Uganda</option>
			      <option>Ukraine</option>
			      <option>United Arab Emirates</option>
			      <option>United Kingdom</option>
			      <option>Uruguay</option>
			      <option>USA</option>
			      <option>Uzbekistan</option>
			      <option>Vanuatu</option>
			      <option>Vatican City State</option>
			      <option>Venezuela</option>
			      <option>Vietnam</option>
			      <option>Virgin Islands (Brit)</option>
			      <option>Virgin Islands (USA)</option>
			      <option>Wake Island</option>
			      <option>Wallis & Futana Is</option>
			      <option>Yemen</option>
			      <option>Zaire</option>
			      <option>Zambia</option>
			      <option>Zimbabwe</option>
		      </select>
		    </div>
		    <label for="" class="col-sm-2 control-label"><?php echo (L("state")); ?>:</label>
		    <div class="col-sm-4">
		      <input dataType="*2-10" nullmsg="不能为空" type="text" class="form-control" value="-" name="state" placeholder="<?php echo (L("state")); ?>">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="" class="col-sm-2 control-label"><?php echo (L("city")); ?>:</label>
		    <div class="col-sm-4">
		      <input dataType="*2-10" nullmsg="不能为空" type="text" class="form-control" name="city" value="-" placeholder="<?php echo (L("city")); ?>">
		    </div>
		    <label for="" class="col-sm-2 control-label"><?php echo (L("zip")); ?>:</label>
		    <div class="col-sm-4">
		      <input dataType="*6-10" nullmsg="不能为空" type="text" class="form-control" name="zipcode" value="-" placeholder="<?php echo (L("zip")); ?>">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="" class="col-sm-2 control-label"><?php echo (L("address")); ?>:</label>
		    <div class="col-sm-10">
		      <input dataType="*2-20" nullmsg="不能为空" type="text" class="form-control" name="address" value="-" placeholder="<?php echo (L("address")); ?>">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="" class="col-sm-2 control-label"><?php echo (L("email")); ?>:</label>
		    <div class="col-sm-3">
		      <input dataType="*5-30" nulllmsg="不能为空" type="text" class="form-control" name="email" value="-" placeholder="<?php echo (L("email")); ?>">
		    </div>
		    <label for="" class="col-sm-3 control-label"><?php echo (L("deposit")); ?>:</label>
		    <div class="col-sm-4">
		      <select class="form-control select" name="deposit" id="">
		      	  <option>0</option>
			      <option selected>5000</option>
			      <option>10000</option>
			      <option>50000</option>
		      </select>
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="" class="col-sm-2 control-label"><?php echo (L("group")); ?>:</label>
		    <div class="col-sm-4">
		      <select class="form-control select" name="group" id="">
		      	  <option selected value="1">demoforex</option>
		          <option value="2">demoforex-usd</option>
		          <option value="3">demoforex-eur</option>
		          <option value="4">demoforex-jpy</option>
		      </select>
		    </div>
		    <label for="" class="col-sm-2 control-label"><?php echo (L("leverage")); ?>:</label>
		    <div class="col-sm-4">
		      <select class="form-control select" name="leverage" id="">
		      	  <option selected>50</option>
			      <option>100</option>
			      <option>200</option>
			      <option>400</option>
		      </select>
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="" class="col-sm-2 control-label"><?php echo (L("phone")); ?>:</label>
		    <div class="col-sm-4">
		      <input dataType="n2-20" nullmsg="不能为空" type="text" class="form-control" name="phone" placeholder="<?php echo (L("phone")); ?>">
		    </div>
		    <label for="" class="col-sm-2 control-label"><?php echo (L("phonepassword")); ?>:</label>
		    <div class="col-sm-4">
		      <input dataType="*2-20" nullmsg="不能为空" type="password" class="form-control" name="phonepassword" placeholder="">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="" class="col-sm-2 control-label"><?php echo (L("password")); ?>:</label>
		    <div class="col-sm-4">
		      <input name="password" datatype="*6-15" errormsg="密码范围在6~15位之间！" type="password" class="form-control" id="" placeholder="">
		    </div>
		    <label for="" class="col-sm-2 control-label"><?php echo (L("confirmpassword")); ?>:</label>
		    <div class="col-sm-4">
		      <input datatype="*" recheck="password" errormsg="您两次输入的账号密码不一致！" type="password" class="form-control" name="cpassword" placeholder="">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="" class="col-sm-2 control-label"><input id="sendmail" name="sendreport" type="checkbox"></label>
		    <div class="col-sm-10">
		    	<label for="sendmail" class="col-sm-5" style="line-height:37px;">
		      		<?php echo (L("sendreports")); ?>
		      	</label>
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="" class="col-sm-3 control-label"><?php echo (L("vcode")); ?>:</label>
		    <div class="col-sm-3">
		      <img class="verifyimg reloadverify" alt="点击切换" src="<?php echo U('verify');?>" style="cursor:pointer;">
		    </div>
		    <div class="col-sm-4">
		      <input dataType="*2-20" nullmsg="不能为空" type="text" class="form-control" name="vcode" placeholder="<?php echo (L("vcode")); ?>">
		    </div>
		  </div>
		  <div class="form-group" style="margin-top:40px;">
		    <div class="col-sm-offset-3 col-sm-2">
		      <button type="submit" id="btn_sub" class="btn btn-info radius btn-lg col-sm-12"><?php echo (L("register")); ?></button>
		    </div>
		    <div class="col-sm-offset-2 col-sm-2">
		      <a href="<?php echo U('index');?>" class="btn btn-danger radius btn-lg col-sm-12"><?php echo (L("cancel")); ?></a>
		    </div>
		  </div>
		</form>
	</div>
</body>
<script type="text/javascript" src="/Public/Binary/Js/reg.js"></script>
<script>
var url = "<?php echo U('changeLanguage');?>";
new Reg();
	
</script>
</html>