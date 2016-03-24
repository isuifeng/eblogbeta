<?php
namespace Admin\Controller;
use Think\Controller;

class CommentController extends InitController{
	//展示评论列表
	public function displayComment(){
		$comment = M('comment')->order('create_time desc')->select();
		$this->assign('comment',$comment);
		$this->display();
	}
	//删除留言
	public function deleteComment(){
		$coid = I('coid');
		$map = array();
		$map['coid'] = $coid;
		M('comment')->where($map)->delete();
		$this->success('删除成功', U('Comment/displayComment'));
	}
	//回复留言
	public function responseComment(){
		if(IS_POST){
			$data = $map = array();
			$map['coid'] = I('coid');//留言id
			$data['response'] = I('response');//我的回复			
			
			M('comment')->where($map)->save($data);//更新操作
			$this->success('更新成功', U('Comment/displayComment'));
		}else{
			$coid = I('coid');
			$map = array();
			$map['coid'] = $coid;
			$comment = M('comment')->where($map)->select();
			$content = $comment[0]['content'];//留言内容
			$response = $comment[0]['response'];//我的回复
			$this->assign('content',$content);
			$this->assign('response',$response);
			$this->assign('coid',$coid);
			$this->display();
		}
	}
}