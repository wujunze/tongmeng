<?php
/**
 * @Author: 吴钧泽
 * @Date: 2015-07-12 23:18:40
 */
namespace Home\Controller;
use Think\Controller;

class GoodsController extends Controller{
    //商品详情页展示
    public function index(){
    	$goods=M('goods');
    	$id=$_GET['id'];
    	$map['id']=$id;
    	$map['status']=1;
    	$datas=$goods->where($map)->find();
    	
    	$this->assign('goods',$datas);
        $cart=M('cart');
        $uid=$_SESSION['user'][0]['id'];
        $data=$cart->where('uid='.$uid)->select();

    	//商品评价
    	$comment=M('comment');
    	$val=$comment->where('gid='.$id)->select();
    	//dump($val);
    	$this->assign('val',$val);

    	//商品浏览历史
    	$goodshistroy=M('goodshistroy');
    	$his['gid']=$id;
    	$his['goodsname']=$datas['goodsname'];
    	$his['uid']=$_SESSION['user'][0]['id'];
    	$his['histroytime']=time();
    	$goodshistroy->add($his);
    	
        $this -> display();
    }
    //购物车控制器
    public function cart(){
    	if(empty($_SESSION['user'])){
    		$this->redirect('Login/index');
    	}
    	//dump($_GET);
    	//把商品添加到购物车
    	$cart=M('cart');
    	$arr['gid']=$_GET['gid'];
    	$arr['uid']=$_SESSION['user'][0]['id'];
    	$arr['goodsname']=$_GET['goodsname'];
    	$arr['goodsprice']=$_GET['price'];
    	$arr['number']=$_GET['num'];
    	$arr['cartprice']=$_GET['num']*$_GET['price'];
        $_SESSION['cart']['price'] = $arr['cartprice'];
    	$result=$cart->add($arr);
    	$this->redirect('/Goods/showcart');
    	

    }
    //展示购物车内容
    public function showcart(){
    	$cart=M('cart');
    	$uid=$_SESSION['user'][0]['id'];
    	$data=$cart->where('uid='.$uid)->select();
        $_SESSION['cart'] = $data;
    	$this->assign('cart',$data);
        
        if(!isset($_SESSION['cart'])){
            $msg = 1;
        }else{
            $msg = 0;
        }
        $this -> assign('msg',$msg);

    	$this->display();
 

    }
    //删除购物车里面的商品
    public function cartdel(){
    	$cart=M('cart');
    	$id=$_GET['id'];
    	$sql=$cart->where('id='.$id)->delete();
    	if($sql){
    			$this->success('删除成功');
    	}else{
    			$this->error('删除失败');
    	}
    	
    }
    //商品收藏控制器
    public function collect(){
    	if(empty($_SESSION['user'])){
    		$this->redirect('Login/index');
    	}
    	$collect=M('goodscollect');
    	$id=$_GET['gid'];
    	$data['gid']=$_GET['gid'];
    	$data['uid']=$_SESSION['user'][0]['id'];
    	$data['goodsname']=$_GET['goodsname'];
    	$data['collecttime']=time();
    	$collect->add($data);
    	$this->redirect('Goods/index',array('id'=>$id),2,'收藏成功');
    	
    }

}