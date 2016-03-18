<?php
namespace Home\Controller;
use Think\Controller;
class MusicController extends Controller{
	public function displayMusic(){
		$music = M('music')->select();
		$this->assign('music',$music);

		/*$res = weather();//天气api调用
        $data = $res['retData'];
        $this->assign('data',$data);

        //文章分类
        $category = M('category')->select();
        $this->assign('category',$category);*/

		$this->display();
	}
}