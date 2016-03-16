<?php
//生成歌曲名
function songName($title,$singer){
	return $title.'-'.$singer;
}

//检测是否登录
function is_login(){
	if( isset($_SESSION['uid']) ){
		return true;
	}else{
		return false;
	}
}