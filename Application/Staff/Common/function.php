<?php 

/**
  * 检查权限
  * @param name string|array  需要验证的规则列表,支持逗号分隔的权限规则或索引数组
  * @param uid  int           认证用户的id
  * @param string mode        执行check的模式
  * @param relation string    如果为 'or' 表示满足任一条规则即通过验证;如果为 'and'则表示需满足所有规则才能通过验证
  * @return boolean           通过验证返回true;失败返回false
 */
function authcheck($name, $uid, $type=1, $mode='url', $relation='or'){

	if(session('uname') == C('ADMIN_AUTH_KEY')){ 
    	return true;
    }else{
    	$auth=new \Think\Auth();
    	return $auth->check($name, $uid, $type, $mode, $relation)?true:false;
    	
    }
}

/**
 * 自动登录加密函数
 * @param  [string]  $value [要加密的值]
 * @param  integer $type  [$type：0 加密  1 解密]
 * @return [string]         [加密或者解密后的字符串]
 */
function encryption($value , $type = 0){

	$key = md5(C('ENCRYPTION_KEY'));
	if(!$type){
		return str_replace('=', '', base64_encode($value ^ $key));
	}

	$value = base64_decode($value);
	return $value ^ $key;
}

/**
 * 获取星期
 * @param  [type] $num [description]
 * @return [type]      [description]
 */
function getWeek($num){
  switch ($num) {
    case 0:
      return '<span style="color:red">星期日</span>';
      break;
    case 1:
      return '星期一';
      break;
    case 2:
      return '星期二';
      break;
    case 3:
      return '星期三';
      break;
    case 4:
      return '星期四';
      break;
    case 5:
      return '星期五';
      break;
    case 6:
      return '星期六';
      break;
  }
}


 ?>