<?php 

namespace Staff\Controller;
use Think\Controller;

Class CommonController extends Controller{

	Public function _initialize(){
		
		$uid = $_SESSION[C('SESSION_PREFIX')][C('USER_AUTH_KEY')];

		//判断是否有uid
		if(!isset($uid)){
			$this->redirect("Public/login");
		}

		$auth = new \Think\Auth();
		$module_name = MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME;

		if(session('uname') == C('ADMIN_AUTH_KEY')){  //判断是否为超级管理员
			return true;
		}
		// $list = $auth->getGroups($uid);
		// p($list);die;
		if(!$auth->check($module_name, $uid)){
			$this->error('您没有权限');
		}
	}

	

}

?>