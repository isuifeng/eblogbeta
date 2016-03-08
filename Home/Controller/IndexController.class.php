<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index(){
    	//获取文章数据
    	$article = M('article')->select();
    	$this->assign('article',$article);

    	$this->weather();//天气api调用
        $this->display();
    }

    //天气api调用
    function weather(){
        $ch = curl_init();
        $url = 'http://apis.baidu.com/apistore/weatherservice/weather?citypinyin=shanghai';
        $header = array(
            'apikey: 7f7bd7051be2c41928790239143c043f',
        );
        // 添加apikey到header
        curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // 执行HTTP请求
        curl_setopt($ch , CURLOPT_URL , $url);
        $result = curl_exec($ch);
        $res=json_decode($result,true);

        $city=$res['retData']['city'];
        $weather=$res['retData']['weather'];
        $l_tmp=$res['retData']['l_tmp'];
        $h_tmp=$res['retData']['h_tmp'];

        $this->assign('city',$city);
        $this->assign('weather',$weather);
        $this->assign('l_tmp',$l_tmp);
        $this->assign('h_tmp',$h_tmp);
    }
}