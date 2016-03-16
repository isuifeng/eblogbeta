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

//天气api调用
function weather(){
    $ch = curl_init();
    $url = 'http://apis.baidu.com/apistore/weatherservice/weather?citypinyin=shanghai';
    $header = array(
        'apikey: 7f7bd7051be2c41928790239143c043f',
    );
    //添加apikey到header
    curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    //执行HTTP请求
    curl_setopt($ch , CURLOPT_URL , $url);
    $result = curl_exec($ch);
    $res=json_decode($result,true);
	return $res;
}