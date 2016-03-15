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
			$title = I('title');
			$singer = I('singer');
			$config = array(
		        'maxSize'    =>    10145728,
		        'rootPath'   =>    './Public/Uploads/music/',
		        'savePath'   =>    '',
		        'saveName'   =>    array('songName',array($title,$singer)),		        
		        'autoSub'    =>    false,
		        'exts'       =>    array('mp3')
		    );
		    $upload = new \Think\Upload($config);// 实例化上传类
		    // 上传文件 
			$info   =   $upload->upload();
			if(!$info) {// 上传错误提示错误信息				
			    $this->error($upload->getError());
			}else{// 上传成功 获取上传文件信息
				$this->success('上传成功',U('Music/addMusic'));
			    //foreach($info as $file){
			    //    echo $file['savepath'].$file['savename'];
			    //}
			}






			/*$title = I('title');//歌曲名
			$content = I('singer');//歌手
			$cid = I('url');//存储路径
			$data = array();
			$data['title'] = $title;
			$data['singer'] = $singer;
			$data['url'] = $url;
			M('music')->add($data);
			$this->success('添加成功',U('Music/index'));*/
		}else{			
			$this->display();
		}		
	}
}