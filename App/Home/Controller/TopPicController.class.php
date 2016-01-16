<?php
/**
 * @Author: IT - Pony
 * @Date: 2015-07-20 04:03:29
 * @Email:Admin@Itpony.Com
 * @FileName: TopPicController.class.php
 * @FilePath: D:\wamp\www\tongmeng\App\Home\Controller\TopPicController.class.php
 * @Last Modified by: IT - Pony
 * @Last Modified time: 2015-07-20 04:04:35
 */

namespace Home\Controller;
use Think\Controller;

class TopPicController extends Controller{
    public function index(){
        $this-> display();
    }
    public function index_1(){
        $this -> display('index_1');
    }
}