<?php

namespace Staff\Controller;
use Think\Controller;
class AuthController extends CommonController {

    /**
     * 角色列表
     * @return [type] [description]
     */
    Public function index(){

		$db = M('auth_group');

		$count= $db->where($where)->count();
		$Page = new \Think\Page($count,10);
		
		$show = $Page->show();
		$result = $db->where($where)->field($field)->limit($Page->firstRow.','.$Page->listRows)->select();

		$this->assign('list',$result);
		$this->assign('page',$show);
		
		$this->display();
    }



    /**
     * 添加角色
     */
    Public function addRole(){

        if(!IS_POST){
             $this->display();
         }else{

            $data = array(
                'title' => I('title','','trim'),
                'description' => I('description'),
                'status' => I('status', 0, 'intval')
            );

            if(M('auth_group')->where(array('title'=>$data['title']))->find()){
                $this->error('该角色已经存在，请重新输入');
            }

            if(M('auth_group')->add($data)){
                $this->success('添加角色成功');
            }else{
                $this->error('添加角色失败');
            }
         }
       
    }

    /**
     * 编辑角色
     */
    Public function editRole(){

        if(!IS_POST){

            $result = M('auth_group')->field('id,title,description')->find(I('gid'));
            $this->result = $result;
            $this->display();
         }else{

            $data = array(
                'id' => I('gid',0,'intval'),
                'title' => I('title','','trim'),
                'description' => I('description')
            );
    
            if($data['id']>0){
                $auth_group = M('auth_group');
                if($auth_group->where(array('title'=>$data['title']))->count()){
                    $this->error('该角色已经存在，请重新输入');
                }

                if($auth_group->save($data)){
                    $this->success('修改角色成功');
                }else{
                    $this->error('修改角色失败');
                }
            }
            
         }
       
    }


    /**
     * 改变角色状态
     * @return [type] [description]
     */
    Public function changeRoleStatus(){
        if(IS_AJAX){
            $id = I('id',0,'intval');
            $status = I('status',1,'intval');
            if($id> 0){
                if(M('auth_group')->where(array('id'=>$id))->setField('status',$status)){
                    $this->success('操作成功');
                }else{
                    $this->error('操作失败');
                }
            }
        }
    }

    /**
     * 节点列表
     * @return [type] [description]
     */
    Public function node(){

        $nodeModel = M('auth_rule');
        $group = M('auth_group')->select();
        $modules = M('modules')->select();

        foreach ($modules as $k => $v) {
            $modules[$k]['children'] = $nodeModel->where(array('mid'=>$v['id']))->select();
        }

        foreach ($group as $k => $v) {
            if($v['id'] == I('gid',1,'intval')){
                $access = $v['rules'];
            }
        }
        // p($access);die;
        //$this->moduless = M('Modules')->select();
        // p($modules);die;
        $this->access = explode(',', $access);
        $this->group = $group;
        $this->modules = $modules;
        $this->display();
    }

    /**
     * 添加节点
     */
    Public function addNode(){

        if(!IS_POST){
            $this->modules = M('modules')->select();
            $this->display();
         }else{

            $data = array(
                'name' => I('name','','trim'),
                'title' => I('title','','trim'),
                'status' => I('status', 0, 'intval'),
                'condition' => I('condition', '', 'trim'),
                'type' => I('type', 1, 'intval'),
                'mid' => I('modules_id', 0, 'intval')
            );

            if(M('auth_rule')->add($data)){
                $this->success('添加节点成功','ajax');
            }else{
                $this->error('添加节点失败', 'ajax');
            }
         }
       
    }

    /**
     * 添加模块
     */
    Public function addModules(){

        if(!IS_POST){
            $this->display();
         }else{

            $data = array(
                'modules_name' => I('modules_name','','trim'),
                'link' => I('link'),
                'sort' => I('sort',0,'intval')
            );

            if(M('modules')->add($data)){
                $this->success('添加模块成功','ajax');
            }else{
                $this->error('添加模块失败', 'ajax');
            }
         }
       
    }

    /**
     * 添加规则
     */
    Public function addRules(){

        if(IS_POST){
            if(!empty($_GET['gid']) && count($_POST['rules'])>0){
                $rules = implode(',', array_unique($_POST['rules']));
                $data['id'] = intval($_GET['gid']);
                $data['rules'] = $rules;
              
                if(M('auth_group')->save($data)){
                    $this->success('添加成功',U('node',array('gid'=>$data['id'])));
                }else{
                    $this->error('添加失败，请重试');
                }
            }else{
                $this->error('您没有选中组或者没有分配任何权限');
            }
        }else{
            $this->error('非法操作');
        }
    }

    /**
     * 为管理员分配组(角色)
     * @return [type] [description]
     */
    Public function group(){

        if(!IS_POST){
            $uid = I('uid','','intval');
            $this->groupid = M('auth_group_access')->where(array('uid'=>$uid))->getField('group_id',true);
           
            $this->username = M('user')->where(array('uid'=>$uid))->getField('username');
            $this->group = M('auth_group')->field('id,title,description')->select();
            $this->display();
        }else{
            $uid = (int)$_GET['uid'];

            if(!empty($uid) && count($_POST['groupid'])>0){   
                if( !M('user')->find($uid) ){
                    $this->error('该管理员不存在');
                }
                $data = array();
                foreach ($_POST['groupid'] as $v) {
                    array_push($data, array('uid'=>$uid,'group_id'=>$v));
                }
                $authGroupAccess = M('auth_group_access');
                $authGroupAccess->where( array('uid'=>array('eq',$uid)) )->delete();
                
               if($authGroupAccess->addAll($data)){
                    $this->success('操作成功');
               }else{
                    $this->error('操作失败');
               }
            }else{
                $authGroupAccess = M('auth_group_access');
                $authGroupAccess->where( array('uid'=>array('eq',$uid)) )->delete();
                $this->success('操作成功');
            }
        }
    }

    /**
     * 成员授权
     * @return [type] [description]
     */
    Public function toGroup(){
        
        if(!IS_POST){
            $gid = I('gid','','intval');
            $authGroup = M('auth_group');
            $this->group = $authGroup->where(array('id'=>$gid))->getField('title');
            $this->authUser = M('auth_group_access')->where(array('group_id'=>$gid))->getField('uid',true);
            $this->user = M('user')->select();
            $this->display();
        }else{
           
            $userid = I('userid');
            $gid = intval($_GET['gid']);

            if(is_array($userid)){
                $data = array();
                foreach ($userid as $v) {
                   $arr = array(
                        'uid' => $v,
                        'group_id' => $gid
                    );
                   array_push($data, $arr);
                }
               
                $authGroupAccess = M('auth_group_access');
                $authGroupAccess->where( array('group_id'=>array('eq',$gid)) )->delete();
                if($authGroupAccess->addAll($data)){
                    $this->success('操作成功');
                }else{
                    $this->error($authGroupAccess->getDbError());
                }
            }
        }
    }

}