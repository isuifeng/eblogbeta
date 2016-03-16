<?php
namespace Home\Controller;
use Think\Controller;
class MusicController extends Controller{
	public function displayMusic(){
		$music = M('music')->select();
		$this->assign('music',$music);

		$res = weather();//天气api调用
        $data = $res['retData'];
        $this->assign('data',$data);

		$this->display();
	}
}