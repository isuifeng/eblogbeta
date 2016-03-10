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
			$this->display();
		}		
	}
	//编辑文章内容
	public function edit(){
		if(IS_POST){
			$title = I('title');//文章标题
			$content = I('content');//文章内容
			$cid = I('category');//文章类型
			$data = array();
			$data['title'] = $title;
			$data['content'] = $content;
			$data['cid'] = $cid;
			echo $title;
		}else{			
			$aid = I('aid');
			$map = array();
			$map['aid'] = $aid;
			$article = M('article')->where($map)->select();			
			$title = $article[0]['title'];
			$content = $article[0]['content'];
			$cid = $article[0]['cid'];
			$this->assign('title',$title);
			$this->assign('content',$content);
			$this->assign('cid',$cid);
			$this->display();
		}
	}
}