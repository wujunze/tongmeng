<?php
/*
	Date  : 2015-07-12    物流管理控制器
	Author : 吴钧泽
	team:samedreams
	domain:www.samedreams.org
*/
namespace Admin\Controller;
use Think\Controller;
//展示物流信息页面

if(empty($_SESSION['username'])){
    header('location:'.U('Admin/login'));
}

class LogisticsController extends Controller{
	public function index(){
		$user = M("logistics");
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
    //删除物流信息
    public function delete(){
        $id = $_GET['id'];
        $user = M("logistics");
        if($user -> delete($id)){
            $this -> success("删除成功!");
        }else{
            $this -> error("删除失败!");
        }


    }
    //渲染添加物流模板
    public function add(){
        $this->display();
    }
    //处理添加物流
    public function doAdd(){
        //dump($_POST);
        $user=M("logistics");
           $user ->create();
            if($user->add($_POST)){
                $this->success('添加成功',U('Logistics/Index'),2);
            }else{
                $this->error('添加失败',U('logistics/Add'),2);
            }
      
    }


}