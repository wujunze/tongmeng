<?php 
	/*
	*data 20150709   用户管理
	*
	*Author ：zhanyanwu
	*
	*/

	namespace Admin\Controller;
	use Think\Controller;

	if(empty($_SESSION['username'])){
    header('location:'.U('Admin/login'));
	}

	class UserController extends Controller{

		public function index(){
			
 			//dump($_SESSION);
			//实例化对象
			$user = M('user');
			
			//获得用户的信息
			$username = I('username');

			//判断是否提交了搜索
			if($_POST){
				$_GET['p'] = 1;
			}
			
			if(isset($_SESSION['help']['fk'])){
				$_GET['p'] = 1;
				unset($_SESSION['help']['fk']);
			}

			$args['username'] = $username;

			//模糊查询
			$map['username'] = array("LIKE","%{$username}%"); 

			//获得满足条件的总记录数
			$count =  $user -> where($map) -> count();
		
			//实例化分页类,传入总条数、每页显示条数
			$Page = new \Think\Page($count,3,$args);


			//查询用户信息
			$data = $user ->  field('id,username,password,auth,status,regtime') -> where($map) ->limit("{$Page->firstRow},{$Page->listRows}")->order("id asc") -> select();

			//显示分页
			$show = $Page -> show();
			
			//分配数据
			$this ->assign('Page',$show);
			
			$this ->assign('users',$data);

			$this -> display();
		}

		//声明添加用户的方法
		public function add(){
			if(empty($_SESSION['username'])){
 				$this -> redirect('Admin/Login');
 			}

			$this -> display();
		}

		public function insert(){

			//加密
			$_POST['password'] = md5(I('password'));
			//dump($_POST);exit;
			$user = M("user");
			
			if($user->create()){

				//获得user表中新添加的一个id
				if($lastId = $user->add()){
					$_POST["id"] = $lastId;

					//将user表中新获得的id，赋给userdetail表中的uid（以数组的形式）
					$u['uid'] = $lastId; 
					$userdetail = M("userdetail");
					if($userdetail -> create()){

						//将user表中新添加的id，添加到用户详情表中，与用户详情表中的uid关联
						if($userdetail -> add($u)){

							$this -> success("添加用户详情关联的uid成功","index");
						}else{

							$this -> error("添加用户详情关联的uid失败1");
						}	

					}else{

						$this -> error("添加用户详情关联的uid失败2");
					}

					
				}else{
					
					$this -> error("添加用户失败1");
				}

			}else{
				
				$this -> error("添加用户失败2");
			}

		}

		//声明修改用户的方法
		public function mod(){
			if(empty($_SESSION['username'])){
 				$this -> redirect('Admin/Login');
 			}
			$id = I('id');        //获得要修改的用户id
			$user = M("user");	  //实例化用户对象

			$data = $user -> find($id);
			//dump($data);
			$this -> assign("user",$data);
			$this -> display();
		}

		public function update(){
			$id = I("id");
			$can['id'] = $id;
			$user = M("user");
			
			if(I("password")){
				$_POST['password'] = md5(I("password"));	
			}else{
				unset($_POST['password']);
			}


			if($user->create()){
				if($user -> where($can) -> save()){
					$this -> success("修改用户资料成功","index");
				}else{

					$this -> error("修改资料失败");
				}

			}else{
				
				$this -> error("修改资料失败");
			}
		}

		//声明删除用户的方法
		public function del(){
			if(empty($_SESSION['username'])){
 				$this -> redirect('Admin/Login');
 			}

			$id = I("id");
			$user = M("user");

			if($user->delete($id)){
			
				//将用户的id与用户详情表中的uid关联
				$u['uid'] = $id;

				$userdetail = M("userdetail");

				//删除用户详情表中，与用户表id关联的uid的数据
				if($userdetail->where($u)->delete()){
					$this -> success("删除用户成功");
				}else{
					$this -> error("删除用户失败1");
				}

				
			}else{
				$this -> error("删除用户失败2");
			}
			$_SESSION['help']['fk'] = 0;
		}

		public function look(){
			if(empty($_SESSION['username'])){
 				$this -> redirect('Admin/Login');
 			}

			$userdetail = M("userdetail");
			$uid =$_GET['id'];

			$map['uid']=$uid;
			//dump($map);exit;
			$demo = $userdetail -> where($map) -> find();
			//dump($demo);exit;
			$this->assign("userdetail",$demo);
			
			$this -> display();
		}

		//声明用户详情修改类
		public function updatea(){

			$userdetail = M("userdetail");
		
			//判断用户是否上传了图片
			if($_FILES['pic']['name'] !=""){

				$upload = new \Think\Upload();						//实例化上传类
				$upload -> exts = array("gif","png","jpg","jpeg");  //上传的图片类型
				$upload -> rootPath = "Public/";					//根目录
				$upload -> savePath = "Uploads/";					//相对目录
				$info = $upload -> upload();
				
				$_POST['pic'] = $info['pic']['savepath'].$info['pic']['savename'];
				
			// }else{

			// 	$_POST['pic'] = "/Uploads/default.png";
			}
			
			if($userdetail->create()){
				$uid = I('uid');
	
				if($userdetail ->where("uid=".$uid)->save()){
					$this -> success("修改用户资料成功","index");
				}else{

					$this -> error("修改资料失败1");
				}

			}else{
					
				$this -> error("修改资料失败2");
			}

	   }	
	}