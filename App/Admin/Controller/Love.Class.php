<?php
namespace Home\Controller;
use Think\Controller;
if(empty($_SESSION['username'])){
    header('location:'.U('Admin/login'));
}

class LoveController extends Controller{

	public function index(){

		$this -> display();
	}



}