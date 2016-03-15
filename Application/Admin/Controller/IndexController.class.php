<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    //后台首页
    public function index(){
        $article = M('article')->order('create_time desc')->select();
        $this->assign('article',$article);
    	$this->display();
    }
    //登录
    public function login($username='',$password=''){
    	if(IS_POST){
    		//取得登录用户的信息
    		$map = array();
    		$map['name'] = $username;
    		$user = M('admin')->where($map)->select();
    		//判断密码是否正确
    		if( is_array($user) && $user[0]['password'] == md5($password)){
                session('name',$user[0]['name']);
                session('uid',$user[0]['uid']);
    			$this->success('登录成功！', U('Index/index'));
    		}else{
    			$this->error('登录失败',U('Index/login'));
    		}
    	}else{
    		$this->display();
    	}    	
    }
    //退出
    public function logout(){
        session(null);
    }
}