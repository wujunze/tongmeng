<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta name="Keywords" content="">
<meta name="Description" content="">
<title></title>
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
<script type="text/javascript" src="./order_files/jquery-1.7.2.min.js"></script>
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
<script type="text/javascript" src="./order_files/user.js"></script>
<script type="text/javascript">
      var username_not_null = "请您输入用户名。";
      var username_invalid = "您输入了一个无效的用户名。";
      var password_not_null = "请您输入密码。";
      var email_not_null = "请您输入电子邮件。";
      var email_invalid = "您输入的电子邮件不正确。";
      var password_not_same = "您输入的密码和确认密码不一致。";
      var password_lt_six = "密码不能小于6个字符。";

        function checkLoginForm(frm) {
          if (Utils.isEmpty(frm.elements['username'].value)) {
            alert(username_not_null);
            return false;
          }

          if (Utils.isEmpty(frm.elements['password'].value)) {
            alert(password_not_null);
            return false;
          }

          return true;
        }

        function checkSignupForm(frm) {
          if (Utils.isEmpty(frm.elements['username'].value)) {
            alert(username_not_null);
            return false;
          }

          if (Utils.trim(frm.elements['username'].value).match(/^\s*$|^c:\\con\\con$|[%,\'\*\"\s\t\<\>\&\\]/))
          {
            alert(username_invalid);
            return false;
          }

          if (Utils.isEmpty(frm.elements['email'].value)) {
            alert(email_not_null);
            return false;
          }

          if (!Utils.isEmail(frm.elements['email'].value)) {
            alert(email_invalid);
            return false;
          }

          if (Utils.isEmpty(frm.elements['password'].value)) {
            alert(password_not_null);
            return false;
          }

          if (frm.elements['password'].value.length < 6) {
            alert(password_lt_six);
            return false;
          }

          if (frm.elements['password'].value != frm.elements['confirm_password'].value) {
            alert(password_not_same);
            return false;
          }
          return true;
        }
        
        </script>
        
          <div><img src="/tongmeng/Public/Home/Img/grey.gif" class="tc_bg_01"></div>
<div class="blank"></div>
         <div class="flowBox" style="border:none;">
        <table width="100%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
          <tbody><tr>
            <td width="50%" valign="top" bgcolor="#ffffff">
            <h6><span>用户登录：</span></h6>
            <form action="/tongmeng/Public/Home/Img/order.html" method="post" name="loginForm" id="loginForm" onsubmit="return checkLoginForm(this)">
                <table width="90%" border="0" cellpadding="8" cellspacing="0" bgcolor="#B0D8FF" class="table">
                  <tbody><tr>
                    <td bgcolor="#ffffff"><div align="right"><strong>用户名</strong></div></td>
                    <td bgcolor="#ffffff"><input name="username" type="text" class="inputBg" id="username"></td>
                  </tr>
                  <tr>
                    <td bgcolor="#ffffff"><div align="right"><strong>密码</strong></div></td>
                    <td bgcolor="#ffffff"><input name="password" class="inputBg" type="password"></td>
                  </tr>
                                     <tr>
                <td bgcolor="#ffffff"></td>
            <td bgcolor="#ffffff"><input type="checkbox" value="1" name="remember" id="remember"><label for="remember">请保存我这次的登录信息。</label></td>
          </tr>
                  <tr>
                    <td bgcolor="#ffffff" colspan="2" align="center"><a href="http://www.kaisenbuy.com/user.php?act=qpassword_name" class="f6">密码问题找回密码</a>   <a href="http://www.kaisenbuy.com/user.php?act=get_password" class="f6">注册邮件找回密码</a></td>
                  </tr>

                  <tr>
                  <td bgcolor="#ffffff"></td>
                    <td bgcolor="#ffffff">
                        <input type="submit" class="bnt_blue" name="login" value="登录">
                                                <input name="act" type="hidden" value="signin">
                     </td>
                  </tr>
                </tbody></table>
              </form>

              </td>
            <td valign="top" bgcolor="#ffffff">
            <h6><span>用户注册：</span></h6>
            <form action="/tongmeng/Public/Home/Img/order.html" method="post" name="formUser" id="registerForm" onsubmit="return checkSignupForm(this)">
               <table width="98%" border="0" cellpadding="8" cellspacing="0" bgcolor="#B0D8FF" class="table">
                  <tbody><tr>
                    <td bgcolor="#ffffff" align="right" width="25%"><strong>用户名</strong></td>
                    <td bgcolor="#ffffff"><input name="username" type="text" class="inputBg" id="username" onblur="is_registered(this.value);"><br>
		    <span id="username_notice" style="color:#FF0000"></span></td>
                  </tr>
                  <tr>
                    <td bgcolor="#ffffff" align="right"><strong>电子邮件地址</strong></td>
                    <td bgcolor="#ffffff"><input name="email" type="text" class="inputBg" id="email" onblur="checkEmail(this.value);"><br>
		    <span id="email_notice" style="color:#FF0000"></span></td>
                  </tr>
                  <tr>
                    <td bgcolor="#ffffff" align="right"><strong>密码</strong></td>
                    <td bgcolor="#ffffff"><input name="password" class="inputBg" type="password" id="password1" onblur="check_password(this.value);" onkeyup="checkIntensity(this.value)"><br>
		    <span style="color:#FF0000" id="password_notice"></span></td>
                  </tr>
                  <tr>
                    <td bgcolor="#ffffff" align="right"><strong>确认密码</strong></td>
                    <td bgcolor="#ffffff"><input name="confirm_password" class="inputBg" type="password" id="confirm_password" onblur="check_conform_password(this.value);"><br>
		    <span style="color:#FF0000" id="conform_password_notice"></span></td>
                  </tr>
                                    <tr>
                   <td bgcolor="#ffffff"></td>
                    <td bgcolor="#ffffff">
                        <input type="submit" name="Submit" class="bnt_blue_1" value="注册新用户">
                        <input name="act" type="hidden" value="signup">
                    </td>
                  </tr>
                </tbody></table>
              </form>
              </td>
          </tr>
                  </tbody></table>
        </div>
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