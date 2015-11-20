<?php
namespace Wechat\Controller;
use Think\Controller;
use Com\Wechat;
use Com\WechatAuth;
class MenuController extends CommonController {

	Public function index(){

		$url = "https://api.weixin.qq.com/cgi-bin/menu/get?access_token=$this->token";
        $res = json_decode(httpGet($url),true);
        if(is_array($res['menu']['button'])){
        	$this->list = $res['menu']['button'];
        }
		$this->display();
	}

	Public function create(){
		$url = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=$this->token";
		$params = '{
		    "button":[
		        {	
		          "type":"view",
		          "name":"二元期权",
		          "url":"http://test.chntz.cn/"
		        },
		        {
		           "name":"菜单1",
		           "sub_button":[
		            {	
		                "type":"click",
			            "name":"点击事件",
			            "key":"V1001_TODAY_MUSIC"
		            },
		            {
		            	"name": "扫码推事件", 
		                "type": "scancode_push",
	                    "key": "rselfmenu_0_1"
		            },
		            {
		            	"name": "扫码推弹提示框", 
		                "type": "scancode_waitmsg",
	                    "key": "rselfmenu_0_1"
		            },
		            {
		            	"name": "系统拍照发图", 
		                "type": "pic_sysphoto",
	                    "key": "rselfmenu_1_0"
		            },
		            {
		            	"name": "拍照或者相册发图", 
		                "type": "pic_photo_or_album",
	                    "key": "rselfmenu_1_1"
		            }]
		        },
		        {
		           "name":"菜单2",
		           "sub_button":[
		            {
		            	"type": "pic_weixin", 
	                    "name": "微信相册发图", 
	                    "key": "rselfmenu_1_2"
		            },
		            {
		            	"name": "发送位置", 
			            "type": "location_select", 
			            "key": "rselfmenu_2_0"
		            }]
		        }]
		}';

        $res = json_decode(httpsRequest($url,$params),true);
        p($res);
		// $this->display();
	}

	Public function del(){

		$url = "https://api.weixin.qq.com/cgi-bin/menu/delete?access_token=$this->token";
        $res = json_decode(httpGet($url),true);
        p($res);
	}
}


?>