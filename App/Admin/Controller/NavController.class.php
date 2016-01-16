<?php 
/*
	Date  : 2015-07-11    导航栏控制器
	Author : 吴钧泽
	team:samedreams
	domain:www.samedreams.org
*/

namespace Admin\Controller;
use Think\Controller;

if(empty($_SESSION['username'])){
    header('location:'.U('Admin/login'));
}

class NavController extends Controller{
	//显示导航栏
	public function index(){
		$res = M('navigate');
        $cates=$res->select();
        $this->assign('cates',$cates);
		$this->display();
	}
	//删除导航栏
	public function del(){
		$res = M('navigate'); 
          $id = $_GET['id'];

        if($res->where('id='.$id)->delete()){
            $this->success('删除成功',U('Nav/index'),1);
        }else{
            $this->error('删除失败',U('Nav/index'),1);
        }
    }
    //修改导航栏展示
    public function edit(){
    	$res = M('navigate');
    	$id = $_GET['id'];
    	$cates=$res->where('id='.$id)->select();
    	//dump($cates);

    	$this ->assign('nav',$cates);
    	$this -> display();
    }
    //修改导航栏
   	public function update(){
        $res = M('navigate');
        $res->create();
        //dump($_POST);
    
        if($res->save($_POST)){
            $this->success('修改成功',U('Nav/index'),1);
        }else{
            $this->success('修改失败',U('Nav/index'),1);
        }
    }
    //展示添加导航栏的页面
    public function addNav(){
         $this->display();//渲染模板
    }
    //添加导航栏
    public function insert(){
    	$res = M('navigate');
     
            $res->create();
            if($res->add($_POST)){
                $this->success('添加成功',U('Nav/index'),3);
            }else{
                $this->success('添加失败',U('Nav/addNav'),3);
         }
    }

	



}