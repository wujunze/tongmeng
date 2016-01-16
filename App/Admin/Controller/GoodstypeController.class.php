<?php

namespace Admin\Controller;
use Think\Controller;

if(empty($_SESSION['username'])){
    header('location:'.U('Admin/login'));
}

class GoodstypeController extends Controller{

//商品分类表
public function index(){

    $goodstype = M('goodstype');
    $name = I('name');

    //判断是否是post传值
 	if($_POST){
 		$_GET['p'] = 1;
 	}
 	$args['name'] = $name;
 	$map['name'] = array('LIKE',"%{$name}%");
 	


 	$count = $goodstype -> where($map) ->count();
 	

 	$Page = new \Think\Page($count,7,$args);

	$data = $goodstype -> field("name,id,pid,path,concat(path,'-',id) as npth")
	-> limit("{$Page->firstRow},{$Page->listRows}")-> order("npth")-> where($map)
    -> select();

	$show = $Page -> show();
	$this ->assign('Page',$show);

	$this -> assign('goodstype',$data);
	$this -> display();	
}


//添加商品类型
public function add(){
	$this -> display();
}


//插入数据库
public function insert(){

        $goods = I('name');
        //dump($goods);
		$goodstype = M('goodstype');
		$map['name']=$goods;
		$map['pid']=0;
		$map['path']=0;

		if($goodstype -> create()){
			if($goodstype -> add($map)){
				$this -> success('ok','index');
			}else{
				$this -> error('error');
			}
		}else{
				$this -> error('error2');
		}	
}


 public function addbrand(){
 	$this -> display();
 }



 public function insertbrand(){
 	$fid = I('id');
 	$name = I('name');
 	$insertbrand = M('goodstype');

  	$brand['name'] = $name;
  	$brand['pid'] = $fid; 
    $brand['path'] = "0-$fid";
	
	if($insertbrand -> create()){
		if($insertbrand -> add($brand)){
			$this -> success('ok','index');
		}else{
			$this -> error('error1');
		}
	}else{
			$this -> error('error2');
	}
 }



public function del(){
	//获得要删除的ID
	$id = I('id');
	$goodstype = M('goodstype');
	//查询PID是否等于ID 
	$reu = $goodstype -> where('pid ='.$id ) -> select();  
	//如果等于的话可以删除，否则不可以删除。
	if($reu){
		$this -> error('不为空删除失败');
	}else{
		$goodstype ->where('id ='.$id)->delete();
		$this -> redirect('goodstype/index');
	}

}

//类 —> 品牌 -> 下的商品详情列表
public function branddetail(){

	 $id = I('id');
	 $goodsname = I('goodsname');
	 $goods = M('goods');
	 $results = $goods -> order('id DESC')-> where('tid='.$id)-> select();
	 $this -> assign('goods',$results);
     $this -> display();
}


}//class end

