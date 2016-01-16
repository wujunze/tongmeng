<?php
/*
	Date  : 2015-07-09    公告管理
	Author : 王勇
*/

namespace Admin\Controller;
use Think\Controller;
if(empty($_SESSION['username'])){
    header('location:'.U('Admin/login'));
}


class BulletinController extends Controller{


	public function index(){

		$bullentin = M('bullentin'); 


		//搜索框获得字段title内容
		$title = I('title');
		//判断是否是post传值
		if($_POST){

			$_GET['p'] = 1;
		}
		
		$args['title'] = $title;

		$map['title'] = array('LIKE',"%{$title}%");

		$count = $bullentin -> where($map)->count();

		$Page = new \Think\Page($count,3,$args);

		$data = $bullentin -> field('id,title,content,btime')-> limit("{$Page->firstRow},{$Page->listRows}")
				 -> order('id DESC')-> where($map) -> select();

		$show = $Page -> show();
		
		$this->assign('Page',$show);// 赋值数据集

		$this -> assign('bullentins',$data);

		$this -> display();

	}



	//插入到数据库的内容
	public function add(){
		$this -> display();
	}


	//出入到数据库
	public function insert(){
		$data = I();
		$bullentin = M('bullentin');
		if($bullentin -> create()){
			if($bullentin -> add()){
				$this -> success('ok','index');
			}else{
				$this -> error('error');
			}
		}else{
			$this -> error('error2');
		}
	}



	//修改公告
	public function	mod(){
		$id = I('id');
		$bullentins = M('bullentin');
		$data = $bullentins -> find($id);
		$this -> assign('bullentins',$data);
		$this -> display();

	}


	//修改处理
	public function update(){
		$bullentins = M('bullentin');
		if($bullentins -> create()){
			if($bullentins -> save()){
				$this -> success('修改广告成功','index');
			}else{
				$this -> error('修改公告失败');
			}
		}else{
			$this -> error('添加广告失败');
		}

	}

	//删除公告
    public function del(){
    	$id = I('id');
    	$bullentins = M('bullentin');
    	if($bullentins -> delete($id)){
    		$this -> success('删除成功');
    	}else{
    		$this -> error('删除失败');
    	}


    }


}//BulletinController结束符号