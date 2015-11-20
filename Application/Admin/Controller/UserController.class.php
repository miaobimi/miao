<?php

namespace Admin\Controller;
use Think\Controller;
class UserController extends CommonController {

    Public function index(){
			
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
		$Page = new \Think\Page($count,4);
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

    	if(!IS_POST){

    		$this->display();
    	}else{
    		
    		$data = array(
    			'username' => I('username'),
                'password' => I('password','','md5'),
    			'sex' => I('sex'),
    			'email' => I('email'),
    			'last_login_ip' => get_client_ip(),
    			'status' => 1
    		);

    		$userModel = M('user');
    		if($uid = $userModel->add($data)){
    			$this->success('添加管理员成功');
    		}else{
    			$this->error($userModel->getDbError());
    		}
    	}
    	
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

    Public function del(){
        if(IS_AJAX){
            $uid = I('uid');
            $user = D('UserRelation');
            if($user->relation(true)->where(array('uid'=>array('IN',$uid)))->delete()){
                $this->success('删除成功');
            }else{
                $this->error('删除失败');
            }
        }
    }

}