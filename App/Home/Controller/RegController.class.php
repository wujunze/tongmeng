<?php
/**
 * @Author: IT - Pony
 * @Date: 2015-07-11 21:11:01
 * @Email: Admin@Itpony.com
 * @FileName: RegController.class.php
 * @FilePath: D:\wamp\www\tongmeng\App\Home\Controller\RegController.class.php
 * @Last Modified by: IT - Pony
 * @Last Modified time: 2015-07-20 23:54:58
 */
namespace Home\Controller;
use Think\Controller;

/**
 * 用户注册
 */
class RegController extends Controller {
    //指定用户注册首页
    public function index(){
        //网站配置
        $sql = M('config');
        $Config = $sql -> select();
        $this -> assign('config',$Config[0]);
        $this -> display('reg');
    }
    //处理用户注册
    public function reg(){

        //接受用户提交的注册信息
        $_POST['username'];
        $password = $_POST['password'];
        $_POST['password'] = md5($_POST['password']);
        $_POST['repasswd'] = md5($_POST['repasswd']);
        $_POST['auth'] = 0;
        $_POST['regtime'] = time();
        $mail_from = $_POST['email'];
        if($_POST['password'] !== $_POST['repasswd']){
            exit('两次密码输入不一致!');
        }
        $user = M('user');
        $sql = $user -> where("username='{$_POST['username']}'") ->select();
        //判断帐号是否重复
        if($sql){
            $this->error('帐号已经存在,不能重复注册');
        }
        //用户登录成功发送邮件
        import('ORG.Mail');
        // 参数说明(发送到, 邮件主题, 邮件内容, 用户名)
        $mail_name = '童梦网';
        $mail_title = "欢迎注册童梦网";
        $mail_contents = "尊敬的用户:{$_POST['username']},您的密码为 {$password},请牢记您的密码,童梦网,用心服务,感谢您的加入!";
        SendMail($mail_from,$mail_title,$mail_contents,$mail_name);

        //插入注册信息    
        if($user -> create()){
            if($lastId = $user -> add()){
                $_POST['id'] = $lastId;

                $user_Detail = M('userdetail');
                $RES['uid'] = $lastId;
                $RES['name'] = $_POST['username'];
                $RES['email'] = $_POST['email'];
                $RES['tel'] = $_POST['tel'];
                if($user_Detail -> create()){
                    if($user_Detail -> add($RES)){
                        $this -> success('注册成功',__APP__.'/Login');
                    }else{
                        $this -> error('注册失败');
                    }
                }
            }else{
                $this -> error('注册失败');
            }
        }

    }
}