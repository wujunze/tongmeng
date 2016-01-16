<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="Keywords" content="<?php echo ($config['keywords']); ?>">
  <meta name="Description" content="<?php echo ($config['description']); ?>">
  <title>会员注册 - <?php echo ($config['title']); ?></title>
  <link rel="icon" href="/favicon.png">
  <link href="/tongmeng/Public/Home/Css/m_base.css" rel="stylesheet" type="text/css">
  <link href="/tongmeng/Public/Home/Css/m_style.css" rel="stylesheet" type="text/css">
  <link href="/tongmeng/Public/Home/Css/m_slider.css" rel="stylesheet" type="text/css">
  <link href="/tongmeng/Public/Home/Css/m_flex.css" rel="stylesheet" type="text/css">
  <link href="/tongmeng/Public/Home/Css/style.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="/tongmeng/Public/Home/js/user.js"></script>
</head>
<body class="w1200">
<!-- 加载头部文件 -->
<?php echo W("Skins/head");?>
<div class="block block1">
  <div class="">
 <div id="ur_here">
LOCATIONG : <a href="/tongmeng">首页</a> <code>&gt;</code> 用户中心 
</div>
</div>
<div class="blank5"></div>
  <div style="width:800px;;margin:0 auto">
            <div class="blank"></div>
<div class="usBox_3">
<div class="usBox">
  <div class="usBox_2 clearfix">
    <div class="regimg"><img src="/tongmeng/Public/Home/Img/login_sign_title.gif"></div>
    <form action="/tongmeng/index.php/Reg/reg" method="post" name="formUser" onsubmit="return register();">
      <table width="100%" border="0" align="left" cellpadding="5" cellspacing="3">
        <tbody>
          <tr>
            <td width="13%" align="right">用户名</td>
            <td width="87%">
            <input name="username" type="text" size="25" id="username" onblur="is_registered(this.value);" class="inputBg">
              <span id="username_notice" style="color:#FF0000"> *</span>
            </td>
          </tr>
          <tr>
            <td align="right">email</td>
            <td>
            <input name="email" type="text" size="25" id="email" onblur="checkEmail(this.value);" class="inputBg">
              <span id="email_notice" style="color:#FF0000"> *</span>
            </td>
          </tr>
          <tr>
            <td align="right">密码</td>
            <td>
            <input name="password" type="password" class="inputBg" id="password1" onblur="check_password(this.value);" onkeyup="checkIntensity(this.value)" size="25">
              <span style="color:#FF0000" id="password_notice"> *</span>
            </td>
          </tr>
          <tr>
            <td align="right">密码强度</td>
            <td>
              <table width="145" border="0" cellspacing="0" cellpadding="1">
                <tbody><tr align="center">
                  <td width="33%" id="pwd_lower">弱</td>
                  <td width="33%" id="pwd_middle">中</td>
                  <td width="33%" id="pwd_high">强</td>
                  </tr>
                </tbody>
              </table>
            </td>
        </tr>
        <tr>
          <td align="right">确认密码</td>
          <td>
          <input name="repasswd" type="password" class="inputBg" id="conform_password" onblur="check_conform_password(this.value);" size="25">
            <span style="color:#FF0000" id="conform_password_notice"> *</span>
          </td>
        </tr>
        <tr>
          <td align="right" id="extend_field5i">手机</td>
          <td><input name="tel" type="text" size="25" class="inputBg" onblur="check_telphone(this.value)">
              <span style="color:#FF0000" id="telphone_notice_5"> *</span>
              <span id="telphone_notice" style="color:#FF0000"></span>
          </td>
        </tr>
         <tr>
          <td>&nbsp;</td>
          <td><label>
            <input name="" type="checkbox" value="1" checked="checked">
            我已看过并接受《<a href="" style="color:blue" target="_blank">用户协议</a>》</label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td align="left">
          <input name="" type="hidden" value="act_register">
          <input type="hidden" name="" value="">
          <input type="submit" value="" onchange="" class="us_Submit_reg">
          </td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td class="actionSub">
          <a href="/tongmeng/index.php/login">我已有账号，我要登录</a><br>
          <a href="">您忘记密码了吗？</a>
          </td>
        </tr>
        <tr>
         <td>&nbsp;</td>
          <td>
            <a href="">
            <img src="/tongmeng/Public/Home/Img/qq_login.gif"></a>&nbsp;&nbsp;
            <a href="">
            <img src="/tongmeng/Public/Home/Img/sina_login_logo.gif"></a>&nbsp;&nbsp;
            <a href="">
            <img src="/tongmeng/Public/Home/Img/taobao_login.gif"></a><br>&nbsp;&nbsp;
          </td>
        </tr>
      </tbody>
      </table>
    </form>
  </div>
</div>
</div>
</div></div>
<div class="blank"></div>
<script src="/tongmeng/Public/Home/Js/reg.js"></script>
<!-- 加载底部文件 -->
<?php echo W("Skins/bottom");?>
</body>
</html>