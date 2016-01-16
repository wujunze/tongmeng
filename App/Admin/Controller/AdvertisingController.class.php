<?php
/*
	Date  : 2015-07-09    广告管理
	Author : wangyong
	team: samedreams

*/

namespace Admin\Controller;
use Think\Controller;

if(empty($_SESSION['username'])){
   header('location:'.U('Admin/login'));
}

class AdvertisingController extends Controller{


	public function index(){
		$advertising = M('advertising');

		$data = $advertising -> field('id,img,content,links') -> select();
	
		$this -> assign('advertising',$data);

		$this -> display();
	}


   public function add(){

   		 $this -> display();
   }



   public function insert(){
   		
   		// 实例化上传类
		$upload = new \Think\Upload();
		// 设置附件上传类型
		$upload->exts = array('jpg', 'gif', 'png', 'jpeg');
		// 设置文件上传的根目录
		$upload -> rootPath = 'Public/';
		// 设置附件上传目录
		$upload->savePath  = 'Uploads/';  
		// 设置执行上传
		$info = $upload->upload();

		$data = I();
		$data['img']=$info['pic']['savepath'].$info['pic']['savename'];
	
   		$advertising = M('advertising');

		if($advertising -> create()){
			if($advertising -> add($data)){
				$this -> success('ok','index');
			}else{
				$this -> error('error');
			}
		}else{
				$this -> error('error2');
		}

   }


   public function see(){

   $id = I('id');
   $advertisings = M('advertising');
   $data = $advertisings -> field ('img,content') -> where('id='.$id) -> select();
   $this -> assign('advertising',$data);
   $this -> display();

   }


   public function del(){
   		$id = I('id');
   		$data = M(advertising);
   		if($data -> delete($id)){
   			$this -> success('删除成功');
   		}else{
   			$this -> error('删除失败');
   		}
   }

} //class _ en