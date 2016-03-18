<?php
namespace Admin\Controller;
use Think\Controller;

class CategoryController extends InitController{
	//展示分类
	public function displayCategory(){
		$category = M('category')->select();
		$this->assign('category',$category);
		$this->display();
	}
	//编辑分类
	public function editCategory(){
		if(IS_POST){
			$data = $map = array();
			$map['cid'] = I('cid');
			$data['cname'] = I('cname');//分类名
			$data['description'] = I('description');//描述			
			
			M('category')->where($map)->save($data);//更新操作
			$this->success('更新成功', U('Category/displayCategory'));
		}else{			
			$cid = I('cid');
			$map = array();
			$map['cid'] = $cid;
			$category = M('category')->where($map)->select();

			$cname = $category[0]['cname'];//文章id
			$description = $category[0]['description'];//文章标题
			
			$this->assign('cid',$cid);
			$this->assign('cname',$cname);
			$this->assign('description',$description);
			$this->display();
		}
	}
	//新增分类
	public function addCategory(){
		if(IS_POST){
			$cname = I('cname');
			$description = I('description');
			$data = array();
			$data['cname'] = $cname;
			$data['description'] = $description;
			M('category')->add($data);
			$this->success('添加成功',U('Category/displayCategory'));
		}else{
			$this->display();
		}		
	}
	//删除分类
	public function deleteCategory(){
		$mid = I('cid');
		$map = array();
		$map['cid'] = $mid;
		M('category')->where($map)->delete();
		$this->success('删除成功', U('Category/displayCategory'));
	}
}