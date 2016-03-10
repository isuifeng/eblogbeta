<?php
namespace Admin\Controller;
use Think\Controller;

class ArticleController extends Controller{
	//添加新文章
	public function add(){
		if(IS_POST){
			$title = I('title');//文章标题
			$content = I('content');//文章内容
			$cid = I('category');//文章类型
			$data = array();
			$data['title'] = $title;
			$data['content'] = $content;
			$data['cid'] = $cid;
			M('article')->add($data);
			$this->success('添加成功',U('Index/index'));
		}else{
			$content_title = '新增文章';
			$this->assign('content_title',$content_title);
			$this->display();
		}		
	}
	
}