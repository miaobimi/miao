<?php
namespace Wechat\Controller;
use Think\Controller;
use Com\Wechat;
use Com\WechatAuth;
class IndexController extends CommonController {
    
//http://1.miaoapp.sinaapp.com/
//https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=wx4b830a84774a1912&secret=ee95cdc4d917486e4f30e5a2ebac96aa 
   

    /**
     * 你可以在这里分析数据，决定要返回给用户什么样的信息
     * 接受到的信息类型有9种，分别使用下面九个常量标识
     * Wechat::MSG_TYPE_TEXT       //文本消息
     * Wechat::MSG_TYPE_IMAGE      //图片消息
     * Wechat::MSG_TYPE_VOICE      //音频消息
     * Wechat::MSG_TYPE_VIDEO      //视频消息
     * Wechat::MSG_TYPE_MUSIC      //音乐消息
     * Wechat::MSG_TYPE_NEWS       //图文消息（推送过来的应该不存在这种类型，但是可以给用户回复该类型消息）
     * Wechat::MSG_TYPE_LOCATION   //位置消息
     * Wechat::MSG_TYPE_LINK       //连接消息
     * Wechat::MSG_TYPE_EVENT      //事件消息
     *
     * 事件消息又分为下面五种
     * Wechat::MSG_EVENT_SUBSCRIBE          //订阅
     * Wechat::MSG_EVENT_SCAN               //二维码扫描
     * Wechat::MSG_EVENT_LOCATION           //报告位置
     * Wechat::MSG_EVENT_CLICK              //菜单点击
     * Wechat::MSG_EVENT_MASSSENDJOBFINISH  //群发消息成功
     */
    /**
     * 响应当前请求还有以下方法可以只使用
     * 具体参数格式说明请参考文档
     * 
     * $wechat->replyText($text); //回复文本消息
     * $wechat->replyImage($media_id); //回复图片消息
     * $wechat->replyVoice($media_id); //回复音频消息
     * $wechat->replyVideo($media_id, $title, $discription); //回复视频消息
     * $wechat->replyMusic($title, $discription, $musicurl, $hqmusicurl, $thumb_media_id); //回复音乐消息
     * $wechat->replyNews($news, $news1, $news2, $news3); //回复多条图文消息
     * $wechat->replyNewsOnce($title, $discription, $url, $picurl); //回复单条图文消息
     * 
     */
    Public function index($id = ''){

        /* 加载微信SDK */
        $wechat = new Wechat('miaobimi');
        $wechatAuth = new WechatAuth($this->appid,$this->secret,$this->token);


        /* 获取请求信息 */
        $data = $wechat->request();

        if($data && is_array($data)){


           // $wechat->response($wechatAuth->test($this->token), 'text');

            switch ($data['MsgType']) {
                case wechat::MSG_TYPE_TEXT : 
                    $content = 'this is text'; 
                    $type    = 'text'; 
                    break;
                case wechat::MSG_TYPE_IMAGE : 
                    $content = 'this is image'; 
                    $type    = 'text'; 
                    break;
                case wechat::MSG_TYPE_VOICE : 
                    $content = 'this is voice'; 
                    $type    = 'text'; 
                    break;
                case wechat::MSG_TYPE_VIDEO : 
                    $content = 'this is video'; 
                    $type    = 'text'; 
                    break;
                case wechat::MSG_TYPE_MUSIC : 
                    $content = 'this is music'; 
                    $type    = 'text'; 
                    break;
                case wechat::MSG_TYPE_NEWS : 
                    $content = 'this is NEWS'; 
                    $type    = 'text'; 
                    break;
                case wechat::MSG_TYPE_LOCATION : 
                    $content = 'this is location'; 
                    $type    = 'text'; 
                    break;
                case wechat::MSG_TYPE_LINK : 
                    $content = 'this is link'; 
                    $type    = 'text'; 
                    break;
                case wechat::MSG_TYPE_EVENT : 
                    $content = 'this is event'; 
                    $type    = 'text'; 
                    break;
                default:
                    # code...
                    break;
            }
            $wechat->response($content, $type);
        }else{
            p(111111111);
        }
    }

//====================================================================


    function simplest_xml_to_array($xmlstring) {
        return json_decode(json_encode((array) simplexml_load_string($xmlstring)), true);
    }

}