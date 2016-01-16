<?php
/**
 * @Author: IT - Pony
 * @Date: 2015-07-20 00:45:36
 * @Email:Admin@Itpony.Com
 * @FileName: MailController.class.php
 * @FilePath: D:\wamp\www\tongmeng\App\Admin\Controller\MailController.class.php
 * @Last Modified by: IT - Pony
 * @Last Modified time: 2015-07-20 03:12:53
 */

namespace Admin\Controller;
use Think\Controller;

if(empty($_SESSION['username'])){
    header('location:'.U('Admin/login'));
}

class MailController extends Controller{
    public function index(){
        $Mail = array('Mail_Host' => Mail_Host,'Mail_User' => Mail_User,'Mail_Pass' => Mail_Pass,'Mail_From' => Mail_From 
        );
        $this -> assign('mail',$Mail);
        $this-> display('Mail');
    }
    public function from(){
        $Mail_Host = $_POST['Mail_Host'];   //接受发信主机
        $Mail_User = $_POST['Mail_User'];   //接受发信帐号
        $Mail_Pass = $_POST['Mail_Pass'];   //接受发信密码
        $Mail_Form = $_POST['Mail_From'];   //接受收信人 默认
        $str = "<?php\r\n";
        $str.= "    define('Mail_Host', '{$Mail_Host}');\r\n";
        $str.= "    define('Mail_User', '{$Mail_User}');\r\n";
        $str.= "    define('Mail_Pass', '{$Mail_Pass}');\r\n";
        $str.= "    define('Mail_From', '{$Mail_Form}');\r\n";
        if(file_put_contents(APP_PATH."Lib/tm_mail.php", $str)){
            $this -> success("修改成功",'Mail/index');
        }else{
            $this -> error('修改失败');
        }

    }
}