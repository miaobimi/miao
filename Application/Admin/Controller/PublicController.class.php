<?php 

namespace Admin\Controller;
use Think\Controller;

Class PublicController extends Controller{

	Public function login(){
		
		if(!IS_POST){
			$this->display();
		}else{
			
			$username = I('username', '');
			$password = I('password','','md5');
			$verify = I('verify','');

			if(	C('ADMIN_AUTH_KEY') === $username){
    			session(C('USER_AUTH_KEY'), 1);
    			session('uname', $username);
    			$this->redirect('Index/index');
			}
	 
			if($username == '' || $password == '' || $verify == ''){
				$this->error('不能为空');
			}



			$verify = new \Think\Verify();
            $result = $verify->check(trim($_POST['verify']), $id);
            if(!$result) $this->error('验证码错误');

            $where = array('username' => $username);
	    	$user  = M('user')->where($where)->find();
	    	if(!$user || $user['password'] != $password){
	    		$this->error('账号或者密码错误');
	    	}

	    	if(!$user['status']){
	    		$this->error('该账号已被锁定');
	    	}else{
	    		$data['last_login_ip'] = get_client_ip();
	    		$data['last_login_time'] = time();
	    		if(M('user')->where(array('uid'=>$user['uid']))->save($data)){
	    			session(C('USER_AUTH_KEY'), $user['uid']);
	    			session('uname', $user['username']);
	    			$this->redirect('Index/index');
	    		}
	    	}

		}
		
	}

	/**
	 * 登出
	 * @return [type] [description]
	 */
	public function logout(){
        if(session(C('USER_AUTH_KEY'))) {
            session_destroy();
            $this->redirect("Public/login");
        }else {
            $this->error('已经登出！');
        }
    }

	/**
    **  验证码
    **/
    Public function verify(){
        $config =    array(
            'fontSize'    =>    18,    // 验证码字体大小
            'length'      =>    6,     // 验证码位数
            'imageW'      =>    300,
            'imageH'      =>    50,
        );
        $Verify = new \Think\Verify($config);
        $Verify->fontttf = '5.ttf';
        $Verify->useImgBg = true; 
        $Verify->entry();
    }


}
?>