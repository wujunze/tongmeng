<?php
/**
 * @Author: IT - Pony
 * @Date: 2015-07-20 19:27:27
 * @Email:Admin@Itpony.Com
 * @FileName: OrderController.class.php
 * @FilePath: D:\wamp\www\tongmeng\App\Home\Controller\OrderController.class.php
 * @Last Modified by: IT - Pony
 * @Last Modified time: 2015-07-22 13:44:27
 */

namespace Home\Controller;
use Think\Controller;
use Think\Area;

/**
 * 订单地址管理
 */
class OrderController extends Controller{
    public function index(){
        //判断用户是否登录
        if(empty($_SESSION['user'])){
            $this -> redirect('Login/index');
        }
        //判断是否有收货地址
        $addr = M('address');
        $res = $addr -> where('uid='.$_SESSION['user'][0]['id']) -> select();
        if(!empty($res)){
            $this -> redirect('Order/buy');
        }
    
        //地区显示
        $Area = array("请选择","请选择","请选择");
        $city = Area::city($Area);
        $this -> assign("city",$city);

        
        $this-> display('city');

    }
    public function addr(){
        //接受用户数据
        $province = $_POST['province'];
        $city = $_POST['city'];
        $county = $_POST['county'];
        $address = $_POST['address'];
        $addr['uid'] = $_SESSION['user'][0]['id'];
        $addr['name'] = $_POST['name'];
        $addr['addr'] = $province.'|'.$city.'|'.$county.'|'.$address;
        $addr['telphone'] = $_POST['tel'];
        $addr['postcode'] = $_POST['postcode'];
        $addr['defaultaddr'] = "";

        //写入数据库
        $cart = M('address');
        //判断是否写入成功
        if($cart -> create($addr)){
            $cart -> add();
            $this -> redirect('Order/buy');
        }else{
            $this -> error('订单错误,请重新提交');
        }
    }

    public function buy(){

        header('Content-Type:text/html;charset=utf-8');

        $addr = M('address');
        $res = $addr ->where('uid = '.$_SESSION['user'][0]['id']) ->select();
        
        for($i = 0; $i < count($res) ; $i++){
            $addr = $res[$i]['addr'];
            $arr = explode('|',$addr);
            $res[$i]['addr'] = $arr[0].$arr[1].$arr[2].$arr[3];
        }

        //判断用户是否添加收货地址
        if(!empty($_SESSION['user'])){
            if($res == NULL){
                $this -> error('非法请求');
                $this -> redirect('Order/index');
            }
        }else{
            $this -> redirect('Login/index');
        }
        $this -> assign('addr',$res);

        $_SESSION['buy'] = true;
        
        //商品查询
        $cart = M('cart');
        $shop = $cart -> where('uid = '.$_SESSION['user'][0]['id']) -> select();
        $this -> assign('goods',$shop);
        for ($i=0; $i < count($shop[0]['gid']); $i++) { 
            $good = M('goods');
            $goods = $good -> where('id = '.$shop[$i]['gid']) -> select();
        }

        for ($i=0; $i < count($_SESSION['cart']); $i++) { 
            $goodsprice[$i] = $shop[$i]['cartprice'];
        }
        $price = array_sum($goodsprice);
        $this -> assign('price',$price);

        $this -> display('buy');

    }
}
