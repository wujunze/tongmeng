<?php
/*
*
* Date 20150720  收货地址
*
*
*  Author zhangyanwu
*
*/

namespace  Home\Controller;
use   Think\Controller;
use   Think\Area;
class AddressController extends Controller{
	public function index(){
		if(empty($_SESSION['user'])){
 			$this -> redirect('Login/index');
 		}

		$address = M("address"); 
		//dump($_POST);
      	 $addr = I('addr');	
      
 	  //判断是否提交了搜索
		if($_POST){
			$_GET['p'] = 1;
		}

		//通过验证缓存,让页面调回第一页
		if(isset($_SESSION['help']['fk'])){
			$_GET['p'] = 1;
			unset($_SESSION['help']['fk']);
		}
 		//模糊查询
		$map['addr'] = array('LIKE',"%{$addr}%"); 
		 $uid = $_SESSION['user'][0]['id'];  
   		 $u['uid'] = $uid;

		//获得满足条件的总记录数
		$count =  $address -> where($u) -> where($map) -> count();

		//实例化分页类,传入总条数、每页显示条数
		$Page = new \Think\Page($count,3,$args);

		//查询收货地址信息
		$data = $address -> where($u) -> where($map) -> limit("{$Page->firstRow},{$Page->listRows}")-> select();
		//dump($data);
		$this -> assign('address',$data);
		//显示分页
		$show = $Page -> show();
		//分配数据
		$this ->assign('Page',$show);
 		//dump($data);
 		
		$this -> display();
	}

	//添加收货地址方法
	public function addressAdd(){
		if(empty($_SESSION['user'])){
 				$this -> redirect('Login/index');
 		}
		$city = Area::city();
        $this -> assign('city',$city);
		$this -> display();
	}
	public function addressInsert(){
		//动态自动验证
		$rules = array(
			array('name','1,18','名字长度不符合要求',0,'length'),
			array('postcode','6','邮编长度不符合要求',0,'length'),
			array('postcode','number','年龄必须为数字'),
			array('telphone','/^13[\d]{9}$|14^[0-9]\d{8}|^15[0-9]\d{8}$|^17[0-9]\d{8}|^18[0-9]\d{8}$/','手机号不合法')
		);
		$address = M("address");
		if(!$address -> validate($rules) -> create()){
			$this -> error($address->getError());
		}else{

			$addr['uid'] = $_SESSION['user'][0]['id'];

			$addr['name'] = $_POST['name'];

			$addr['postcode'] = $_POST['postcode'];

		    $addr['defaultaddr'] = $_POST['defaultaddr'];

			$addr['telphone'] = $_POST['telphone'];

			//dump($_POST);exit;
			$pro = $_POST['province'];
			$cit = $_POST['city'];
			$cou = $_POST['county'];

			$add = $_POST['add'];
			$addr['addr'] = $pro.'|'.$cit.'|'.$cou.'|'.$add;

			if($address -> create()){
				if($address -> add($addr)){
					if(empty($_SESSION['buy'])){
						$this -> success('添加收货地址成功','Index');
					}else{
						$this -> redirect('Order/buy');
					}
				}else{
					$this -> error('添加收货地址失败1');
				}
			}else{
				$this -> error('添加收货失败2');
			}
		}
	}

	//修改收货地址方法
	public function addressMod(){
		if(empty($_SESSION['user'])){
 			$this -> redirect('Login/index');
 		}

		 $uid = $_SESSION['user'][0]['id'];
		 $u['uid'] = $uid;

 		$address = M("address");
 		$id = I('id');
 		$data = $address -> where($u) -> where('id='.$id) -> find();
 		//dump($data);
 		$addr = $data['addr'];
 		$res = explode('|',$addr);
 		$pro = $res[0];
 		$cit = $res[1];
 		$cou = $res[2];
 		$add = $res[3];
 		$c = array("$pro","$cit","$cou");
 		$city = Area::city($c);
        $this -> assign("city",$city);
 		//dump($c);
 		$this -> assign('add',$res[3]);
 		//dump($res);
 		$this -> assign('address',$data);
 		$this -> display();
	}
	public function addressUpdate(){
		
		//动态自动验证
		$rules = array(
			array('name','1,18','名字长度不符合要求',0,'length'),
			array('postcode','6','邮编长度不符合要求',0,'length'),
			array('postcode','number','年龄必须为数字'),
			array('telphone','/^13[\d]{9}$|14^[0-9]\d{8}|^15[0-9]\d{8}$|^17[0-9]\d{8}|^18[0-9]\d{8}$/','手机号不合法')
		);
		$address = M("address");
		if(!$address -> validate($rules) -> create()){
			$this -> error($address->getError());
		}else{
			$address = M("address");
			$uid = $_SESSION['user'][0]['id'];
			//dump($uid);
			$id = I('id');
			//$arr['id'] = $id;
			//dump($id);
			$arr['name'] = I('name');
			$arr['postcode'] = I('postcode');
			$arr['telphone'] = I('telphone');
			$arr['defaultaddr'] = I('defaultaddr');

			$pro = $_POST['province'];
			$cit = $_POST['city'];
			$cou = $_POST['county'];
			$add = $_POST['add'];

			$arr['addr'] = $pro.'|'.$cit.'|'.$cou.'|'.$add;

			if($address -> create()){
				if($address -> where('uid='.$uid) ->where('id='.$id) -> save($arr)){
					$this -> success('收货地址修改成功','index');
				}else{
					$this -> error('收货地址修改失败1');
				}
			}else{
				$this -> error('修改地址失败');
			}
		}
	}

	//删除收货地址方法
	public function  addressDel(){
		if(empty($_SESSION['user'])){
 			$this -> redirect('Login/index');
 		}

		$address = M("address");

		$id = I('id');
		//dump($id);
		if($address -> where('id='.$id) -> delete()){
			$this -> success('收货地址删除成功');
		}else{
			$this -> error('收货地址删除失败');
		}
		$_SESSION['help']['fk'] = 0;//用于判断删除之后的跳转到第一页的缓存
	}
} 