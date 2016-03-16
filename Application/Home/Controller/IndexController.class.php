<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index(){
    	//获取文章数据
    	$article = M('article')->select();
    	$this->assign('article',$article);

    	$res = weather();//天气api调用
        $data = $res['retData'];
        $this->assign('data',$data);
        
        $this->display();
    }

    
}