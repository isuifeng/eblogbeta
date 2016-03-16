<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends Controller{
	//显示具体的文章内容
	public function detail(){
		$aid = I('aid');//文章id
		$map = array();
		$map['aid'] = $aid;
		$article = M('article')->where($map)->select();
		
		$title = $article[0]['title'];
		$content = $article[0]['content'];
		$create_time = $article[0]['create_time'];

		$this->assign('title',$title);
		$this->assign('content',$content);
		$this->assign('create_time',$create_time);
		$this->display();
	}
}