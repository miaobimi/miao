<?php
/**
 * author miaobimi
 * 2015-3-21
 *
 * 我答答微信类
 */

namespace Com;

class WddWechatAuth {

    /**
     * 我答答 token
     * @var string
     */
    private $token = '';


    /**
     * 微信api根路径
     * @var string
     */
    private $apiURL    = 'http://api.wxshop.wddcn.com/';

    

    /**
     * 构造方法，调用微信高级接口时实例化SDK
     * @param string $appid  微信appid
     * @param string $secret 微信appsecret
     * @param string $token  获取到的access_token
     */
    public function __construct($token = null){
        if(!is_null($token)){
            $this->token   = $token;
        } else {
            throw new \Exception('参数错误！');
        }
    }


    /**
     * 获取会员列表
     * @param  [array] $params [参数]
     * $params=array(
     *     'fields' => '', //为空默认取所有字段
     *     'page_size' => 40
     *     'page_no' => 1
     * )
     * @return [type]         [description]
     */
    Public function getVipList($params){
        return $this->http('get.vip.list',$params);
    }

    /**
     * 获取会员参数
     * @param  [type] $params [description]
     * $params=array(
     *     'id' => //会员id必须
     *     'fields' => ,
     *     'page_size' => 40,
     *     'page_no' => 1
     * )
     * @return [type]         [description]
     */
    Public function getVipItem($params){
        if(!isset($params['id']) || empty($params['id'])){
            throw new \Exception('会员id必须');
            
        }
        return $this->http('get.vip.item',$params);
    }

    /**
     * 发送HTTP请求方法，目前只支持CURL发送请求
     * @param  string $api    请求api
     * @param  array  $param  GET参数数组
     * @param  array  $data   POST的数据，GET请求时该参数无效
     * @param  string $method 请求方法GET/POST
     * @return array          响应数据
     */
    Protected function http($api, $param, $data = '', $method = 'GET'){
        $url = $this->apiURL.$this->token.'/api?method='.$api;


        $opts = array(
            CURLOPT_TIMEOUT        => 30,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
        );

        /* 根据请求类型设置特定参数 */
        $opts[CURLOPT_URL] = $url . '&' . http_build_query($param);
        if(strtoupper($method) == 'POST'){
            $opts[CURLOPT_POST] = 1;
            $opts[CURLOPT_POSTFIELDS] = $data;
            
            if(is_string($data)){ //发送JSON数据
                $opts[CURLOPT_HTTPHEADER] = array(
                    'Content-Type: application/json; charset=utf-8',  
                    'Content-Length: ' . strlen($data),
                );
            }
        }

        /* 初始化并执行curl请求 */
        $ch = curl_init();
        curl_setopt_array($ch, $opts);
        $data  = curl_exec($ch);
        $error = curl_error($ch);
        curl_close($ch);

        //发生错误，抛出异常
        if($error) throw new \Exception('请求发生错误：' . $error);

        $data = json_decode(json_encode(simplexml_load_string($data)),true);
        return  $data;
    }

    

}
