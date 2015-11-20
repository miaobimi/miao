<?php
namespace Wechat\Controller;
use Think\Controller;
class CommonController extends Controller {

    Protected $token;
    Protected $appid;
    Protected $secret;

	Public function _initialize(){

        $this->token = S('token');
        $this->appid = C('APPID');
        $this->secret = C('SECRET');
        // unset($this->token);

		if (empty($this->token) || !isset($this->token)) {
            $this->getToken();
        }
	}


    /**
     * 获取token
     * @return [type] [description]
     */
    Protected function getToken(){

        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$this->appid&secret=$this->secret";
        $res = json_decode(httpGet($url));
        $access_token = $res->access_token;

        if ($access_token) {
            $this->token = $access_token;
            S('token',$access_token,7000);
        }
    }
}