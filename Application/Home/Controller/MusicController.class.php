<?php
namespace Home\Controller;
use Think\Controller;
class MusicController extends Controller{
	public function displayMusic(){
		$music = M('music')->select();
		$this->assign('music',$music);
		$this->display();
	}
}