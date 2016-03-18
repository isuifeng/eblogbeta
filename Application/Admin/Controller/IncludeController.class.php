<?php
namespace Admin\Controller;
use Think\Controller;

class IncludeController extends InitController{
	//链接列表展示
	public function displayUrl(){
		$include = M('include')->select();
		$this->assign('include',$include);
		$this->display();
	}
	//新增链接
	public function addUrl(){
		if(IS_POST){
			$url = I('url');
			$description = I('description');
			$data = array();
			$data['url'] = $url;
			$data['description'] = $description;
			M('include')->add($data);
			$this->success('添加成功',U('Include/displayUrl'));
		}else{
			$this->display();
		}		
	}
	//编辑链接
	public function editUrl(){
		if(IS_POST){
			$data = $map = array();
			$map['id'] = I('id');
			$data['url'] = I('url');//url
			$data['description'] = I('description');//描述			
			
			M('include')->where($map)->save($data);//更新操作
			$this->success('更新成功', U('Include/displayUrl'));
		}else{			
			$id = I('id');
			$map = array();
			$map['id'] = $id;
			$include = M('include')->where($map)->select();

			$url = $include[0]['url'];//url
			$description = $include[0]['description'];//文章标题
			
			$this->assign('id',$id);
			$this->assign('url',$url);
			$this->assign('description',$description);
			$this->display();
		}
	}
	//删除链接
	public function deleteUrl(){
		$id = I('id');
		$map = array();
		$map['id'] = $id;
		M('include')->where($map)->delete();
		$this->success('删除成功', U('Include/displayUrl'));
	}
}