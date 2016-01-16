<?php 
	/*
	*	Date 20150711  HelpController
	*
	*	author zhangyanwu
	*
	*
	*/
	namespace Admin\Controller;
	use  Think\Controller;

	if(empty($_SESSION['username'])){
    header('location:'.U('Admin/login'));
	}

	class HelpController extends Controller{

		public function index(){
			

			//实例化对象
			$help = M("help");
			
			//获得帮助的主题
			$title = I("title");
			//dump($title);exit;
			//判断是否提交了搜索
			if($_POST){
				$_GET['p'] = 1;
			}
			
			if(isset($_SESSION['help']['fk'])){
				$_GET['p'] = 1;
				unset($_SESSION['help']['fk']);
			}

			$args['title'] = $title;

			//模糊查询
			$map['title'] = array("LIKE","%{$title}%"); 

			//获得满足条件的总记录数
			$count =  $help -> where($map) -> count();
		
			//实例化分页类,传入总条数、每页显示条数
			$Page = new \Think\Page($count,3,$args);
			//dump($Page);


			//查询用户信息
			$data = $help ->  field('id,title,content,time') -> where($map) ->limit("{$Page->firstRow},{$Page->listRows}")->order("id asc") -> select();

			//dump($data);exit;
			//显示分页
			$show = $Page -> show();
			//dump($show);

			//分配数据
			$this ->assign('Page',$show);
			$this ->assign('helps',$data);

			$this -> display();
		}

		public function add(){
			if(empty($_SESSION['username'])){
                $this -> redirect('Admin/Login');
            }


			$this -> display();
		}

		public function insert(){
			$help = M("help");
			$title=$_POST['title'];
			$content = $_POST['content'];

			
			$time = time();

			$m['title'] = $title;
			$m['content'] = $content;
			$m['time'] = $time; 
			
			if($help->create()){
				if($help->add($m)){
					$this -> success("添加帮助成功","index");
				}else{
					$this -> error("添加帮助失败");
				}

			}else{
				$this -> error("添加帮助失败");
			}
		}

		public function mod(){
			if(empty($_SESSION['username'])){
                $this -> redirect('Admin/Login');
            }


			$id = I('id');        //获得要修改的帮助id
			$help = M("help");	  //实例化用户对象

			$data = $help -> find($id);
			//dump($data);
			$this -> assign("help",$data);
			$this -> display();
		}

		public function update(){
		
			$help = M("help");
			
			if($help->create()){
				if($help ->save()){
					$this -> success("修改帮助资料成功","index");
				}else{

					$this -> error("修改帮助资料失败");
				}

			}else{
				
				$this -> error("修改帮助资料失败");
			}
		}

		public function del(){
			if(empty($_SESSION['username'])){
                $this -> redirect('Admin/Login');
            }


			$id = I("id");
			$help = M("help");

			if($help->delete($id)){
				$this -> success("删除帮助成功");
			}else{
				$this -> error("删除帮助失败");
			}
			$_SESSION['help']['fk'] = 0;
		}

		public function look(){
			if(empty($_SESSION['username'])){
                $this -> redirect('Admin/Login');
            }

			
			$id = I('id');        //获得帮助id
			$help = M("help");	  //实例化用户对象

			$data = $help -> find($id);
			//dump($data);
			$this -> assign("help",$data);
			$this -> display();
		}
	}