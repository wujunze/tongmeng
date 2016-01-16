<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0048)http://www.kaisenbuy.com/flow.php?step=consignee -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="Keywords" content="">
<meta name="Description" content="">
<title><?php echo ($config['title']); ?></title>
<link rel="icon" href="/favicon.png">
<link href="/tongmeng/Public/Home/Css/m_base.css" rel="stylesheet" type="text/css">
<link href="/tongmeng/Public/Home/Css/m_style.css" rel="stylesheet" type="text/css">
<link href="/tongmeng/Public/Home/Css/m_slider.css" rel="stylesheet" type="text/css">
<link href="/tongmeng/Public/Home/Css/m_flex.css" rel="stylesheet" type="text/css">
<link href="/tongmeng/Public/Home/Css/style.css" rel="stylesheet" type="text/css">

<script charset="utf-8" src="/tongmeng/Public/Home/Js/v.js"></script>
<script src="/tongmeng/Public/Home/Js/hm.js"></script>
<script type="text/javascript" src="/tongmeng/Public/Home/Js/common.js"></script>
<script type="text/javascript" src="/tongmeng/Public/Home/Js/shopping_flow.js"></script>  <style type="text/css">
    .tb2 {color:#A20000;}
  </style>
<script type="text/javascript">
function setBgColor(ele)
{
  for (var i = 0; i < ele.parentNode.rows.length; i++)
  {
	ele.parentNode.rows[i].className = 'tb1';
  }

  ele.className = 'tb2';
}
</script>
</head>
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
<div class="night_bg">
<div class="clear"></div>
<div class="block">    
         <div class="tc"><img src="/tongmeng/Public/Home/Img/grey.gif" class="tc_bg_02"></div>
<div class="blank"></div>
        <script type="text/javascript" src="/tongmeng/Public/Home/Js/region.js"></script>        <script type="text/javascript">
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
                <form action="/tongmeng/index.php/Order/addr" method="post" name="theForm" id="theForm" onsubmit="return checkConsignee(this)">
        <div class="flowBox">
<h6><span>收货人信息</span></h6>
<script type="text/javascript" src="/tongmeng/Public/Home/Js/transport.js"></script><table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tbody><tr>
   <td>
    <table width="90%" align="center" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
    
  <tbody><tr>
    <td bgcolor="#ffffff">配送区域:</td>
    <td colspan="3" bgcolor="#ffffff">
    <?php echo ($city); ?>
    (必填) </td>
  </tr>
    <tr>
    <td bgcolor="#ffffff">收货人姓名:</td>
    <td bgcolor="#ffffff"><input name="name" type="text" class="inputBg" id="consignee_0" value="<?php echo ($_SESSION['userdetail'][0]['name']); ?>">
    (必填) </td>
    <td bgcolor="#ffffff">电话:</td>
    <td bgcolor="#ffffff"><input name="tel" type="text" class="inputBg" id="tel_0" value="<?php echo ($_SESSION['userdetail'][0]['tel']); ?>">
    (必填)</td>
  </tr>
    
  <tr>
    <td bgcolor="#ffffff">详细地址:</td>
    <td bgcolor="#ffffff"><input name="address" type="text" class="inputBg" id="address_0" value="">
    (必填)</td>
    <td bgcolor="#ffffff">邮政编码:</td>
    <td bgcolor="#ffffff"><input name="postcode" type="text" class="inputBg" id="zipcode_0" value=""></td>
  </tr>
    <tr>
    <td colspan="4" align="center" bgcolor="#ffffff">
    <input type="submit" name="Submit" class="bnt_blue_2" value="配送至这个地址">
      </td>
  </tr>
</tbody></table></td>
  </tr>
</tbody></table>
</div>
</form>
</div>
<div class="blank5"></div>
</div>
<script type="text/javascript">
var process_request = "正在处理您的请求...";
var msg_telphone_blank = " - 手机号不能为空";
var msg_telphone_registered = " - 手机号已存在,请重新输入";
var msg_telphone_format = " - 手机号码不合法";
var username_empty = "- 用户名不能为空。";
var username_shorter = "- 用户名长度不能少于 3 个字符。";
var username_invalid = "- 用户名只能是由字母数字以及下划线组成。";
var password_empty = "- 登录密码不能为空。";
var password_shorter = "- 登录密码不能少于 6 个字符。";
var confirm_password_invalid = "- 两次输入密码不一致";
var email_empty = "- Email 为空";
var email_invalid = "- Email 不是合法的地址";
var agreement = "- 您没有接受协议";
var msn_invalid = "- msn地址不是一个有效的邮件地址";
var qq_invalid = "- QQ号码不是一个有效的号码";
var home_phone_invalid = "- 家庭电话不是一个有效号码";
var office_phone_invalid = "- 办公电话不是一个有效号码";
var mobile_phone_invalid = "- 手机号码不是一个有效号码";
var msg_un_blank = "* 用户名不能为空";
var msg_un_length = "* 用户名最长不得超过7个汉字";
var msg_un_format = "* 用户名含有非法字符";
var msg_un_registered = "* 用户名已经存在,请重新输入";
var msg_can_rg = "* 可以注册";
var msg_email_blank = "* 邮件地址不能为空";
var msg_email_registered = "* 邮箱已存在,请重新输入";
var msg_email_format = "* 邮件地址不合法";
var msg_blank = "不能为空";
var no_select_question = "- 您没有完成密码提示问题的操作";
var passwd_balnk = "- 密码中不能包含空格";
var username_exist = "用户名 %s 已经存在";
var compare_no_goods = "您没有选定任何需要比较的商品或者比较的商品数少于 2 个。";
var btn_buy = "购买";
var is_cancel = "取消";
var select_spe = "请选择商品属性";
</script>
<?php echo W('Skins/bottom');?>
</body></html>