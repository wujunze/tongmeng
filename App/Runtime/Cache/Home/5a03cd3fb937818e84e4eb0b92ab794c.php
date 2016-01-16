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
<a href="http://www.kaisenbuy.com/user.php?act=order_list"><img src="/tongmeng/Public/Home/Img/u3.gif"> 我的订单</a>
<a href="/tongmeng/Public/Home/Img/shouhuodizhi.html" class="curs"><img src="/tongmeng/Public/Home/Img/u4.gif"> 收货地址</a>
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
              <h5><span>收货人信息</span></h5>
        <div class="blank"></div>
         
            <script type="text/javascript" src="/tongmeng/Public/jS/transport.js"></script><script type="text/javascript" src="/tongmeng/Public/jS/region.js"></script><script type="text/javascript" src="/tongmeng/Public/jS/shopping_flow.js"></script>            <script type="text/javascript">
              region.isAdmin = false;
                            var consignee_not_null = "收货人姓名不能为空！";
                            var country_not_null = "请您选择收货人所在国家！";
                            var province_not_null = "请您选择收货人所在省份！";
                            var city_not_null = "请您选择收货人所在城市！";
                            var district_not_null = "请您选择收货人所在区域！";
                            var invalid_email = "您输入的邮件地址不是一个合法的邮件地址。";
                            var address_not_null = "收货人的详细地址不能为空！";
                            var tele_not_null = "电话不能为空！";
                            var shipping_not_null = "请您选择配送方式！";
                            var payment_not_null = "请您选择支付方式！";
                            var goodsattr_style = "1";
                            var tele_invaild = "电话号码不有效的号码";
                            var zip_not_num = "邮政编码只能填写数字";
                            var mobile_invaild = "手机号码不是合法号码";
                            
              onload = function() {
                if (!document.all)
                {
                  document.forms['theForm'].reset();
                }
              }
              
            </script>
                        <form action="http://www.kaisenbuy.com/user.php" method="post" name="theForm" onsubmit="return checkConsignee(this)">
              <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
                <tbody><tr>
                  <td align="right" bgcolor="#ffffff">配送区域：</td>
                  <td colspan="3" align="left" bgcolor="#ffffff"><select name="country" id="selCountries_0" onchange="region.changed(this, 1, &#39;selProvinces_0&#39;)">
                      <option value="0">请选择国家</option>
                                            <option value="1" selected="">中国</option>
                                          </select>
                    <select name="province" id="selProvinces_0" onchange="region.changed(this, 2, &#39;selCities_0&#39;)">
                      <option value="0">请选择省</option>
                                            <option value="2">北京</option>
                                            <option value="3">安徽</option>
                                            <option value="4">福建</option>
                                            <option value="5">甘肃</option>
                                            <option value="6">广东</option>
                                            <option value="7">广西</option>
                                            <option value="8">贵州</option>
                                            <option value="9">海南</option>
                                            <option value="10">河北</option>
                                            <option value="11">河南</option>
                                            <option value="12">黑龙江</option>
                                            <option value="13">湖北</option>
                                            <option value="14">湖南</option>
                                            <option value="15">吉林</option>
                                            <option value="16">江苏</option>
                                            <option value="17">江西</option>
                                            <option value="18">辽宁</option>
                                            <option value="19">内蒙古</option>
                                            <option value="20">宁夏</option>
                                            <option value="21">青海</option>
                                            <option value="22">山东</option>
                                            <option value="23">山西</option>
                                            <option value="24">陕西</option>
                                            <option value="25">上海</option>
                                            <option value="26">四川</option>
                                            <option value="27">天津</option>
                                            <option value="28">西藏</option>
                                            <option value="29">新疆</option>
                                            <option value="30">云南</option>
                                            <option value="31">浙江</option>
                                            <option value="32">重庆</option>
                                            <option value="33">香港</option>
                                            <option value="34">澳门</option>
                                            <option value="35">台湾</option>
                                          </select>
                    <select name="city" id="selCities_0" onchange="region.changed(this, 3, &#39;selDistricts_0&#39;)">
                      <option value="0">请选择市</option>
                                          </select>
                    <select name="district" id="selDistricts_0" style="display:none">
                      <option value="0">请选择区</option>
                                          </select>
                  (必填) </td>
                </tr>
                <tr>
                  <td align="right" bgcolor="#ffffff">收货人姓名：</td>
                  <td align="left" bgcolor="#ffffff"><input name="consignee" type="text" class="inputBg" id="consignee_0" value="">
                  (必填) </td>
                  <td align="right" bgcolor="#ffffff">电子邮件地址：</td>
                  <td align="left" bgcolor="#ffffff"><input name="email" type="text" class="inputBg" id="email_0" value="admin@qq.com">
                  (必填)</td>
                </tr>
                <tr>
                  <td align="right" bgcolor="#ffffff">详细地址：</td>
                  <td align="left" bgcolor="#ffffff"><input name="address" type="text" class="inputBg" id="address_0" value="">
                  (必填)</td>
                  <td align="right" bgcolor="#ffffff">邮政编码：</td>
                  <td align="left" bgcolor="#ffffff"><input name="zipcode" type="text" class="inputBg" id="zipcode_0" value=""></td>
                </tr>
                <tr>
                  <td align="right" bgcolor="#ffffff">电话：</td>
                  <td align="left" bgcolor="#ffffff"><input name="tel" type="text" class="inputBg" id="tel_0" value="">
                  (必填)</td>
                  <td align="right" bgcolor="#ffffff">手机：</td>
                  <td align="left" bgcolor="#ffffff"><input name="mobile" type="text" class="inputBg" id="mobile_0" value=""></td>
                </tr>
                <tr>
                  <td align="right" bgcolor="#ffffff">标志建筑：</td>
                  <td align="left" bgcolor="#ffffff"><input name="sign_building" type="text" class="inputBg" id="sign_building_0" value=""></td>
                  <td align="right" bgcolor="#ffffff">最佳送货时间：</td>
                  <td align="left" bgcolor="#ffffff"><input name="best_time" type="text" class="inputBg" id="best_time_0" value=""></td>
                </tr>
                <tr>
                  <td align="right" bgcolor="#ffffff">&nbsp;</td>
                  <td colspan="3" align="center" bgcolor="#ffffff">                    <input type="submit" name="submit" class="bnt_blue_2" value="新增收货地址">
                                        <input type="hidden" name="act" value="act_edit_address">
                    <input name="address_id" type="hidden" value="">
                  </td>
                </tr>
              </tbody></table>
            </form>
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