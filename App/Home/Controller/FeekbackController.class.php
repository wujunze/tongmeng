<?php
/*
*	Date 20150716   反馈 回复
*
*
*	Author  zhangyanwu 
*
*/
 namespace  Home\Controller;
 use   Think\Controller;

 class  FeekbackController extends Controller{

 		//声明反馈列表的函数
   		public function myfeekback(){

   			if(empty($_SESSION['user'])){
 				$this -> redirect('Login/index');
 			}

   			$feekback = M("feekback");
   			$feekbacktitle = I("feekbacktitle");

   			//判断是否提交了搜索
			if($_POST){
				$_GET['p'] = 1;
			}

			if(isset($_SESSION['help']['fk'])){
				$_GET['p'] = 1;
				unset($_SESSION['help']['fk']);
			}
			
			$args['feekbacktitle'] = $feekbacktitle;

			//模糊查询
			$map['feekbacktitle'] = array("LIKE","%{$feekbacktitle}%"); 
			 $uid = $_SESSION['user'][0]['id'];  
       		 $u['uid'] = $uid;
			//获得满足条件的总记录数
			$count =  $feekback ->where($u) -> where($map) -> count();
		
			//实例化分页类,传入总条数、每页显示条数
			$Page = new \Think\Page($count,3,$args);


			//查询用户信息
			$data = $feekback ->  field('id,feekbacktitle,feekbackcontent,feekbacktime') ->where($u) -> where($map) ->limit("{$Page->firstRow},{$Page->listRows}")->order("id asc") -> select();
			//dump($data);exit;
			//显示分页
			$show = $Page -> show();
			
			//分配数据
			$this ->assign('Page',$show);
			
			$this ->assign('feekback',$data);

			$this -> display();
   		}

   		//添加反馈的函数
   		public function feekbackAdd(){
   			if(empty($_SESSION['user'])){
 				$this -> redirect('Login/index');
 			}
   			$this -> display();
   		}
   		public function feekbackInsert(){

   			$feekback = M("feekback");
			$uid = $_SESSION['user'][0]['id'];	//用户uid
			$_POST['uid']=$uid;
			
			if($feekback->create()){
				if($feekback -> add($_POST)){
					$this -> success("添加反馈成功","myfeekback");
				}else{
					$this -> error("添加反馈失败1");
				}

			}else{
				$this -> error("添加反馈失败2");
			}
		}

		//反馈所对应的回复
		public function reply(){
			$fid = $_GET['fid'];	//反馈id
			$map['fid'] = $fid;		//将反馈id写入数组
			
			$reply = M("reply");

			//联合查询反馈，回复相关的信息
			$demo = $reply -> join('tm_feekback ON tm_reply.fid = tm_feekback.id') -> where($map) -> select();

			$this -> assign("reply",$demo);
			$this -> display();
		}
   		
   		//删除反馈,及与之对应的回复
   		public function feekbackDel(){
   			$id = I("id");
   			$feekback = M("feekback");

   			$u['fid'] = $id;
   			$reply = M("reply");
   			$da =$reply -> where($u) -> find();

   			//回复不为空时
   		    if(!empty($da['replycontent'])){

 				//先删除回复内容
				if($reply -> where($u) -> delete()){

   					$feekback -> delete($id);
   					$this -> success("删除成功","myfeekback");
   				}else{
   					$this -> error("删除回复失败");
   			 	}

   		   }else{

   		   		//回复为空时,只要删除反馈
   			  $feekback -> delete($id);
   			  $this->success("删除成功");
   		   }
   		$_SESSION['help']['fk'] = 0;
   	}
 }