<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index(){
    	//获取文章数据
    	$article = M('article')->field("aid,title,create_time,left(content,160) as content")->order('create_time desc')->select();
       // print_r($article);
    	$this->assign('article',$article);

    	$res = weather();//天气api调用
        $data = $res['retData'];
        $this->assign('data',$data);
        
        //文章分类
        $category = M('category')->select();
        $this->assign('category',$category);

        $this->display();
    }
    //文章分类展示
	public function category(){
		$cid = I('cid');
		$map = array();
		$map['cid'] = $cid;

		//获取该分类的文章
		$article = M('article')->where($map)->select();
		$this->assign('article',$article);
		//文章分类
        $category = M('category')->select();
        $this->assign('category',$category);
        //天气api调用
        $res = weather();
        $data = $res['retData'];
        $this->assign('data',$data);
        
        $this->display('index');
	}
    public function comment(){
        $this->display();
    }
}