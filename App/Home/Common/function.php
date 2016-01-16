<?php
//打印数组函数
     function p($array){
     dump($array,1,'<pre>',0);
   }



//实现无限极分类
 function unLimitedForLayer($cate,$name='child',$pid=0){
	$arr=array();
	foreach($cate as $v){
	  if($v['pid'] == $pid){
	   $v[$name] = unLimitedForLayer($cate,$name,$v['id']);
	   $arr[] = $v;
	  }
	}
	 return $arr;
  }

?>