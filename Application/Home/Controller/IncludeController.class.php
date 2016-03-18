<?php
namespace Home\Controller;
use Think\Controller;
class IncludeController extends Controller{
	//收录链接展示
	public function displayUrl(){
		$include = M('include')->select();
		$this->assign('include',$include);
		$this->display();
	}
}