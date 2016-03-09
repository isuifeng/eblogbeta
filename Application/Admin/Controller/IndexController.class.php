<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$this->display();
    }
    public function login($username='',$password=''){
    	if(IS_POST){
    		//取得登录用户的信息
    		$map = array();
    		$map['username'] = $username;
    		$user = M('admin')->where($map)->select();
    		//判断密码是否正确
    		if( is_array($user) && $user[0]['password'] == md5($password)){
    			$this->success('登录成功！', U('Index/index'));
    		}else{
    			$this->error('登录失败',U('Index/login'));
    		}
    	}else{
    		$this->display();
    	}    	
    }
}