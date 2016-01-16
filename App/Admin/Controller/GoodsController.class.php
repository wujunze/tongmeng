<?php


/*
	Date  : 2015-07-09    商品管理
	Author : wangyong
	team: samedreams

*/
namespace Admin\Controller;
use Think\Controller;

if(empty($_SESSION['username'])){
    header('location:'.U('Admin/login'));
}

class GoodsController extends Controller{



public function index(){

	$goods = M('goods');

	//
	//搜索框获得字段title内容
		$goodsname = I('goodsname');
		//判断是否是post传值
		if($_POST){

			$_GET['p'] = 1;
		}
		
		$args['goodsname'] = $goodsname;

		$map['goodsname'] = array('LIKE',"%{$goodsname}%");

		$count = $goods -> where($map)->count();

		$Page = new \Think\Page($count,5,$args);

	    $data = $goods -> field('id,tid,goodsname,price,salesnum,stock,comment,
		    goodsdesc,cupon,goodspic,status')-> limit("{$Page->firstRow},{$Page->listRows}") 
	         -> order('id DESC')-> where($map)-> select();

	   $show = $Page -> show();
		
	   $this->assign('Page',$show);// 赋值数据集

	   $this -> assign('goods',$data);

	   $this -> display();

}



//添加商品页面
 public function addsp(){
 	$id = I();
	$this -> display();
}




//处理添加商品
 public function goodsadd(){

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
	$data['goodspic'] = $info['goodspic']['savepath'].$info['goodspic']['savename'];

	//dump($goods);
 	$good = M('Goods');

 
		if($good -> add($data)){
			$this -> success('ok','index');
		}else{
			$this -> error('error1');
		}
  }//goodsadd-end




//修改商品页面
public function mod(){

	$id = I('id');
	$goods = M('goods');
	$data = $goods -> find($id);
	$this -> assign('goods',$data);
	$this -> display();

}


//修改商品处理
public function updata(){

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
	$data['goodspic'] = $info['goodspic']['savepath'].$info['goodspic']['savename'];

    $good = M('goods');
  	
		
			if($good -> save($data)){
				$this -> success('修改成功','index');
			}else{
				$this -> error('修改失败0001');
			}
		

}



//删除商品
public function del(){

	$id = I('id');
	$goods = M('goods');
	if($goods ->delete($id)){
		$this -> success('ok删除成功');
	}else{
		$this -> error('删除失败');
	}

}

}//goods-end
