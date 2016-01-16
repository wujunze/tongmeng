<?php
/*
	Date  : 2015-07-11    网站配置文件控制器
	Author : wujunze
	team:samedreams
	domain:www.samedreams.org
*/
namespace Admin\Controller;
use Think\Controller;
//网站配置文件
if(empty($_SESSION['username'])){
    header('location:'.U('Admin/login'));
}

class ConfigController extends Controller{
	//显示网站配置信息
	public function index(){

        $user = M("config");
        $data = $user -> find();

        $this -> assign("config",$data);
        
        $this -> display();
	}
	//修改网站配置信息
	public function update(){
		$upload = new \Think\Upload();// 实例化上传类
		$upload->maxSize   =     3145728 ;// 设置附件上传大小
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录
		   // 上传文件 
		$info   =   $upload->upload();
/*		if(!$info) {// 上传错误提示错误信息
		    $this->error($upload->getError());
		  }else{// 上传成功
		    $this->success('上传成功！');

		      	    	}*/
		$logo= $info['photo']['savepath'].$info['photo']['savename'];
		
		
		
		//$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
		//$map=array("id"=>"$_POST['id']","title"=>"$_POST['title']","keywords"=>"$_POST['keywords']","description"=>"$_POST['description']","logo"=>"$_POST['logo']","status"=>"$_POST['status']","cnzz"=>"$_POST['cnzz']","icp"=>"$_POST['icp']");
		$map['id']=$_POST[id];
		$map['title']=$_POST['title'];
		$map['keywords']=$_POST['keywords'];
		$map['description']=$_POST['description'];
		$map['logo']=$logo;
		$map['status']=$_POST['status'];
		$map['cnzz']=$_POST['cnzz'];
		$map['icp']=$_POST['icp'];
		//dump($map);
		$user = M("config");
  		
  		//exit;
       if($user -> create()){
            if($user ->save($map)){
                $this -> success("修改网站配置成功","index");
            }else{
                $this -> error("修改网站配置失败");

            }
        }else{
            $this -> error("修改网站配置失败");
            exit;
        }

	}

}
