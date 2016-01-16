<?php
/*
*	Date 20150715   用户中心
*
*
*	Author  zhangyanwu 
*
*/
 namespace  Home\Controller;
 use   Think\Controller;

 class UserController extends Controller{
 	public function  index(){
 		if(empty($_SESSION['user'])){
 			$this -> redirect('Login/index');
 		}

 		$user = M("user"); 		
 	  
 		$uid = $_SESSION['user'][0]['id'];
 		$map['uid'] = $uid; 
 		
 		$userdetail = M("userdetail");
 		$data = $userdetail -> where($map) -> select();
 		
 		$_SESSION['userdetail'] = $data ;
 		//dump($_SESSION);
 		$this -> assign("userdetail",$data);
 		$this -> display();
 	}

 	//声明用户修改密码的函数
 	public function pwdMod(){
 		header('Content-Type:text/html;charset=utf-8');
 		if(empty($_SESSION['user'])){
 			$this -> redirect('Login/index');
 		}
 		$id = $_SESSION['user'][0]['id'];
 		$user = M("user");
		
 		$data = $user -> find($id);
 		//dump($data);
 		$this -> assign("user",$data);
 		$this -> display();
 		
	 }
 	public function pwdUpdate(){
 		header('Content-Type:text/html;charset=utf-8');

 			$rules = array(
 				array('new_password','6,18','新密码长度不符合要求',0,'length'),
 				array('comfirm_password','6,18','确认密码长度不符合要求',0,'length')
 			);
 			$user = M("user");
 			if(!$user -> validate($rules) -> create()){
 				$this -> error($user->getError());
 			}else{

	 			$id = $_SESSION['user'][0]['id'];
				$can['id'] = $id;
				$demo = $user -> where('id='.$id) -> find();
				$pass = $demo['password'];
				
				$password = md5(I('password'));
				$new_password = md5(I('new_password'));
				$comfirm_password = md5(I('comfirm_password'));
				
				$_POST['password'] = $new_password;
				if(empty($password)){
					unset($password);
				}

				if($pass != $password){
					$this -> error('原密码不正确,请重新输入');
				}

				if($new_password != $comfirm_password){
					$this -> error('两次输入的密码不一致');
				}
				
				if($user->create()){
					if($user -> where($can) -> save()){
						
						$this -> success("密码修改成功","index");

					}else{

						$this -> error("密码修改失败1");
					}

				}else{
					
					$this -> error("密码修改失败2");
				}
			}
		}

		//声明用户修改个人资料的方法
 		public function personalMod(){
 			if(empty($_SESSION['user'])){
 				$this -> redirect('Login/index');
 			}
 			$userdetail = M("userdetail");
			$uid = $_SESSION['user'][0]['id'];

			$map['uid']=$uid;
		
			$demo = $userdetail -> where($map) -> find();
		
			$this->assign("userdetail",$demo);
			
			$this -> display();

   		}
   // 		 public static function isMobile($tel){
		 //        if(!$tel) {
		 //            return false;
		 //        }
		 //        return preg_match('#^13[d]{9}$|14^[0-9]d{8}|^15[0-9]d{8}$|^18[0-9]d{8}$#', $tel) ? '' : '手机号不合法';
		 // }


   		public function personalUpdate(){
   			//动态自动验证
   			$rules = array(
 				array('name','1,18','昵称长度不符合要求',0,'length'),
 				array('age','number','年龄必须为数字'),
 				array('age','0,120','年龄不合法',0,'between'),
 				array('email','email','邮箱格式不正确'), 
 				array('tel','/^13[\d]{9}$|14^[0-9]\d{8}|^15[0-9]\d{8}$|^17[0-9]\d{8}|^18[0-9]\d{8}$/','手机号不合法')
 			);

 			$userdetail = M("userdetail");
 			if(!$userdetail -> validate($rules) -> create()){
 				$this -> error($userdetail->getError());
 			}else{
	   			//$userdetail = M("userdetail");
	   			$uid = $_SESSION['user'][0]['id'];

				//判断用户是否上传了图片
				if($_FILES['pic']['name'] !=""){

					$upload = new \Think\Upload();						//实例化上传类
					$upload -> exts = array("gif","png","jpg","jpeg");  //上传的图片类型
					$upload -> rootPath = "Public/";					//根目录
					$upload -> savePath = "Uploads/";					//相对目录
					$info = $upload -> upload();
					
					$_POST['pic'] = $info['pic']['savepath'].$info['pic']['savename'];
					
				//}else{

					//$_POST['pic'] = "/Uploads/default.png";
				}
				
				if($userdetail->create()){

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
   		
 }  		