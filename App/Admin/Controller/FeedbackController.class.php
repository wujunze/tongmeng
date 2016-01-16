<?php
/*
	Date  : 2015-07-12    用户反馈控制器
	Author : 吴钧泽
	team:samedreams
	domain:www.samedreams.org
*/
namespace Admin\Controller;
use Think\Controller;

if(empty($_SESSION['username'])){
    header('location:'.U('Admin/login'));
}


//展示用户反馈
class FeedbackController extends Controller{
	public function index(){
		$user = M("feekback");
        $username = I("username");
        if($_POST){
            $_GET['p'] = 1;
        }
        
     
       
        $count = $user->count();
        $Page = new \Think\Page($count,10);
        $data = $user->limit("{$Page->firstRow},{$Page->listRows}") -> order("id ASC")->select();
        //dump($user -> count());
        $show = $Page-> show();
        $this -> assign("page",$show);
        $this -> assign("users",$data);
        $this -> display();

		
	}
    //删除用户反馈
    public function delete(){
        $id = $_GET['id'];
        $user = M("feekback");
        if($user -> delete($id)){
            $this -> success("删除成功!");
        }else{
            $this -> error("删除失败!");
        }


    }
    //回复用户反馈
    public function reply(){
        $fid=$_GET['id'];
        $this->assign('fid',$fid);
        $this->display();
    }
    //处理用户反馈
    public function doreply(){
        $user = M('reply');
       
          
            
            $user ->create();
            if($user->add()){
                $this->success('添加成功',U('Feedback/Index'),1);
            }else{
                $this->error('添加失败',U('Feedback/reply'),1);
    



    }

}
}