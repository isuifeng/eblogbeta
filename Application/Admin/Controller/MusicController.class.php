<?php
namespace Admin\Controller;
use Think\Controller;

class MusicController extends Controller{
	//音乐列表展示
	public function displayMusic(){
		$music = M('music')->order('create_time desc')->select();
		$this->assign('music',$music);
		$this->display();
	}
	//添加音乐
	public function addMusic(){
		if(IS_POST){
			$title = I('title');//歌曲名
			$content = I('singer');//歌手
			$cid = I('url');//存储路径
			$data = array();
			$data['title'] = $title;
			$data['singer'] = $singer;
			$data['url'] = $url;
			M('music')->add($data);
			$this->success('添加成功',U('Music/index'));
		}else{			
			$this->display();
		}		
	}
}