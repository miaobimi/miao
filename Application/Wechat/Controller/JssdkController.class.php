<?php
namespace Wechat\Controller;
use Think\Controller;
class JssdkController extends CommonController {
    
    Public function index(){

        $result = $this->getSignPackage();
        $this->result = $result;
        $this->display();
    }

    Public function getSignPackage() {
        $jsapiTicket = $this->getJsApiTicket();

        // 注意 URL 一定要动态获取，不能 hardcode.
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        $url = "$protocol$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        $timestamp = time();
        $nonceStr = $this->createNonceStr();

        // 这里参数的顺序要按照 key 值 ASCII 码升序排序
        $string = "jsapi_ticket=$jsapiTicket&noncestr=$nonceStr&timestamp=$timestamp&url=$url";

        $signature = sha1($string);

        $signPackage = array(
          "appId"     => $this->appid,
          "nonceStr"  => $nonceStr,
          "timestamp" => $timestamp,
          "url"       => $url,
          "signature" => $signature,
          "rawString" => $string
        );
        return $signPackage; 
    }

    Private function createNonceStr($length = 16) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $str = "";
        for ($i = 0; $i < $length; $i++) {
          $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
        }
        return $str;
    }

    Private function getJsApiTicket() {
        $ticket = S('ticket');

        if (empty($ticket) || !isset($ticket)) {
          $url = "https://api.weixin.qq.com/cgi-bin/ticket/getticket?type=jsapi&access_token=$this->token";
          $res = json_decode(httpGet($url));

          $ticket = $res->ticket;

          if ($ticket) {
            S('ticket',$ticket,7000);
          }else{
            if($res->errmsg == 'access_token expired'){
              $this->getToken();
              S('ticket','');
            }
            $this->getJsApiTicket();
          }
        }

        return $ticket;
    }


}
?>