<?php
/*
	Date  : 2015-07-10    友情链接控制器
	Author : wujunze
	team:samedreams
	domain:www.samedreams.org
*/
namespace Admin\Controller;
use Think\Controller;

if(empty($_SESSION['username'])){
    header('location:'.U('Admin/login'));
}


class LinkController extends Controller{
	//显示友情链接
	public function index(){
		$link = M('link');
		//获取当前表的总的数量
		$count = $link->count();
		
		//分页类
		$page = new \Think\Page($count,10);
		
		//读取数据
		// $users = $user->limit($page->firstRow.','.$page->listRows)->select();
		$links = $link->page(I('get.p'),10)->order('id ASC')->select();
		//获取所有的页码信息
		$pages = $page->show();
		//分配变量
		$this->assign('links',$links);
		$this->assign('pages',$pages);

    	$this->display();
	}
	//删除友情链接
	public function delete(){
/*		$id = I("id");
		$user = M("link");
		if($user -> delete($id)){
			$this -> success("删除成功!");
		}else{
			$this -> error("删除失败!");
		}*/
		//实例化模型
		$link = M('link');

		//获取id
		$uid = $_GET['id'];
echo $uid;
		//检测id参数是否存在
		
		//检测删除是否成功
		if($link->delete($uid)){
			// $this->display('lists');
			header('location:'.U('link/index'));
		}else{
			$this->error($uid,U('User/index'),5);
			// header('location:'.U('link/index'));
		}


	}
	//友情链接修改,展示原来的值
	public function edit(){
		//获取友链id
		$uid = $_GET['id'];
		//创建模型
		$link = M('link');
		$linkInfo = $link->where("id=$uid")->find();


		//分配变量
		$this->assign('linkto',$linkInfo);
		//解析模板
		

		$this->display();
	}
	//修改友情链接
	public function update(){
		$link = M('link');
		$data= array(
			"linkname"=>$_POST["linkname"],
			"links" => $_POST['links'],

		
			
		);
		$linkid = $_POST['linkid'];
		$return = $link->where("id=$linkid")->save($data); 
		if($return){
			header("location:".U('Link/index'));
		}else{
			header("location:".U('Link/edit'));
		}


		
	}
	//添加友情链接 输出模板
	public function add (){
		$this->display();//输出模板
	}
	//添加友链,处理
	public function insert(){

		$user = M('link');
        if(isset($_POST['linkname']) && isset($_POST['links'])){
           
            
            

            $user ->create();
            if($user->add()){
                $this->success('添加成功',U('Link/Index'),2);
            }else{
                $this->error('添加失败',U('Link/Add'),2);
            }
        }else{
            return false;
        }
	}


}
