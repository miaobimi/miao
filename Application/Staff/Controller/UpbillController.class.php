<?php
	namespace Staff\Controller;
	use Think\Controller;
	class UpbillController extends CommonController{
		public function index(){
			$this->display();
		}

		public function uploadImg(){
			$config = array(
			    'maxSize'    =>    3145728,
			    'rootPath'   =>    './Uploads/billimg/',
			    'savePath'   =>    '',
			    'saveName'   =>    array('uniqid',''),
			    'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),
			    'autoSub'    =>    true,
			    'subName'    =>    array('date','Ymd')
			);
			$upload = new \Think\Upload($config);// 实例化上传类
		    // 上传文件 
		    $images   =   $upload->upload();
		    p($images);die;
		    if($images){
                $thinkUrl = $images['file']['savepath'].$images['file']['savename'];
                $info='./Uploads/'.ltrim($thinkUrl,'./');
                //返回文件地址和名给JS作回调用
                $data = array(
                    'status' => 1,
                    'filename' => $images['file']['savename'],
                    'file' => $info,
                    'message' => '上传成功'
                );
                $this->ajaxReturn($data);
            }
            else{
                $data = array(
                    'status' => 0,
                    'message' => $upload->getError()
                );
                $this->ajaxReturn($data);
            }
		}

		public function import(){
			$this->display();
		}
	}
	
?>