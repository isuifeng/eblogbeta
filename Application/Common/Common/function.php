<?php
//生成歌曲名
function songName($title,$singer){
	return $title.'-'.$singer;
}

//检测是否登录
function is_login(){
	$uid = session('uid');
	$name = session('name');
	if(!empty($uid)){
		return true;
	}else{
		return false;
	}
}