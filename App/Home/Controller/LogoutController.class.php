<?php
/**
 * @Author: IT - Pony
 * @Date: 2015-07-15 03:35:55
 * @Email: Admin@Itpony.com
 * @FileName: LogoutController.class.php
 * @FilePath: D:\wamp\www\tongmeng\App\Home\Controller\LogoutController.class.php
 * @Last Modified by: IT - Pony
 * @Last Modified time: 2015-07-20 11:31:17
 */

/**
 * 用户退出
 */
 namespace Home\Controller;
 use Think\Controller;
 
 class LogoutController extends Controller{
     public function index(){
        unset($_SESSION['user']);
        unset($_SESSION['userdetail']);
        $this->success('安全退出', __APP__);
     }
 }