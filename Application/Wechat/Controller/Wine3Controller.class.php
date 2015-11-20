<?php
namespace Wechat\Controller;
use Think\Controller;
use Com\Wechat;
use Com\WechatAuth;
class Wine3Controller extends Controller {
    

    Public function index(){
        $APPSECRET = '0c3b20a05dbeddc9bbd5282ce836fe30';
        $APPID = 'wxd249c6a47e28062d';

        $wechatAuth = new WechatAuth($APPID,$APPSECRET);

        $token = json_decode($wechatAuth->getAccessToken(),true);

        $result = $wechatAuth->userInfo('oZaa9jjhcP_ucL-_It2gXGGFLNPc');
        p($result);
    }

    function simplest_xml_to_array($xmlstring) {
        return json_decode(json_encode((array) simplexml_load_string($xmlstring)), true);
    }

}