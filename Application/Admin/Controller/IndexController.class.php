<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends InitController {
    //后台首页
    public function index(){        
        $field = array('aid','eblog_article.cid','title','view','comment','cname','eblog_article.create_time');
        
        $article = M('article')->join('RIGHT JOIN eblog_category ON eblog_article.cid = eblog_category.cid')->field($field)
        			->order('eblog_article.create_time desc')->select();
        			
        $this->assign('article',$article);
    	$this->display();
    }
}