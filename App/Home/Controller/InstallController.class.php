<?php
/**
 * @Author: IT - Pony
 * @Date: 2015-07-11 20:58:01
 * @Email: Admin@Itpony.com
 * @FileName: InstallController.class.php
 * @FilePath: D:\wamp\www\tongmeng\App\Home\Controller\InstallController.class.php
 * @Last Modified by: IT - Pony
 * @Last Modified time: 2015-07-15 11:44:20
 */

namespace Home\Controller;
use Think\Controller;

/**
 * 网站安装
 */
class InstallController extends Controller {

    //网站安装
    public function index(){
        if(file_exists(APP_PATH.'Lib/install.lock')){
            $install = 'ok';
        }
        $this -> assign('install',$install);
        $this->display('temp_1');
    }
    //检测安装环境
    public function save1(){
        
        $PHPALL=explode(".",PHP_VERSION); 
        if($PHPALL[1] < 1 && $PHPALL[1] < 2){
            $up=false; 
            $php = '<span class="error_span">&times;</span>';
        }else{ 
            $php = '<span class="correct_span">&radic;</span>';

        }

        if(extension_loaded('mysql')){
            $mysql = '<span class="correct_span">&radic;</span>正常';
        }else{
            $up=false; 
            $mysql = '<span class="error_span">&times;</span>未开启';
        }

        if(function_exists('session_start')){
            $session = '<span class="correct_span">&radic;</span>正常';
        }else{
            $up=false;
            $session = '<span class="error_span">&times;</span>';
        }
        
        $this->display('temp_2');
    }
    public function save2(){
        $this -> display('temp_3');
    }
    public function save3(){

        //获取数据库主机
        $host = $_POST['host'];
        //获取用户帐号
        $user = $_POST['user'];
        //获取用户密码
        $pass = $_POST['pass'];
        //获取数据库名
        $name = $_POST['name'];
        //获取字段前缀
        $prefix = $_POST['prefix'];

        $str = "<?php"."\r\n";
        $str.= "    define('Sql_type', 'mysql');    //数据库类型"."\r\n\r\n";
        $str.= "    define('Sql_host', '{$host}');    //服务器地址"."\r\n\r\n";
        $str.= "    define('Sql_name', '{$name}'); //数据库名  "."\r\n\r\n";
        $str.= "    define('Sql_user', '{$user}'); //用户名"."\r\n\r\n";
        $str.= "    define('Sql_pwd', '{$pass}');   //密码"."\r\n\r\n";
        $str.= "    define('Sql_port', '3306'); //端口"."\r\n\r\n";
        $str.= "    define('Sql_prefix', '{$prefix}');    //数据库表前缀"."\r\n\r\n";
        $str.= "    define('Sql_charset', 'utf8');  //数据库编码默认采用utf8";
        file_put_contents(APP_PATH.'Lib/tm_db.php', $str);

        $lnk = @mysql_connect($host,$user,$pass);
        mysql_set_charset('utf8');
        mysql_query("CREATE DATABASE {$name}");
        mysql_query("USE {$name}");
        $arr = file_get_contents(APP_PATH.'/Lib/tongmeng.sql');
        $res = explode(';',$arr);
        foreach($res as $Res){
            $Sql = $Res.';';
            mysql_query($Sql);
        }

        $this->display('temp_4');
    }
    //数据库配置
    public function save4(){
        $config = M('config');
        //网站配置写入
        $web['title'] = $_POST['title'];
        $config -> add($web);

        //后台管理员写入
        $admin['username'] = $_POST['username'];
        $admin['password'] = md5($_POST['password']);
        $user = M('admin');
        $user -> add($admin);

        $this -> redirect('./Install/save5');
    }
    //安装完成
    public function save5(){
        $fp = fopen(APP_PATH.'Lib/install.lock','w');
        fwrite($fp,'tongmeng');
        fclose($fp);
        $this->display('temp_5');
    }
}
