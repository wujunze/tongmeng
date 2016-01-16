<?php
	/*
	*
	*	Date 20150720  招聘应聘
	*
	*
	*	Author zhangyanwu
	*
	*/

namespace  Home\Controller;
use   Think\Controller;

class  JobController extends Controller{

	public function job(){
		$this -> display();
	}
	public function jobadd(){

		$this -> display();
	}
	public function jobinsert(){
		$job = M("job");
		//$_POST['time'] = $_GET['time'];
		if($job -> create()){
			if($job -> add($_POST)){				
				$this -> redirect('Index/index',"提交数据成功");
			}else{
				$this -> error("提交数据失败1");
			}
		}else{
			$this -> error("提交数据失败2");
		}
	}
}
