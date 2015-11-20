<?php

namespace Staff\Controller;
use Think\Controller;
class UserController extends CommonController {

    Public function index(){
        $uid=I('uid','','intval');
        if($uid>0){
            $user=M('user')->join('m_userinfo ON m_user.uid=m_userinfo.uid')->
            where(array('m_user.uid' => $uid))->find();
            $this->assign('user',$user); 
        }
         $list1 = M('auth_group')->field('id,title')->select();
         $this->assign('list1',$list1);
         $this->display();
    }

    Public function lists(){

		$db = D('UserRelation');
        $gid = I('gid',0,'intval');
        if($gid > 0){
            $uids = M('authGroupAccess')->where(array('group_id'=>$gid))->getField('uid',true);
            if(is_array($uids) && count($uids)>0){
                $uids = implode(',',$uids);
                $where = array('uid'=>array('IN',$uids));
            }else{
                $where = "1=0";
            }
        }

		$count= $db->where($where)->count();
		$Page = new \Think\Page($count,10);
		$Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
		$show = $Page->show();
		$result = $db->relation(true)->where($where)->order('uid DESC')->limit($Page->firstRow.','.$Page->listRows)->select();

        $this->group = M('auth_group')->field('title,id')->select();
		$this->assign('list',$result);
		$this->assign('page',$show);
		
		$this->display();
    }


    /**
     * 新增管理员
     */
    Public function addUser(){

		$user =array(
            'number' => I('number',0,'intval'),
            'username' => I('username'),
            'nickname' => I('nickname'),
            //'password' => md5(88888888),
            'sex' => I('sex'),
            'email' => I('email'),
            'mobile' => I('mobile'),
            'qq' => I('qq'),
            'last_login_time' => time(),
            'last_login_ip' => get_client_ip(),
            'status' => 1
        );
		$userinfo = array(
            //userinfo表
            'marriage' =>I('marriage'),
            'identity' =>I('identity'),
            'birth' =>strtotime(preg_replace('/\//is','-',I('birth',0))),
            'address' =>I('address'),
            'households' =>I('households'),
            'platform' =>I('platform'),
            'stay' =>I('stay',0,'intval'),
            'entry' =>strtotime(preg_replace('/\//is','-',I('entry',0))),
            'quit' =>strtotime(preg_replace('/\//is','-',I('quit',0))),
            'contract' => I('contract'),
            'startcon' =>strtotime(preg_replace('/\//is','-',I('startcon',0))),
            'endcon' =>strtotime(preg_replace('/\//is','-',I('endcon',0))),
            'starttrial' =>strtotime(preg_replace('/\//is','-',I('starttrial',0))),
            'endtrial' =>strtotime(preg_replace('/\//is','-',I('endtrial',0)))
        );
        p($user);die;
        $userModel = M('user');
        if($userinfo['uid'] = $userModel->add($user)){
            $userinfoModel = M('userinfo');
            if($userinfoModel->add($userinfo)){
                $result=array('status' => 1,'info' => '成功添加用户');
            }else{
                $result=array('status' => 0,"info" => $userinfoModel->getError());
            }
            
        }else{
            $result=array('status' => 0,"info" => $userModel->getError());
        }
        $this->ajaxReturn($result);
    	
    }
    Public function updateUser(){
        $user =array(
            'number' => I('number',0,'intval'),
            'username' => I('username'),
            'nickname' => I('nickname'),
            //'password' => md5(88888888),
            'sex' => I('sex'),
            'email' => I('email'),
            'mobile' => I('mobile'),
            'qq' => I('qq'),
            'last_login_time' => time(),
            'last_login_ip' => get_client_ip(),
        );
        $userinfo = array(
            //userinfo表
            'marriage' =>I('marriage'),
            'identity' =>I('identity'),
            'birth' =>strtotime(preg_replace('/\//is','-',I('birth',0))),
            'address' =>I('address'),
            'households' =>I('households'),
            'platform' =>I('platform'),
            'stay' =>I('stay',0,'intval'),
            'entry' =>strtotime(preg_replace('/\//is','-',I('entry',0))),
            'quit' =>strtotime(preg_replace('/\//is','-',I('quit',0))),
            'contract' => I('contract'),
            'startcon' =>strtotime(preg_replace('/\//is','-',I('startcon',0))),
            'endcon' =>strtotime(preg_replace('/\//is','-',I('endcon',0))),
            'starttrial' =>strtotime(preg_replace('/\//is','-',I('starttrial',0))),
            'endtrial' =>strtotime(preg_replace('/\//is','-',I('endtrial',0)))
        );
        /*$UserinfoRelation=D('UserinfoRelation');
        $data['id']=14;
        $data['marriage']=I('marriage');
        $data['identity']=I('identity');
        $data['platform']=I('platform');
        $data['contract']=I('contract');
        $data['User']=array(
                        'uid' => 10,
                        'number' => I('number',0,'intval'),
                        'username' => I('username'),
                        'nickname' => I('nickname'),
                        //'password' => md5(88888888),
                        'sex' => I('sex'),
                        'email' => I('email'),
                        'mobile' => I('mobile'),
                        'qq' => I('qq'),
                        'last_login_time' => time(),
                        'last_login_ip' => get_client_ip(),
                    );
       $result = $UserinfoRelation->where("id=14")-> relation(true)->save($data);*/
        $uid=session('uid');
        $userinfoM = M("userinfo");
        $userM = M("user");
        $num1 = $userinfoM->where(array('uid' => $uid))->save($userinfo);
        $num2 = $userM->where(array('uid' => $uid))->save($user);
        if($num1===false && $num2===false){
            $result=array('status' => 0,'info' => '修改出错');
        }
        $result=array('status' => 1,'info' => '修改成功');
        $this->ajaxReturn($result);
    }

    /**
     * 禁止/启用管理员
     * @return [type] [description]
     */
    Public function deny(){

        $status = I('status',0,'intval');
        if(is_array($_POST['uid']) && count($_POST['uid']) > 0){
            $uid = implode(',',$_POST['uid']);
            $data = array('status'=>0);

            if(M('user')->where(array('uid'=>array('IN',$uid)))->save($data)){
               
                $this->success('更改成功','ajax');
            }else{
                $this->error('更改失败','ajax');
            }
        }else{
            $uid = I('uid',0,'intval');
            if($uid > 0){
                if(M('user')->where("uid={$uid}")->setField('status',$status)){
                   
                    $this->success('更改成功','ajax');
                }else{
                    $this->error('更改失败','ajax');
                }
            }else{
                $this->error('您没有选中管理员','ajax');
            }
        }
        
    }

    /*Public function del(){
        if(IS_AJAX){
            $uid = I('uid');
            $user = D('UserRelation');
            if($user->relation(true)->where(array('uid'=>array('IN',$uid)))->delete()){
                $result=array('status' => 1,'info' => '删除成功');
            }else{
                $result=array('status' => 0,'info' => '删除失败');
            }
            $this->ajaxReturn($result);
        }
    }*/

}