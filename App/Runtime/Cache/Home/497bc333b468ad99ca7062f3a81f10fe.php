<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <meta property="qc:admins" content="174257777763113562516375">
  <title></title>
  <link rel="shortcut icon" href="http://www.kaisenbuy.com/favicon.ico">
  <link rel="icon" href="http://www.kaisenbuy.com/animated_favicon.gif" type="image/gif">
  <link href="/tongmeng/Public/Home/Css/m_base.css" rel="stylesheet" type="text/css">
  <link href="/tongmeng/Public/Home/Css/m_flex.css" rel="stylesheet" type="text/css">
  <link href="/tongmeng/Public/Home/Css/all_list.css" rel="stylesheet" type="text/css">
  <script charset="utf-8" src="/tongmeng/Public/Home/Js/v.js"></script>
  <script src="/tongmeng/Public/Home/Js/hm.js"></script>
  <script type="text/javascript" src="/tongmeng/Public/Home/Js/jquery.pack.js"></script>
  <script type="text/javascript" src="/tongmeng/Public/Home/Js/jQuery.blockUI.js"></script>
  <script type="text/javascript" src="/tongmeng/Public/Home/Js/jquery.SuperSlide.js"></script>
  <script type="text/javascript" src="/tongmeng/Public/Home/Js/jquery.hoverdelay.js"></script>
  <style type="text/css">
        .menu{
          font-size:17px;
          background-color:#b3002a;
          color:#FFF;
          text-align:center;
          font-weight:bold;
        }

        .olbg{
          /*background-color:#c9043c;*/
          background-color: #fff;
          color:#FFF;
        }
        .alinks{
          display:block; 
          border-bottom:1px dashed #000;
        }
        .listyle{
          font-size:13px;
          color:#000;
        }
  
  </style>
</head>
<body class="w1200">
<!-- 加载顶部文件 -->
<?php echo W("Skins/head");?>
<div style="width:100%;height:auto;overflow: hidden;margin-top:12px;">
<div class="list_main">
<div class="list_main_Left">
<div class="cate_menu">
</div>
<!--类型1-->



        
         <ul style="background-color:grey;">
        
          <li onclick="doClick(this)" class="menu" >电子玩具
      
              <ol class="olbg">
                  <?php if(is_array($goodstypes)): foreach($goodstypes as $key=>$data): if($data['pid'] == 1): ?><a class="alinks" href="/tongmeng/index.php/Search/index/id/<?php echo ($data['id']); ?>">
                  <li class="listyle"><?php echo ($data['name']); ?></li>
                  </a><?php endif; endforeach; endif; ?>
              </ol>
          </li>


           <li onclick="doClick(this)" class="menu">开发智力
      
              <ol class="olbg">
                  <?php if(is_array($goodstypes)): foreach($goodstypes as $key=>$data): if($data['pid'] == 39): ?><a class="alinks" href="/tongmeng/index.php/Search/index/id/<?php echo ($data['id']); ?>">
                  <li class="listyle"><?php echo ($data['name']); ?></li>
                  </a><?php endif; endforeach; endif; ?>
              </ol>


          </li><li onclick="doClick(this)" class="menu">其他类型
      
              <ol class="olbg">
                  <?php if(is_array($goodstypes)): foreach($goodstypes as $key=>$data): if($data['pid'] == 48): ?><a class="alinks" href="/tongmeng/index.php/Search/index/id/<?php echo ($data['id']); ?>">
                  <li class="listyle"><?php echo ($data['name']); ?></li>
                  </a><?php endif; endforeach; endif; ?>
              </ol>
          </li>

           </li><li onclick="doClick(this)" class="menu">金属玩具
      
              <ol class="olbg">
                  <?php if(is_array($goodstypes)): foreach($goodstypes as $key=>$data): if($data['pid'] == 43): ?><a class="alinks" href="/tongmeng/index.php/Search/index/id/<?php echo ($data['id']); ?>">
                  <li class="listyle"><?php echo ($data['name']); ?></li>
                  </a><?php endif; endforeach; endif; ?>
              </ol>
          </li>

      
      </ul> 
  



    <!--   <ul>
     <?php if(is_array($goodstypes)): foreach($goodstypes as $key=>$goodsOne): ?><li style="font-size:20px;" onclick="doClick(this)"><?php echo ($goodsOne['name']); ?>
    
            <?php if(is_array($goodsOne)): foreach($goodsOne as $k=>$goodsTwo): if(is_int($k)): ?><ol style="display: block;">
                     <li style="font-size:15px;"><?php echo ($goodsTwo['name']); ?></li>
                  </ol><?php endif; endforeach; endif; ?>    
            </li><?php endforeach; endif; ?> 
    </ul> -->


        <script type="text/javascript">
           //定义事件处理函数
           function doClick(ob){
               //获取当前li中的ol节点
               var ol = ob.getElementsByTagName("ol")[0];
               //判断是否不可见
               if(ol.style.display!="block"){
                    //设置显示
                    ol.style.display="block";
               }else{
                    //设置隐藏
                    ol.style.display="none";
               }
           }
        </script>

 


