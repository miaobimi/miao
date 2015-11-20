<?php
namespace Wechat\Controller;
use Think\Controller;
use Com\WddWechatAuth;
class WddController extends Controller {

	Public function index(){
        
        $token = '244b04af9d5846d896dde2a6019405d1';

        $wdd = new WddWechatAuth($token);

        $params['id'] = 574000;
        $result = $wdd->getVipItem($params);
        
        p($result);

        
	}
}