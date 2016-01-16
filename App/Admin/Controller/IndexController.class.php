<?php
namespace Admin\Controller;
use Think\Controller;

if(empty($_SESSION['username'])){
    header('location:'.U('Admin/login'));
}

class IndexController extends Controller {
    public function index(){
    	if(!file_exists(APP_PATH."Lib/tm_db.php")){
    		$this->redirect('Install/index');
    	}else if(session('isLogin')){
    		$this->display();
    	}else{
    		$this->redirect('Admin/login');
    	}
/*    	$aid=session('id');
    	$logtime = time();
    	//$ip=$_SERVER["REMOTE_ADDR"];
    	$logip = get_client_ip();
    	//实例化
    	$user = M("log");                 
        if($user->create()){
            if($user -> add()){
                $this -> success("管理员日志写入成功！","index");
            }else{
                $this -> error("管理员日志写入失败!");
            }
        }else{
            $this -> error("管理员日志写入失败！");
        }*/
    	
    	
    	
    	

    }
       //欢迎页面
    public function welcome(){
    	$times = date('Y-m-d H:i:s',$_SESSION['loddingtime']);
        $this->assign('times',$times);
        $this->display();
        //把信息写入登录日志
        $user = M("log");  
        $aid=session('id');
       
       $data['aid']=$aid;
       
       
    	$logtime = time();
    	$data['logtime']=$logtime;
    	//$ip=$_SERVER["REMOTE_ADDR"];
    	$logip = $_SERVER["REMOTE_ADDR"];
    	//dump($logip);
    	$data['logip']=$logip;
    	$lognums = n+1;
    	$data['lognums']=$lognums;
    	//dump($data);
    	$user->add($data);
    	               
        
    }

}