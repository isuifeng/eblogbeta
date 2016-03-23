<?php
namespace Home\Controller;
use Think\Controller;
class CommentController extends Controller{
	//展示评论
	public function displayComment(){
		if(IS_POST){
			$coname = I('coname');
			$email = I('email');
			$content = I('content');
			$data = array();
			$data['coname'] = $coname;
			$data['email'] = $email;
			$data['content'] = $content;
			M('comment')->add($data);
			$this->success('添加成功',U('Comment/displayComment'));
		}else{
			$comment = M('comment')->order('create_time desc')->select();
			$this->assign('comment',$comment);
			$this->display();
		}		
	}	
}