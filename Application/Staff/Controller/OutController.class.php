<?php
namespace Staff\Controller;
use Think\Controller;

class OutController extends CommonController {
    
    Public function index(){
        $id = I('id',0,'intval');

        if($id > 0){
            $result = M('outform')->find($id);
            $this->result = $result;
        }
        $prex=C('DB_PREFIX');
        $user=M('user');
        $data1=$user->join($prex.'auth_group_access ON '.$prex.'user.uid='.$prex.'auth_group_access.uid')->
        field($prex.'user.uid,username,group_id')->where(array(group_id =>5))->select();
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
            if($this->_isIp()){
                $params = array(
                    'uid' => (int)session('uid'),
                    'signDate' => strtotime(preg_replace('/\//is','-',I('signDate',0))),
                    'startDate' => strtotime(preg_replace('/\//is','-',I('startDate',0))),
                    'expectedTime' => I('expected'),
                    'outReason' => I('reason'),
                    'createTime' => time() 
                );
                $outform = M('outform');
                if($outform->add($params)){

                    $data = array('status'=>1,'info'=>'提交成功');
                }else{

                    $data = array('status'=>0,'info'=>$outform->getError());
                }

                $this->ajaxReturn($data);
            }
        }
    }

    /**
     * 回岗签单
     * @return [type] [description]
     */
    Public function signDown(){
        if(IS_POST){

            if($this->_isIp()){
                $params = array(
                    'id' => I('id'),
                    'endDate' => strtotime(preg_replace('/\//is','-',I('endDate',0))),
                    'expectedReason' => I('preReason'),
                    'managersignal' => I('manager'),
                    'directorsignal' => I('director'),
                    'backTime' => time(),
                    'status' => 1
                );
               
                $outform = M('outform');
                if($outform->save($params)){

                    $data = array('status'=>1,'info'=>'提交成功');
                }else{

                    $data = array('status'=>0,'info'=>$outform->getError());
                }

                $this->ajaxReturn($data);
            }
        }
    }
    //经理审核
    Public function managersign(){
        $mstatus=I('mstatus',0,'intval');
        $id=I('id',0,'intval');
        $result=M('outform')->where(array('id'=>$id))->setField(array('mstatus' => $mstatus));
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
        $result=M('outform')->where(array('id'=>$id))->setField(array('dstatus' => $dstatus));
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
        $where = array('m_outform.uid'=>$uid);
        $this->_plist($where,$uid); 
        $this->display(); 
    }
    //经理，总监审核列表
    Public function alists(){
        $uid=session('uid');
        $where=null;
        $getm=M('outform')->getField('managersignal',true);
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
        $getd=M('outform')->getField('directorsignal',true);
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
        $field=Array('id','m_user.uid','signdate','startdate','enddate','outreason','expectedreason','managersignal',
            'directorsignal','m_outform.status','mstatus','dstatus','username','createtime','backtime');
        $outform = M('outform'); 
        
        $count      = $outform->where($where)->count(); 
        $Page       = new \Think\Page($count,8);
        $show       = $Page->show();
        $list = $outform->where($where)->join('m_user ON m_outform.uid=m_user.uid')->field($field)
        ->order('createTime DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
        // p($list);die;
        $this->assign('userid',$uid);
        $this->assign('list',$list);
        $this->assign('page',$show);
        
    }


    Private function _isIp(){
        
        if(C('IS_IP')){
            $ip = get_client_ip();
            if(!in_array($ip, C('IP'))){
                $data = array('status'=>0,'info'=>'傻了吧，要连公司网络');
                $this->ajaxReturn($data);
                return false;
            }
            return true;
        }
        return true;
    }

}