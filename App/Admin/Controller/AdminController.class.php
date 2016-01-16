<?php
/*
	Date  : 2015-07-09    管理员列表
	Author : wujunze
	team:samedreams
	domain:www.samedreams.org
*/
namespace Admin\Controller;
use Think\Controller;


class AdminController extends Controller{
	//后台管理员展示
	public function index(){
        $user = M("admin");
        $username = I("username");
        if($_POST){
            $_GET['p'] = 1;
        }
        $args['username'] = $username;
        $map['username'] = array("LIKE","%{$username}%");
       
        $count = $user -> where($map)->count();
        $Page = new \Think\Page($count,10,$args);
        $data = $user -> field('id,username')->limit("{$Page->firstRow},{$Page->listRows}")-> where($map) ->order("id ASC")->select();
        //dump($user -> count());
        $show = $Page-> show();
        $this -> assign("page",$show);
        $this -> assign("users",$data);
        $this -> display();


	}
	//后台添加管理员
	public function add(){
		$this->display();//输出模板
	}	
	public function addadmin(){
		$user = M('admin');
        if(isset($_POST['username']) && isset($_POST['password'])){
            $_POST['password'] = md5($_POST['password']);
            
            

            $user ->create();
            if($user->add()){
                $this->success('添加成功',U('Admin/Index'),2);
            }else{
                $this->error('添加失败',U('Admin/Add'),2);
            }
        }else{
            return false;
        }


	}
	//删除管理员
	public function del(){
		$id = I("id");
		$user = M("admin");
		if($user -> delete($id)){
			$this -> success("删除成功!");
		}else{
			$this -> error("删除失败!");
		}

	}
	//显示管理员
	public function mod(){
        $id = I("id");
        $user = M("admin");
        $data = $user -> find($id);
        $this -> assign("admin",$data);
        $this -> display();
    }
    //修改管理员
	public function update(){
		$user = M("admin");
        if(I("password")){
            $_POST['password'] = md5(I("password"));
        }else{
            unset($_POST['password']);
        }
        // $_POST['pwd'] = 123;
        // dump($_POST);exit;	
        if($user -> create()){
            if($user ->save($_POST)){
                $this -> success("修改用户成功","index");
            }else{
                $this -> error("修改用户失败");
            }
        }else{
            $this -> error("修改用户失败");
        }

	}
       //渲染登录模板
    public function login(){
        $this->display();
    }
    //验证管理员登录
        public function dologin(){
        $user = M('admin');
        $res = $user->where("username='".I('post.username')."' AND password='".md5(I('post.password'))."'")->find();

        if($res){
            session_start();
           
            $user->where("id='".$res['id']."'")->save($data);
            $_SESSION['id']=$res['id'];
            $_SESSION['username']=$res['username'];
           	$_SESSION['isLogin'] = true;
            $this->redirect('Index/index');
    }else{
        $this->error('不允许登陆,请重试!');
    }
}
 
    //退出登录
    public function logout(){
        $_SESSION=array();
        $_SESSION = null;
        session_destroy();
        header('location:'.U('Admin/login'));
    }
    //显示管理员登录日志
    public function log(){
        $user = M("log");
        $id = I("id");
        //dump($id);
        //exit;
       
 
       
        $map["aid"]=$id;
        $count = $user -> where($map)->count();
        $Page = new \Think\Page($count,10);
        $data = $user->limit("{$Page->firstRow},{$Page->listRows}")-> where($map)->order("id ASC")->select();
        
         $show = $Page-> show();
         $this -> assign("page",$show);
        $this -> assign("users",$data);

        $this -> assign("count","$count");
        $this -> display();

    }
    //删除登录日志
    public function logdel(){
        $id = I("id");
        $user = M("log");
        if($user -> delete($id)){
            $this -> success("删除成功!");
        }else{
            $this -> error("删除失败!");
        } 
    }



}

?>