<div class="category_top10">
<div class="category_tree_title category_paihang_title">热销排行榜</div>
<ul class="category_paihang" style="padding-bottom:0px;">
  <li>
  <div class="paihang_pic">
  <div class="paihang_num">1</div>
  <a href="" title="SYMA司马航模 S105G可充电耐摔遥控飞机三通道双桨遥控直升机玩具儿童礼物"><img src="/tongmeng/Public/Home/Img/276_thumb_G_1428892742185.jpg" style="background:url(/style/red/images/loading.gif) no-repeat center center;" alt="SYMA司马航模 S105G可充电耐摔遥控飞机三通道双桨遥控直升机玩具儿童礼物" width="200" height="200" border="0"></a>
  </div>
  <div class="paihang_nr">
  <span class="paihang_nrName"><a href="" title="SYMA司马航模 S105G可充电耐摔遥控飞机三通道双桨遥控直升机玩具儿童礼物">SYMA司马航模 S105G可充电耐摔遥控飞机三通道双桨遥控直升机玩具儿童礼物</span>
  <span class="paihang_nrmonery2">售价：79</span>
  <span class="paihang_nrmoney1">644 人已买</span>
  </div>
  </li>
</ul>
<div style="height:10px; "></div>
</div> 
 
 
</div>
 
<div class="list_main_Right">
<div style="text-align:right"><div class="">
 <div id="ur_here">
LOCATIONG : <a href="">首页</a> <code>&gt;</code> <a href="http://www.kaisenbuy.com/category-293-b0.html">玩具类型</a> <code>&gt;</code> <a href="http://www.kaisenbuy.com/category-295-b0.html">遥控系列</a> 
</div>
</div>
<div class="blank5"></div></div>
<div class="ju-filter">
<div class="ju-category">
<div class="filter-cat clearfix">
<div class="filter-fr">
</div></div>
</div></div>




<div class="gallery_all">


 <?php if(is_array($goods)): foreach($goods as $key=>$result): ?><div class="gallery">
<div class="product">
<ul>
  <li class="pro_imgli" style="position: relative; display: block;">
      <a href="<?php echo U('Goods/index',array('id'=>$result['id']));?>" title="童梦网欢迎你" target="_blank">
            <img src="/tongmeng/Public/<?php echo ($result['goodspic']); ?>" style="background:url(/style/red/images/loading.gif) no-repeat center center;" alt="" border="0">
       </a>
  </li> 
 </ul>


</div>
    <div class="product_name">
       <a target="_blank" href="" title="童梦网欢迎你" style="font-size:15px; font-weight:bold;">
         <?php echo ($result['goodsname']); ?>
       </a>
    </div>

<div class="hd">
<ul>
  
<li class="on"><a href="javascript:void(0);"><img src="/tongmeng/Public/<?php echo ($result['goodspic']); ?>" width="42" border="0" title=""></a></li>
 
 </ul>
</div>
<div class="product_money">
<div class="item-prices"><span class="price"><i>¥</i><em>
          <?php echo ($result['price']); ?>          </em></span>
<div class="dock"><del class="orig-price">¥9881</del></div>
<span class="sold-num"><em>
<?php echo ($result['salesnum']); ?></em> 人已买</span></div>
</div>
</div>

<!--循环--><?php endforeach; endif; ?>



</div>




<!-- <form name="selectPageForm" action="" method="get">
      <div class="paixu">
        <span class="paixu_page">
  总计 <b>10</b>  个记录&nbsp;&nbsp;
         <a href="javascript:void(0);">上一页</a>
         <a href="$show">下一页</a>
         <a href="">最末页</a></span>
      </div>
</form>  -->

 <center style='font-size:20px; color:red; font-weight:bolder;'><?php echo ($page); ?></center>
</div>
</div>
</div>
<script src="/tongmeng/Public/Home/Js/list.js"></script>
<!-- 加载底部文件 -->
<?php echo W("Skins/bottom");?>
</body>
</html>