<?php
/**
 * @Author: IT - Pony
 * @Date: 2015-07-11 20:58:01
 * @Email: Admin@Itpony.com
 * @FileName: LoginController.class.php
 * @FilePath: D:\wamp\www\tongmeng\App\Home\Controller\LoginController.class.php
 * @Last Modified by: IT - Pony
 * @Last Modified time: 2015-07-22 15:28:51
 */
 
namespace Home\Controller;
use Think\Controller;

/**
 * 用户登录处理
 */
class LoginController extends Controller{
    //指定用户登录页面
    public function index(){
        //网站配置
        $sql = M('config');
        $Config = $sql -> select();
        $this -> assign('config',$Config[0]);
        $this-> display('login');

        //判断用户是否登录
        if(!empty($_SESSION['user'])){
            $this -> redirect('Index/index');
        }
    }
    //处理用户登录
    public function login(){
        //接受用户登录信息进行匹配
        $user = M('user');
        $userdetail = M('userdetail');
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $sql = $user->where("username='{$username}' and password='{$password}' and status = 1") -> select();
        
        $res = $userdetail -> where('id = '.$sql[0]['id']) -> select();
        // 判断登录信息是否正确
        if($sql){
            $_SESSION['user'] = $sql;
            $_SESSION['userdetail'] = $res;
            $this -> success('登录成功',__APP__);
        }else{
            $this -> error('帐号密码不正确');
        }
    }
}