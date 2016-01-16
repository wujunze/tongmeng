<?php 
	/*
	*data 20150718   我的收藏
	*
	*Author ：zhanyanwu
	*
	*/

	namespace Home\Controller;
	use Think\Controller;

	class MyCollectController extends Controller{

		public function mycollect(){

			if(empty($_SESSION['user'])){
 				$this -> redirect('Login/index');
 			}

			//实例化对象
			$goodscollect = M('goodscollect');
			
			//获得商品名称的信息
			$goodsname = I('goodsname');

			//判断是否提交了搜索
			if($_POST){
				$_GET['p'] = 1;
			}
			
			if(isset($_SESSION['help']['fk'])){
				$_GET['p'] = 1;
				unset($_SESSION['help']['fk']);
			}

			$args['goodsname'] = $goodsname;

			//模糊查询
			$map['goodsname'] = array("LIKE","%{$goodsname}%"); 

			$uid = $_SESSION['user'][0]['id'];
			$u['uid'] = $uid;

			//获得满足条件的总记录数
			$count =  $goodscollect ->where($u) -> where($map) -> count();
		
			//实例化分页类,传入总条数、每页显示条数
			$Page = new \Think\Page($count,3,$args);

			//查询用户信息
			$data = $goodscollect -> where($map) ->where($u) ->limit("{$Page->firstRow},{$Page->listRows}")->order("id asc") -> select();

			//显示分页
			$show = $Page -> show();
			
			//分配数据
			$this ->assign('Page',$show);
			$this ->assign('goodscollect',$data);

			$this -> display();
		}

		public function collectDel(){

			if(empty($_SESSION['user'])){
 				$this -> redirect('Login/index');
 			}

			$id = $_GET['id'];
			$goodscollect = M("goodscollect");

			if($goodscollect->where("id=".$id)->delete()){
				$this -> success("删除收藏的商品成功");
			}else{
				$this -> error("删除收藏的商品失败");
			}
			$_SESSION['help']['fk'] = 0;
		}
	}	
?>