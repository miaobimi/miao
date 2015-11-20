<?php
namespace Staff\Controller;
use Think\Controller;
class PublicController extends Controller {
    
    Public function login(){
		
		if(!IS_POST){
			
			$this->display();
		}else{
			
			$username = I('username', '');
			$password = I('password','','md5');
	 
			if($username == '' || $password == ''){
				$this->error('不能为空');
			}

			if(	C('ADMIN_AUTH_KEY') === $username){
    			session(C('USER_AUTH_KEY'), 1);
    			session('uname', $username);
    			$this->redirect('Index/index');
			}
			
            $where = array('username' => $username);
	    	$user  = M('user')->where($where)->find();
	    	if(!$user || $user['password'] != $password){
	    		$this->error('账号或者密码错误');
	    	}

	    	if(!$user['status']){
	    		$this->error('该账号已被锁定');
	    	}else{
	    		session('uid', $user['uid']);
	    		session('uname', $user['username']);
	    		$this->redirect('Staff/Index/index');
	    	}

		}
		
	}

	/**
	 * 注册
	 * @return [type] [description]
	 */
    Public function register(){

    	if(IS_POST){

    	}else{
    		$this->display();
    	}
    }
    Public function changepwd(){
    	$password = I('oldpassword','','md5');
    	$newpassword=I('password2','','md5');
    	$uid = (int)session('uid');
    	$user=M('user');
    	$data=$user->where("uid=$uid")->find(); 
    	//dump($data) ;die; 
    	if($data){
	    	if($password!=$data['password']) {
	    		$data = array('status'=>0,'info'=>'旧密码错误');
	    		$this->ajaxReturn($data);
	    		
	    	}else{
	    		$user->where("uid=$uid")->setField('password',$newpassword);
	    		$data = array('status'=>1,'info'=>'密码修改成功');
	    		$this->ajaxReturn($data);

	    	}
	    }
    		
    }
    Public function checkpwd(){
    	$password = I('oldpassword','','md5');
    	$uid = (int)session('uid');
    	$user=M('user');
    	$data=$user->where("uid=$uid")->find(); 
    	if($data){
	    	if($password!=$data['password']) {
	    		echo "false";
	    	}else{echo "true";}
	    }
    }

}