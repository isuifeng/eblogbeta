<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends InitController {
    //后台首页
    public function index(){
        $article = M('article')->order('create_time desc')->select();
        $this->assign('article',$article);
    	$this->display();
    }
}