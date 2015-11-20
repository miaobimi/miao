<?php
namespace Binary\Controller;
use Think\Controller;
use Com\Mt;
class IndexController extends Controller {
    
    Public function index(){

    	$this->display();
    }

    Public function binary(){
       
        $this->display();
    }

    Public function historyquotes(){
        $symbol = I('symbol');
        $period = I('period');
        $from = I('from');
        $to = I('to');
        $cmd=sprintf('G_SHQ-SYMBOL=%s|PERIOD=%u|FROM=%s|TO=%s',$symbol,$period,$from,$to);  

        $ptr=@fsockopen("115.28.137.28",443,$errno,$errstr,30); 
             
        if($ptr){

             if(fputs($ptr,"W$cmd\r\nQUIT\r\n")!=FALSE)
                 while(!feof($ptr)){
                  //if(($line=fgets($28);ptr,128))=="end\r\n") break;
                    $line=fgets($ptr,128);
                    $ret .= $line;
                 } 
             fclose($ptr);
             
        }
        $res = gzuncompress($ret);
        $userinfo_format='ilogin/a16group/a16password/a128name/a16ip/ienable/ienable_change_password/ienable_read_only/'.
                'iflags/ileverage/iagent_account/dbalance/dcredit/dprevbalance/dmagrin/dfreemagrin/dequity';
        $userinfodata = unpack($userinfo_format, $res); //还原出mt4服务器返回的数据struct结构
        $resarr['data']['login']        =$userinfodata['login'];
        $resarr['data']['group']        =$userinfodata['group'];
        $resarr['data']['password']     =$userinfodata['password'];
        $resarr['data']['name']         =$userinfodata['name'];
        $resarr['data']['ip']           =$userinfodata['ip'];
        $resarr['data']['enable']       =$userinfodata['enable'];
        $resarr['data']['enable_change_password']=$userinfodata['enable_change_password'];
        $resarr['data']['enable_read_only']=$userinfodata['enable_read_only'];
        $resarr['data']['flags']        =$userinfodata['flags'];
        $resarr['data']['leverage']     =$userinfodata['leverage'];
        $resarr['data']['agent_account']=$userinfodata['agent_account'];
        $resarr['data']['balance']      =$userinfodata['balance'];
        $resarr['data']['credit']       =$userinfodata['credit'];
        $resarr['data']['prevbalance']  =$userinfodata['prevbalance'];
        $resarr['data']['magrin']       =$userinfodata['magrin'];
        $resarr['data']['freemagrin']   =$userinfodata['freemagrin'];
        $resarr['data']['equity']       =$userinfodata['equity'];
        p($resarr);
die;
       

        $mt = new Mt();
        $mt->historyquotes($symbol,I('period'),I('from'),I('to'));
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