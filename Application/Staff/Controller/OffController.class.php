<?php
namespace Staff\Controller;
use Think\Controller;

class OffController extends CommonController {
    
    Public function index(){
        /*$id = I('id',0,'intval');

        if($id > 0){
            $result = M('outform')->find($id);
            $this->result = $result;
        }*/
        $prex=C('DB_PREFIX');
        $user=M('user');
        $data1=$user->join($prex.'auth_group_access ON '.$prex.'user.uid='.$prex.'auth_group_access.uid')->
        field($prex.'user.uid,username')->where(array(group_id =>5))->select();
        $data2=$user->join($prex.'auth_group_access ON '.$prex.'user.uid='.$prex.'auth_group_access.uid')->
        field($prex.'user.uid,username')->where(array(group_id =>1))->select();
        $this->assign('data1',$data1);
        $this->assign('data2',$data2);
        
    	$this->display();
    }

    /**
     * 外出签单
     * @return [type] [description]
     */
    Public function signUp(){
        if(IS_POST){
            $params = array(
                'uid' => (int)session('uid'),
                'signTime' => strtotime(preg_replace('/\//is','-',I('signTime',0))),
                'startTime' => strtotime(preg_replace('/\//is','-',I('startTime',0))),             
                'endTime' => strtotime(preg_replace('/\//is','-',I('endTime',0))), 
                'days' => I('days'),            
                'type' => I('type'),            
                'managersignal' => I('manager'),
                'directorsignal' => I('director'),
                'reason' => I('offreason'),
            );
            //p($params);die;
            $off = M('off');
            if($off->add($params)){
                // p($upcard->getLastSql());die;
                $data = array('status'=>1,'info'=>'提交成功');
            }else{

                $data = array('status'=>0,'info'=>$off->getError());
            }

            $this->ajaxReturn($data);
        }
    }

    /**
     * 回岗签单
     * @return [type] [description]
     */
    //经理审核
    Public function managersign(){
        $mstatus=I('mstatus',0,'intval');
        $id=I('id',0,'intval');
        $result=M('off')->where(array('id'=>$id))->setField(array('mstatus' => $mstatus));
        if($result){
            $data=array('status'=>1,'info'=>'提交成功');
        }else{
            $data=array('status'=>0,'info'=>'提交失败');
        }
        $this->ajaxReturn($data);
    }
    //总监审核
    Public function directorsign(){
        $dstatus=I('dstatus',0,'intval');
        $id=I('id',0,'intval');
        $result=M('off')->where(array('id'=>$id))->setField(array('dstatus' => $dstatus));
        if($result){
            $data=array('status'=>1,'info'=>'提交成功');
        }else{
            $data=array('status'=>0,'info'=>'提交失败');
        }
        $this->ajaxReturn($data);
    }

    //用户查看自身审核列表
    Public function lists(){
        $uid=session('uid');
        $where = array('m_off.uid'=>$uid);
        $this->_plist($where,$uid); 
        $this->display(); 
    }
    //经理，总监审核列表
    Public function alists(){
        $uid=session('uid');
        $where=null;
        $getm=M('off')->getField('managersignal',true);
        if(in_array($uid, $getm)){
            $where=array('managersignal'=>$uid);
        }
        /*foreach ($m_d as $k => $v) {
            if(in_array($uid, $m_d[$k])){
                $where=($uid==$v['managersignal'])?array('managersignal'=>$uid):array('directorsignal'=>$uid);
                break;
            }
        }*/
        if($where){
            $this->_plist($where,$uid);
        }
        $this->display(); 
        
    }
    Public function blists(){
        $uid=session('uid');
        $where=null;
        $getd=M('off')->getField('directorsignal',true);
        if(in_array($uid, $getd)){
            $where=array('directorsignal'=>$uid);
        }
        /*foreach ($m_d as $k => $v) {
            if(in_array($uid, $m_d[$k])){
                $where=($uid==$v['managersignal'])?array('managersignal'=>$uid):array('directorsignal'=>$uid);
                break;
            }
        }*/
        if($where){
            $this->_plist($where,$uid);
        }
        $this->display(); 
        
    }

    Private function _plist($where,$uid){
        $field=Array('id','m_user.uid','type','signtime','starttime','endtime','days','managersignal',
            'directorsignal','reason','mstatus','dstatus','username');
        $off = M('off'); 
        
        $count      = $off->where($where)->count(); 
        $Page       = new \Think\Page($count,8);
        $show       = $Page->show();
        $list = $off->where($where)->join('m_user ON m_off.uid=m_user.uid')->field($field)
        ->order('signTime DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('userid',$uid);
        $this->assign('list',$list);
        $this->assign('page',$show);
        
    }

}