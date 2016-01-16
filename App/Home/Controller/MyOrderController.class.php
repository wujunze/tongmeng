<?php 
/*
*	Date 20150716  我的订单  物流  评价
*
*
*  Author  zhangyanwu
*
*/
namespace Home\Controller;
use  Think\Controller;

class MyOrderController extends Controller{
	public function  myorder(){

		if(empty($_SESSION['user'])){
 				$this -> redirect('Login/index');
 			}

   		$uid = $_SESSION['user'][0]['id'];
   		$u['uid'] = $uid;                  //用户id
 		
 		$userdetail = M("userdetail");

 		//查询用户详情表信息
 		$demo = $userdetail -> where($u) -> select();
 		$_SESSION['userdetail'] = $demo;    //将用户详情写入缓存
 	
        $order = M("order");
		$ordernumber = I("ordernumber");

		if($_POST){
			$_POST['p'] = 1;
		}

		$args['ordernumber'] = $ordernumber;
		
        //模糊查询
        $map['ordernumber'] = array("LIKE","%{$ordernumber}%");

       

        //数据总条数
        $count = $order ->where($u) -> where($map) -> count();
        //dump($count);
        //实例化分页类
        $Page = new \Think\Page($count,3,$args);

        //查询

		$data = $order -> where($u) -> where($map) -> limit("{$Page->firstRow},{$Page->listRows}")->select();
		//dump($data);
	
		//显示分页
		$show = $Page -> show();
		
		$this -> assign("Page",$show);		
	    $this -> assign("orders",$data);
		$this -> display();
	}

	//声明查看物流的方法,每个订单号所对应的运单号
	public function logisticsLook(){

		if(empty($_SESSION['user'])){
 				$this -> redirect('Login/index');
 			}

		$id = $_GET['id'];                  //获得订单id 
		$o['id'] =$id;						//将订单id写入数组
		$order = M("order");
		$dd = $order ->where($o) -> find();
		//ump($dd);
		$orderid = $_GET['id'];				 //获得订单id 
		$oid['orderid'] = $orderid;		     //将订单id写入数组
		
		$logistics = M("logistics");
		
		$ee = $logistics ->where($oid) -> find();
		//dump($ee);
		$this -> assign("order",$dd);
		$this -> assign("logistics",$ee);
		$this -> display();
	}


	public function commentAdd(){

		if(empty($_SESSION['user'])){
 				$this -> redirect('Login/index');
 			}

		$gid=$_GET['gid'];
		$this->assign('gid',$gid);
		$this -> display();
	}
	public function commentInsert(){
		
		$comment = M("comment");
		$uid = $_SESSION['user'][0]['id'];
		$_POST['uid'] = $uid;
		

		if($comment->create()){
			if($comment -> add($_POST)){
				$this -> success("添加评价成功","myorder");
			}else{
				$this -> error("添加评价失败1");
			}
		}else{
			$this -> error("添加评价失败2");
		}
	}
}
