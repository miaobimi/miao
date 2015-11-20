<?php
namespace Wechat\Controller;
use Think\Controller;
use Com\Wechat;
use Com\WechatAuth;
class GroupController extends CommonController {

        Public function index(){

                $url = "https://api.weixin.qq.com/cgi-bin/groups/get?access_token=$this->token";
                $res = json_decode(httpGet($url),true);
                if(is_array($res['groups'])){
                        $this->list = $res['groups'];
                }
                $this->display();
        }
}


?>