<?php
namespace Admin\Controller;
use Think\Controller;

class ArticleController extends InitController{
	//添加新文章
	public function addArticle(){
		if(IS_POST){
			$title = I('title');//文章标题
			$content = I('content');//文章内容
			$cid = I('cid');//文章类型
			$data = array();
			$data['title'] = $title;
			$data['content'] = $content;
			$data['cid'] = $cid;
			M('article')->add($data);
			$this->success('添加成功',U('Index/index'));
		}else{			
			//分类列表
			$category = M('category')->select();
			$this->assign('category',$category);
			$this->display();
		}		
	}
	//编辑文章内容
	public function editArticle(){
		if(IS_POST){
			$data = $map = array();
			$map['aid'] = I('aid');//文章标题
			$data['title'] = I('title');//文章内容
			$data['content'] = I('content');//文章内容
			$data['cid'] = I('cid');//类型id
			
			M('article')->where($map)->save($data);//更新操作
			$this->success('更新成功', U('Index/index'));
		}else{			
			$aid = I('aid');
			$map = array();
			$map['aid'] = $aid;
			$article = M('article')->where($map)->select();

			$aid = $article[0]['aid'];//文章id
			$title = $article[0]['title'];//文章标题
			$content = $article[0]['content'];//文章内容
			$cid = $article[0]['cid'];//文章类型

			$this->assign('aid',$aid);
			$this->assign('title',$title);
			$this->assign('content',$content);
			$this->assign('cid',$cid);

			//分类列表
			$category = M('category')->select();
			$this->assign('category',$category);

			$this->display();
		}
	}
	//删除文章
	public function deleteArticle(){
		$aid = I('aid');
		$map = array();
		$map['aid'] = $aid;
		M('article')->where($map)->delete();
		$this->success('删除成功', U('Index/index'));
	}
}