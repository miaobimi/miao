<?php 

namespace Admin\Controller;
use Think\Controller;

Class CategoryController extends Controller{

	Public function index(){
		
		$cateList = M('Category')->select();
		$this->cateList = getTree($cateList,0);
		$this->display();
	}

	Public function addCategory(){

		if(!IS_POST){
			$cateList = M('Category')->where(array('status'=>1))->select();
			$this->cateList = getTree($cateList,0);
			$this->display();
		}else{
			$data  =array(
				'pid' => I('pid',0,'intval'),
				'title' => I('title'),
				'status' => I('status',1,'intval'),
				'sort' => I('sort',0,'intval')
			);

			$category = M('Category');
			if($category->data($data)->add()){
				$this->success('添加分类成功');
			}else{
				$this->error($category->getDbError());
			}
		}
		
	}

	Public function changeCateStatus(){
		if(IS_AJAX){
			$id = I('id',0,'intval');
			$status = I('status',1,'intval');
			if($id > 0){
				if(M('Category')->where(array('id'=>$id))->setField('status',$status)){
					$this->success('操作成功');
				}else{
					$this->error('操作失败');
				}
			}
		}
	}

	Public function del(){
		if(IS_AJAX){
			$id = I('id',0,'intval');
			if($id > 0){
				$category = M('Category');
				$count = $category->where(array('pid'=>$id))->count();
				if($count > 0){
					$this->error('请先删除该分类下的子分类');
				}else{
					if($category->delete($id)){
						$this->success('删除成功');
					}else{
						$this->error('删除失败，请重试');
					}
				}
			}
		}
	}

}

 ?>