<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends CommonController {

    public function index(){
    	
        $Article = M('Article');
        $count      = $Article->count();
        $Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $Article->order('id DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);
		$this->display();
    }

    Public function addArticle(){
    	if(IS_AJAX){
            $id = I('id',0,'intval');
    		$data = array(
    			'title' => I('title','','strip_tags'),
                'content' => I('content'),
    			'cid' => I('cate',0,'intval'),
    			'add_time' => time()
    		);
    		if($id>0){
                $data['id'] = $id;
                if(M('Article')->save($data)){
                    $this->success('修改成功');
                }else{
                    $this->error('修改失败');
                }
            }else{
                if(M('Article')->add($data)){
                    $this->success('添加成功');
                }else{
                    $this->error('添加失败');
                }
            }
    	}else{
            $id = I('id',0,'intval');
            if($id > 0){
                $this->result = M('Article')->field("id,content,title,cid")->find($id);
            }
            $list = getTree(M('article_category')->select());
            $this->list = $list;
    		$this->display();
    	}
    }

    Public function del(){
        if(IS_AJAX){
            $id = I('id');
            if(M('Article')->where("id IN ($id)")->delete()){
                $this->success('删除成功');
            }else{
                $this->error('删除失败');
            }
        }
    }

}
?>