<?php
/*
	Date  : 2015-07-13    商品评价控制器
	Author : 吴钧泽
	team:samedreams
	domain:www.samedreams.org
*/
namespace Admin\Controller;
use Think\Controller;
//展示商品评论

if(empty($_SESSION['username'])){
    header('location:'.U('Admin/login'));
}
class CommentController extends Controller{
	public function index(){
		$user = M("comment");
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
    //删除商品评论
    public function delete(){
        $id = $_GET['id'];
        $user = M("comment");
        if($user -> delete($id)){
            $this -> success("删除成功!");
        }else{
            $this -> error("删除失败!");
        }


    }
 
 

}
