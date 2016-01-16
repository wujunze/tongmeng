<?php
   /*
   *
   *Date 20150712  订单管理
   *
   *
   *Author  zhangyanwu 
   *
   */

   namespace Admin\Controller;
   use  Think\Controller;
   if(empty($_SESSION['username'])){
    header('location:'.U('Admin/login'));
   }

   class OrderController extends Controller{
   		public function index(){
         
   			//实例化订单对象
   			$order = M("order");
   			
            $ordernumber = I("ordernumber");

   			if($_POST){
   				$_GET['P'] = 1;
   			}

            if(isset($_SESSION['help']['fk'])){
               $_GET['p'] = 1;
               unset($_SESSION['help']['fk']);
            }
   			$args['ordernumber'] = $ordernumber;
			
   			//模糊查询
   			$map['ordernumber'] = array("LIKE","%{$ordernumber}%");
   			
   			//数据总条数
   			$count = $order -> where($map) -> count();

   			//实例化分页类
   			$Page = new \Think\Page($count,3,$args);
            
   			//查询
   			$data = $order -> where($map) -> limit("{$Page->firstRow},{$Page->listRows}") -> order("id asc") -> select();
   			//$data = $order -> join('tm_goods ON tm_goods.id = tm_order.gid') -> join('tm_userdetail ON tm_order.uid = tm_userdetail.uid') -> select();
   		
   			//显示分页
   			$show = $Page -> show();
   			
   			$this -> assign("Page",$show);
   			$this -> assign("orders",$data);
   			$this -> display();
   		}


   		public function look(){
           if(empty($_SESSION['username'])){
                $this -> redirect('Admin/Login');
            }

			$order = M("order");
			$id = I("id");
			
			$map['id']=$id;
			
			//$demo = $order -> where($map) -> select();
			//$demo = $order -> join('tm_goods ON tm_goods.id = tm_order.gid') -> join('tm_userdetail ON tm_order.uid = tm_userdetail.uid')-> select();
         $demo = $order ->where($map) -> find();
			//dump($demo);

         //$uid = $demo['uid'];
         //$u['uid'] = $uid;
         //dump($uid);exit;
			//$userdetail = M("userdetail");
         //$test = $userdetail -> where($u) -> find();
         //dump($test);exit;

			$this->assign("order",$demo);
			
			$this -> display();

   		}

   		public function del(){
         if(empty($_SESSION['username'])){
            $this -> redirect('Admin/Login');
         }

   		$id = I("id");
			$order = M("order");

   			if($order->delete($id)){
   				$this -> success("删除订单成功");
   			}else{
   				$this -> error("删除订单失败");
   			}
            $_SESSION['help']['fk'] = 0;
   		}
   }