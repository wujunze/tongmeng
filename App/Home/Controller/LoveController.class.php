<?php

namespace Home\Controller;
use Think\Controller;

class LoveController extends Controller{

	public function check(){
		//判断是否登入
		if(empty($_SESSION['user'])){
			$this -> redirect('Login/index');
		}

		$uid = $_SESSION['user'][0]['id'];

		//id赋值给一个数据
		$u['uid'] = $uid;

		//读取用户的详情表
		$userdetail = M('userdetail');

		//获得捐赠的钱数
		$loveMoney = I('lovemoney');

		//查询用户ID 等于 uid的数据
		$detail = $userdetail -> where($u) -> select(); 

		//获得详情表中的用户余额
		$tomoney = $detail[0]['money'];

		if($loveMoney <= $tomoney AND $loveMoney > 0){
			//用户余额减去捐赠的钱数
			   $tomoney -= $loveMoney;
			  
		}else{
			   $this -> error('余额不足');
			   exit;
		}

		//赋值给数组 重新插入到用户详情表中
		$data['money'] = $tomoney;
        $userdetail->where($u)->save($data);


        //实例化LOVE表
        $love = M('love');
        $time = I('lovetime');
   

    	$result['lovemoney'] = $loveMoney; 
    	$result['uid'] = $uid;
    	$result['lovetime'] = $time;

    	if($love -> create()){
    		$res = $love -> add($result);
    		$this->success('捐赠成功','index');
        }else{
        	//$this -> error('error004');
        }

	}//checkend



	public function index(){

		//爱心表和用户详情表查询
		$Model = M('love');
		$data=$Model->field('love.uid,love.lovemoney,userdetail.name')
		->where('love.uid=userdetail.uid')->table('tm_love love,tm_userdetail userdetail')->select();
		$this -> assign('love',$data);
		$this -> display();



	}//loveend

}//LoveController end