<?php 
	/*
	*  Data 20150718   充值历史
	*
	*  Author ：zhanyanwu
	*
	*/

	namespace Home\Controller;
	use Think\Controller;

	class RechargeController extends Controller{

		public function recharge(){

			if(empty($_SESSION['user'])){
 				$this -> redirect('Login/index');
 			}

			//实例化对象
			$recharge = M('recharge');
			
			//获得充值id的信息
			$id = I('id');

			//判断是否提交了搜索
			if($_POST){
				$_GET['p'] = 1;
			}
			
			//通过验证缓存,让页面调回第一页
			if(isset($_SESSION['help']['fk'])){
				$_GET['p'] = 1;
				unset($_SESSION['help']['fk']);
			}

			$args['id'] = $id;

			//模糊查询
			$map['id'] = array("LIKE","%{$id}%"); 

			$uid = $_SESSION['user'][0]['id'];
			$u['uid'] = $uid; 
			$userdetail = M("userdetail");
			$demo = $userdetail -> where($u) -> select();
			$_SESSION['userdetail'] = $demo;

			//获得满足条件的总记录数
			$count =  $recharge ->where($u) -> where($map) -> count();
			//dump($count);
			//实例化分页类,传入总条数、每页显示条数
			$Page = new \Think\Page($count,3,$args);

			//查询用户充值信息
			$data = $recharge -> where($map) ->where($u) -> limit("{$Page->firstRow},{$Page->listRows}")->order("id asc") -> select();
			//dump($data);
			//显示分页
			$show = $Page -> show();
			
			//分配数据
			$this ->assign('Page',$show);
			$this ->assign('recharge',$data);

			$this -> display();
		}

		public function rechargeAdd(){

			if(empty($_SESSION['user'])){
 				$this -> redirect('Login/index');
 			}

			$this -> display();
		}
		public function rechargeInsert(){
			
		}
		public function rechargeDel(){

			if(empty($_SESSION['user'])){
 				$this -> redirect('Login/index');
 			}

			$id = $_GET['id'];
			$recharge = M("recharge");

			if($recharge->where("id=".$id)->delete()){
				$this -> success("删除充值历史成功");
			}else{
				$this -> error("删除充值历史失败");
			}
			$_SESSION['help']['fk'] = 0;
		}
	}	
?>