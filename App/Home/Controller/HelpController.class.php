<?php

namespace Home\Controller;
use Think\Controller;
class HelpController extends Controller{
    public function index(){
        $help = M('help');       

        $data = $help ->field('id,title,content,time') -> order('id DESC') -> select();

        $this -> assign('help',$data);

        $this-> display();
    }


    public function content(){
        $id = I('id');
    	$help = M('help');
    	$data = $help -> field('id ,content,title,time') -> where('id='.$id)-> select();
    	$this ->assign('help',$data);
    	$this -> display();
    }

 
}