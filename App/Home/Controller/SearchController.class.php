<?php
/*
	Date  : 2015-07-21    管理员列表
	Author : wujunze
	team:samedreams
	domain:www.samedreams.org
*/
namespace Home\Controller;
use Think\Controller;
class SearchController extends Controller{
	//搜索商品展示
	public function index(){
					//实例化对象
			$user = M('goods');
			
			//获得商品关键字
			$goodsname = $_POST['goodsname'];

			//判断是否提交了搜索
			if($_POST){
				$_GET['p'] = 1;
			}
			
			$args['goodsname'] = $goodsname;

			//模糊查询
			$map['goodsname'] = array("LIKE","%{$goodsname}%"); 

			//获得满足条件的总记录数
			$count =  $user -> where($map) -> count();
		
			//实例化分页类,传入总条数、每页显示条数
			$Page = new \Think\Page($count,3,$args);


			//查询商品信息
			$data = $user -> where($map) ->limit("{$Page->firstRow},{$Page->listRows}")->order("id asc") -> select();

			//显示分页
			$show = $Page -> show();
			
			//分配数据
			$this ->assign('page',$show);
			
			$this ->assign('goods',$data);

			$this -> display();

	}
}