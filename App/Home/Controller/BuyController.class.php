<?php
/**
 * @Author: IT - Pony
 * @Date: 2015-07-22 10:49:23
 * @Email:Admin@Itpony.Com
 * @FileName: BuyController.class.php
 * @FilePath: D:\wamp\www\tongmeng\App\Home\Controller\BuyController.class.php
 * @Last Modified by: IT - Pony
 * @Last Modified time: 2015-07-22 14:50:50
 */

namespace Home\Controller;
use Think\Controller;

/**
 * 生成订单号,从购物车删除已购买条数
 */
class BuyController extends Controller{
    public function index(){
        
        // 写入订单
        $order = M('order');
        for($i = 0;$i < count($_SESSION['cart']);$i++){

            $data['uid'] = $_SESSION['user'][0]['id'];
            $data['gid'] = $_SESSION['cart'][$i]['gid'];
            $data['ordernumber'] = date('YmdHis').rand('99999');
            $data['good'] = $_SESSION['cart'][$i]['goodsname'];
            $data['unitprice'] = $_SESSION['cart'][$i]['goodsprice'];
            $data['num'] = $_SESSION['cart'][$i]['number'];
            $data['totalprice'] = $_SESSION['cart'][$i]['cartprice'];
            $data['ordertime'] = time();
            $data['addr'] = $_POST['addr'];
            $data['ispay'] = 1;
            $order -> add($data);
            $_SESSION['carts'][$i] = $data['gid'];
        }

        // //从购物车删除
        $cart = M('cart');
        $shop = $cart -> where('uid = '.$_SESSION['user'][0]['id']) -> select();
        

        //用户付款处理
        $userdetail = M('userdetail');
        $detail = $userdetail -> where('uid ='.$_SESSION['user'][0]['id']) -> select();
        //遍历用户余额
        foreach($detail as $value){
            $res = $value['money'];
        }
        //遍历商品总价
        for ($i=0; $i < count($shop); $i++) { 
            $goodsprice[$i] = $shop[$i]['cartprice'];
        }

        // 计算商品总价
        $price = array_sum($goodsprice);

        // 计算余额
        $Price['money'] = $res - $price;

        //判断用户余额
        if($res < $price){
            $this -> error('您的账户余额不足,请充值!');
        }

        if($res < 0){
            $this -> error('您的账户余额不足,请充值!');
        }
        $userdetail -> where('uid ='.$_SESSION['user'][0]['id']) -> save($Price);

        //删除购物车商品
        for ($i=0; $i < count($_SESSION['cart']); $i++) { 
           $gid[$i] = $_SESSION['cart'][$i]['gid'];
           $res[$i] = $cart -> where("gid = ".$gid[$i]) -> delete();
           if($res[$i] == 0){
                unset($_SESSION['cart'][$i]);
           }
        }

        //支付完成跳转
        $this -> success('已完成付款',__APP__.'/MyOrder/myorder');
    }
}

