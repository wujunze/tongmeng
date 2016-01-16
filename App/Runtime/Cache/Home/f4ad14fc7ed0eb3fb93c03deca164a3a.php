<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="Keywords" content="">
<meta name="Description" content="">
<title></title>
<link rel="icon" href="/favicon.png">
<link href="/tongmeng/Public/Home/Css/m_base.css" rel="stylesheet" type="text/css">
<link href="/tongmeng/Public/Home/Css/m_style.css" rel="stylesheet" type="text/css">
<link href="/tongmeng/Public/Home/Css/m_slider.css" rel="stylesheet" type="text/css">
<link href="/tongmeng/Public/Home/Css/m_flex.css" rel="stylesheet" type="text/css">
<link href="/tongmeng/Public/Home/Css/new_order_member.css" rel="stylesheet" type="text/css">
<link href="/tongmeng/Public/Home/Css/style.css" rel="stylesheet" type="text/css">

<script charset="utf-8" src="/tongmeng/Public/Home/Js/v.js"></script><script src="/tongmeng/Public/Home/Js/hm.js"></script><script type="text/javascript" src="/tongmeng/Public/Home/Js/common.js"></script><script type="text/javascript" src="/tongmeng/Public/Home/Js/user.js"></script></head>
<body class="w1200">
<script type="text/javascript">
var isWidescreen=screen.width>=1280;
if (isWidescreen){document.getElementsByTagName("body")[0].className="w1200";}
</script>
<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<script type="text/javascript" src="/tongmeng/Public/Home/Js/jquery-1.7.2.min.js"></script>
<!--[if IE 6]>
<div id="yellowtip" style="width: 100%; background-color: rgb(254, 246, 227); border-top-width: 1px; border-bottom-width: 1px; border-style: solid none; border-top-color: rgb(229, 205, 150); border-bottom-color: rgb(229, 205, 150); height: 33px; min-width: 920px; z-index: 99999; background-position: initial initial; background-repeat: initial initial;">
<div style="margin:0 auto;width:900px;line-height:33px;text-align:center;color:#82654D;">温馨提示：尊敬的用户，现在检测到您正在使用IE6浏览器。为了确保您的购物安全和更好的用户体验，请<a class="se6_download" style="color:#1C79A1" href="http://chrome.360.cn/" target="_blank">下载360极速浏览器</a>或者升级更高版本的IE浏览器</div>
<div id="yellowtipclose" style="display:none;"></div>
</div>
<![endif]-->
<?php echo W('Skins/head');?>
<div class="block clearfix">
<div class="">

 <div id="ur_here">
LOCATIONG : <a href="/tongmeng/index.php">首页</a> <code>&gt;</code> 用户中心 
</div>
</div>
<div class="blank5"></div>  
  <div class="AreaL">
    <div class="box">
     <div class="box_1">
      <div class="userCenterBox">
        <div class="userMenu">
<a href="http://www.kaisenbuy.com/user.php"><img src="/tongmeng/Public/Home/Img/u1.gif"> 欢迎页</a>
<a href="http://www.kaisenbuy.com/user.php?act=profile"><img src="/tongmeng/Public/Home/Img/u2.gif"> 用户信息</a>
<a href="/tongmeng/Public/Home/Img/dingdan！.html" class="curs"><img src="/tongmeng/Public/Home/Img/u3.gif"> 我的订单</a>
<a href="http://www.kaisenbuy.com/user.php?act=address_list"><img src="/tongmeng/Public/Home/Img/u4.gif"> 收货地址</a>
<a href="http://www.kaisenbuy.com/user.php?act=collection_list"><img src="/tongmeng/Public/Home/Img/u5.gif"> 我的收藏</a>
<a href="http://www.kaisenbuy.com/user.php?act=message_list"><img src="/tongmeng/Public/Home/Img/u6.gif"> 我的留言</a>
<a href="http://www.kaisenbuy.com/user.php?act=tag_list"><img src="/tongmeng/Public/Home/Img/u7.gif"> 我的标签</a>
<a href="http://www.kaisenbuy.com/user.php?act=booking_list"><img src="/tongmeng/Public/Home/Img/u8.gif"> 缺货登记</a>
<a href="http://www.kaisenbuy.com/user.php?act=bonus"><img src="/tongmeng/Public/Home/Img/u9.gif"> 我的红包</a>
<a href="http://www.kaisenbuy.com/user.php?act=affiliate"><img src="/tongmeng/Public/Home/Img/u10.gif"> 我的推荐</a><a href="http://www.kaisenbuy.com/user.php?act=comment_list"><img src="/tongmeng/Public/Home/Img/u11.gif"> 我的评论</a>
<!--<a href="user.php?act=group_buy">我的团购</a>-->
<a href="http://www.kaisenbuy.com/user.php?act=track_packages"><img src="/tongmeng/Public/Home/Img/u12.gif"> 跟踪包裹</a>
<a href="http://www.kaisenbuy.com/user.php?act=account_log"><img src="/tongmeng/Public/Home/Img/u13.gif"> 资金管理</a>
<a href="http://www.kaisenbuy.com/user.php?act=logout" style="background:none; text-align:right; margin-right:10px;"><img src="/tongmeng/Public/Home/Img/bnt_sign.gif"></a>
</div>      </div>
     </div>
    </div>
  </div>
  <div class="AreaR">
    <div class="box">
     <div class="box_1">
      <div class="userCenterBox boxCenterList clearfix" style="_height:1%;">
              <h5><span>我的订单</span></h5>
　<div class="blank"></div>
<div id="J_Remide" class="remide-box"> 
    <h3 style=" width:100px;line-height:30px;background:none">我的交易提醒：</h3>
    <ul> 
      <li><a href="http://www.kaisenbuy.com/user.php?act=order_list&composite_status=0">未确认订单<span class="num">(0)</span></a></li> 
      <li><a href="http://www.kaisenbuy.com/user.php?act=order_list&composite_status=100">待付款<span class="num">(0)</span></a></li> 
      <li><a href="http://www.kaisenbuy.com/user.php?act=order_list&composite_status=101">待发货<span class="num">(0)</span></a></li> 
      <li><a href="http://www.kaisenbuy.com/user.php?act=order_list&composite_status=102">已成交订单数<span class="num">(0)</span></a></li> 
    </ul> 
    </div>
  <div class="blank"></div>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="bought-table">
  <thead>
  <tr class="col-name">
    <th width="32%">宝贝</th>
    <th width="11%">属性</th>
    <th width="11%">单价(元)</th>
    <th width="7%">数量</th>
    <th width="6%">售后</th>
    <th width="13%">订单总金额</th>
    <th width="10%">状态</th>
    <th width="10%">操作</th>
    </tr>
  </thead>

  </table>
　        <div class="blank5"></div>
       
<form name="selectPageForm" action="http://www.kaisenbuy.com/user.php" method="get">


			<div class="paixu">
				<span class="paixu_page">
	总计 <b>0</b>  个记录&nbsp;&nbsp;
         <a href="javascript:void(0);">上一页</a>	       
                        							   
            <a href="javascript:void(0);">下一页</a></span>
			</div>
 


</form>
<script type="Text/Javascript" language="JavaScript">
<!--

function selectPage(sel)
{
  sel.form.submit();
}

//-->
</script>
      </div>
     </div>
    </div>
  </div>
  
</div>
<div class="blank"></div>
<?php echo W('Skins/bottom');?>
<script type="text/javascript">
var msg_title_empty = "留言标题为空";
var msg_content_empty = "留言内容为空";
var msg_title_limit = "留言标题不能超过200个字";
</script>

</body></html>