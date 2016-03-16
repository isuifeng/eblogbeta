<?php
namespace Admin\Controller;
use Think\Controller;
class InitController extends Controller{
	//初始话
	protected function _initialize(){
		//登录判断，并且跳转
		if(!is_login()){
			$this->redirect('Common/login');
		}
	}
}