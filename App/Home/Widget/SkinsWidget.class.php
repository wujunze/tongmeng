<?php
/**
 * @Author: IT - Pony
 * @Date: 2015-07-11 22:06:13
 * @Email: Admin@Itpony.com
 * @FileName: SkinsWidget.class.php
 * @FilePath: D:\wamp\www\tongmeng\App\Home\Widget\SkinsWidget.class.php
 * @Last Modified by: IT - Pony
 * @Last Modified time: 2015-07-22 15:36:08
 */
namespace Home\Widget;
use Think\Controller;

/**
 * 模版文件
 */
class SkinsWidget extends Controller {
    //加载网站顶部
    public function head(){
        $sql = M('config');
        $Config = $sql -> select();
        $this -> assign('config',$Config[0]);
        $sql = M('navigate');
        $nav = $sql -> select();
        $this -> assign('navs',$nav);
        $userdetail = M('userdetail');

        $cart = M('cart');
        $data = $cart -> where("uid = ".$_SESSION['user'][0]['id']) -> count();
        $this -> assign('cartNum',$data);
        $this->display('Index:head');
    }
    //加载网站底部
    public function bottom(){
        $sql = M('config');
        $Config = $sql -> select();
        $this -> assign('config',$Config[0]);
        $sql = M('link');
        $link = $sql -> select();
        $this -> assign('links',$link);
        $this -> display('Index:bottom');
    }
    //用户登录信息
    public function uinfo(){
        $user = M('userdetail');
        $detail = $user -> where('id = '.$_SESSION['user'][0]['id']) -> select();
        $this -> assign('detail',$detail);

        //判断用户是否登录
        if(!empty($_SESSION['user'])){

            $this -> display('Index:uinfo');
        }else{
            $this -> display('Index:ulogin');
        }
    }
    //商品分类展示
    public function navlist(){
        $goodstype = M('goodstype');
        $data = $goodstype -> field("id,name,pid,path,concat(path,'-',id) as npth")->order("npth")-> select();
         $newdata = unLimitedForLayer($data);
        //dump($newdata);
        $this->assign('type',$newdata);
        $this -> display('Index:navlist');
        
       
       
    }
}