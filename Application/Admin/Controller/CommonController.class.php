<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller{
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
    			$this->error('登录失败',U('common/login'));
    		}
    	}else{
    		$this->display();
    	}    	
    }
    //退出
    public function logout(){
        session('uid',null);
        session('name',null);
        $this->success('退出成功',U('Home/Index/index'));
    }
}