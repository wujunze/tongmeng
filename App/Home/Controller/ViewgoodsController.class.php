<?php
/*
author：wangyong	
2015-07-17
商品展示页面
*/

namespace Home\Controller;
use Think\Controller;
class ViewgoodsController extends Controller{

public function index(){
	//实例化商品分类表
	$goodstypes = M('goodstype');

	//查询字段为判断用
	$data = $goodstypes -> field("id,name,pid,path") -> select();

	//传值给下拉框 获得ID所选的类对比用
	$this -> assign("goodstypes",$data);

  //获得下拉框所选的商品品牌的ID值
  $id = I('id');

  //实例化商品表
  $goods = M('goods'); //商品
  	
  //获得商品表中的TID 和 传过来的ID对比 是否是品牌下的商品
  $res['tid'] = $id;


  $count = $goods->where($res)->count();// 查询满足要求的总记录数
  $Page  = new \Think\Page($count,9);// 实例化分页类 传入总记录数和每页显示的记录数(25)


  //查询商品表下该品牌下的所有的商品
  $result = $goods -> where($res)-> limit("{$Page->firstRow},{$Page->listRows}") -> select();

  $show = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
  $this->assign('list',$list);// 赋值数据集
  $this->assign('page',$show);// 赋值分页输出


  //传值
  $this -> assign('goods',$result);

  //返回视图
  $this -> display();

  }



}//类的结束符




