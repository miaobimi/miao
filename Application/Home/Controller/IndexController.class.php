<?php
namespace Home\Controller;
use Think\Controller;
use Com\Mt;
class IndexController extends CommonController {
    
    Public function index(){
        if(isMobile()){
            $this->redirect('M/Index/index');
        }
    	$this->display();
    }

    Public function reg(){
        if(IS_POST){
            // p($_POST);die;
            $mt = new Mt();
            $mt->createAccount($_POST);

        }else{
           $this->display(); 
        }
    	
    }

    Public function lan(){
    	cookie('think_language','en-us');
    	echo L('regtext');die;
    }


    /**
     * 异步切换语言
     * @return [type] [description]
     */
    Public function changeLanguage(){

    	if(IS_AJAX){
    		if(!empty($_POST['lan']) && $_POST['lan']){
    			cookie('think_language',$_POST['lan']);
    			$this->success('success');
    		}
    	}
    }

    /**
    **  验证码
    **/
    Public function verify(){
        $config =    array(
            'fontSize'    =>    14,    // 验证码字体大小
            'length'      =>    4,     // 验证码位数
            'imageW'      =>    135,
            'imageH'      =>    34,
        );
        $Verify = new \Think\Verify($config);
        $Verify->fontttf = '5.ttf';
        $Verify->useImgBg = true; 
        $Verify->entry();
    }
}