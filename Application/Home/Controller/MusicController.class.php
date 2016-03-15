<?php
namespace Home\Controller;
use Think\Controller;
class MusicController extends Controller{
	public function index(){
		$music = M('music')->select();
		$this->assign('music',$music);
		$this->display();
	}
}