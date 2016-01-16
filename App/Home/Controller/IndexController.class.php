<?php
/**
 * @Author: IT - Pony
 * @Date: 2015-07-11 20:58:01
 * @Email: Admin@Itpony.com
 * @FileName: IndexController.class.php
 * @FilePath: D:\wamp\www\tongmeng\App\Home\Controller\IndexController.class.php
 * @Last Modified by: IT - Pony
 * @Last Modified time: 2015-07-22 15:29:23
 */

namespace Home\Controller;
use Think\Controller;
/**
 * 全局配置
 */

class IndexController extends Controller {
    //网站首页配置
    public function index(){

        //判断网站是否安装
        if(!file_exists(APP_PATH."Lib/install.lock")){
            $this->redirect('Install/index');
        }
        $sql = M('config');
        $Config = $sql -> select();
        $this -> assign('config',$Config[0]);

        //判断网站是否为开启状态
        if($Config[0]['status'] == 0){
            exit('网站升级维护中...');
        }
        $goods=M('goods');
        $data=$goods->limit(0,10)->where('status=1')->select();
        $sale=$goods->limit(0,10)->where('status=1')->order("salesnum DESC")->select();
        //dump($data);
        $this->assign('goods',$data);
        $this->assign('sale',$sale);


        $type=M('goodstype');
        $comment=$type->limit(0,8)->where('pid>0')->select();
        //dump($comment);
        //exit;
        $this->assign('comment',$comment);


        //公告的配置
        $bullentin = M('bullentin');
        $data = $bullentin-> order('id DESC')-> limit('1') ->select();
        $this -> assign('bullentin',$data);
        


        //首页广告条
        $advertisings = M('advertising');
        $res = $advertisings ->order('id DESC') -> limit('1') ->find();
        $this -> assign('advertisings',$res);
      
        $this->display();

    }






}