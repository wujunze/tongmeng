<?php 
	/*
	*data 20150712  应聘表管理
	*
	*Author ：zhanyanwu
	*
	*/

	namespace Admin\Controller;
	use Think\Controller;

	if(empty($_SESSION['username'])){
    header('location:'.U('Admin/login'));
	}


	class JobController extends Controller{

		public function index(){
			
			//实例化对象
			$job = M('job');
			
			//获得应聘者应聘的职位信息
			$office = I('office');

			//判断是否提交了搜索
			if($_POST){
				$_GET['p'] = 1;
			}
			//dump($_POST);
			$args['office'] = $office;

			//模糊查询
			$map['office'] = array("LIKE","%{$office}%"); 

			//获得满足条件的总记录数
			$count =  $job -> where($map) -> count();
			//dump($count);exit;
			//实例化分页类,传入总条数、每页显示条数
			$Page = new \Think\Page($count,3,$args);
			//dump($Page);exit;


			//查询用户信息
			$data = $job ->  field('id,name,office,telephone,description,time') -> where($map) ->limit("{$Page->firstRow},{$Page->listRows}")->order("id asc") -> select();

			//dump($data);exit;
			//显示分页
			$show = $Page -> show();
			//dump($show);exit;
			//$time = time();
			//$t = date("Y-m-d H:i:s",$time);
			//dump($show);exit;
			//分配数据
			$this ->assign('Page',$show);
			//$this ->assign("t",$t);
			$this ->assign('jobs',$data);

			$this -> display();
		}

		public function look(){
			if(empty($_SESSION['username'])){
                $this -> redirect('Admin/Login');
            }


			$job = M("job");
			$id = I("id");
			
			$map['id']=$id;
			
			$demo = $job -> where($map) -> find();
			// dump($demo);exit;
			
			$this->assign("job",$demo);
			
			$this -> display();
		}


		public function del(){
			if(empty($_SESSION['username'])){
                $this -> redirect('Admin/Login');
            }

			
			$id = I("id");
			$job = M("job");

			if($job->delete($id)){
				$this -> success("删除应聘者成功");
			}else{
				$this -> error("删除应聘者失败");
			}
		}

	}