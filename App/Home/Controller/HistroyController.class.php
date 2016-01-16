<?php 
	/*
	*  Data 20150719   浏览历史
	*
	*  Author ：zhanyanwu
	*
	*/

	namespace Home\Controller;
	use Think\Controller;

	class HistroyController extends Controller{

		public function histroy(){

			if(empty($_SESSION['user'])){
 				$this -> redirect('Login/index');
 			}

			//实例化浏览商品历史对象
			$goodshistroy = M('goodshistroy');
			
			//获得商品名称的信息
			$goodsname = I('goodsname');

			//判断是否提交了搜索
			if($_POST){
				$_GET['p'] = 1;
			}
			
			//通过验证缓存,让页面调回第一页
			if(isset($_SESSION['help']['fk'])){
				$_GET['p'] = 1;
				unset($_SESSION['help']['fk']);
			}


			$args['goodsname'] = $goodsname;

			//模糊查询
			$map['goodsname'] = array("LIKE","%{$goodsname}%"); 


			$uid = $_SESSION['user'][0]['id'];
			$u['uid'] = $uid;

			//获得满足条件的总记录数
			$count =  $goodshistroy -> where($u) -> where($map) -> count();
	
			//实例化分页类,传入总条数、每页显示条数
			$Page = new \Think\Page($count,3,$args);

			//查询用户信息
			$data = $goodshistroy -> where($u) -> where($map) ->limit("{$Page->firstRow},{$Page->listRows}")->order("id asc") -> select();

			//显示分页
			$show = $Page -> show();
			
			//分配数据
			$this ->assign('Page',$show);
		
			$this ->assign('goodshistroy',$data);

			$this -> display();
		}

		
		
		//声明删除用户的方法
		public function histroyDel(){

			if(empty($_SESSION['user'])){
 				$this -> redirect('Login/index');
 			}
 			
			$id = I("id");
			$goodshistroy = M("goodshistroy");

			if($goodshistroy->where('id='.$id) -> delete()){
				$this -> success("删除浏览商品历史成功");				
			}else{
				$this -> error("删除浏览商品历史失败");
			}
			$_SESSION['help']['fk'] = 0;//用于判断删除之后的跳转到第一页的缓存
		}

}
?>