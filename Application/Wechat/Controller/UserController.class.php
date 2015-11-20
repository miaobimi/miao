<?php
namespace Wechat\Controller;
use Think\Controller;
use Com\Wechat;
use Com\WechatAuth;
class UserController extends CommonController {

	Public function index(){

		$url = "https://api.weixin.qq.com/cgi-bin/user/get?access_token=$this->token";
                $res = json_decode(httpGet($url),true);
                $list = array();
                if($res['total']>0){
                	foreach ($res['data']['openid'] as $k=>$v) {
                		$list[$k] = $this->userInfo($v);
                	}
                }
                $this->list = $list;
		$this->display();
	}

	Public function userInfo($openid){
		$url = "https://api.weixin.qq.com/cgi-bin/user/info?access_token=$this->token&openid=$openid&lang=zh_CN";
                $res = json_decode(httpGet($url),true);
                return $res;
	}
}


?>