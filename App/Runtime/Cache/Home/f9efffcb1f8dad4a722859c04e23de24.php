<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="Keywords" content="<?php echo ($config['keywords']); ?>">
<meta name="Description" content="<?php echo ($config['description']); ?>">
<meta property="qc:admins" content="174257777763113562516375">
<title>会员登录 - <?php echo ($config['title']); ?></title>
<link rel="icon" href="/favicon.png">
<link href="/tongmeng/Public/Home/Css/m_base.css" rel="stylesheet" type="text/css">
<link href="/tongmeng/Public/Home/Css/m_style.css" rel="stylesheet" type="text/css">
<link href="/tongmeng/Public/Home/Css/m_slider.css" rel="stylesheet" type="text/css">
<link href="/tongmeng/Public/Home/Css/m_flex.css" rel="stylesheet" type="text/css">
<link href="/tongmeng/Public/Home/Css/style.css" rel="stylesheet" type="text/css">
<script charset="utf-8" src="/tongmeng/Public/Home/Js/v.js"></script>
<script src="/tongmeng/Public/Home/Js/hm.js"></script>
<script type="text/javascript" src="/tongmeng/Public/Home/Js/common.js"></script>
<script type="text/javascript" src="/tongmeng/Public/Home/Js/index.js"></script>
<script type="text/javascript" src="/tongmeng/Public/Home/Js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="/tongmeng/Public/Home/Js/jquery.focus.js"></script>
<script type="text/javascript" src="/tongmeng/Public/Home/Js/jquery-1.5.1.min.js" charset="gb2312"></script>
<style type="text/css">
.seven{
 width: 100%;
 height:450px;
 background: url(Img/taishanyading.jpg) no-repeat top center;
}
</style>
</head>
<body class="w1200">
<!-- 加载头部文件 -->
<?php echo W("Skins/head");?>
<div class="block block1">
  <div class="">

 <div id="ur_here">
LOCATIONG : <a href="<?php echo U('Index/index');?>">首页</a> <code>&gt;</code> 用户中心 
</div>
</div>
<div class="blank5"></div>
  <div style="width:800px;;margin:0 auto">

<div style="text-align:center">
<img src="/tongmeng/Public/Home/Img/login_title.gif">
</div>
<div class="usBox clearfix">
  <div class="usBox_1 f_l">
   <form style=" padding-top:20px;" name="formLogin" action="/tongmeng/index.php/Login/login" method="post" onsubmit="return userLogin()">
        <table width="351" border="0" align="left" cellpadding="3" cellspacing="5">
          <tbody><tr>
            <td width="67" align="right">用户名</td>
            <td width="197"><input name="username" type="text" size="25" class="inputBg" value="用户名/手机号/邮箱" onblur="if(!this.value){this.value=&#39;用户名/手机号/邮箱&#39;;this.flag=undefined;}else{this.flag=&#39;true&#39;};return true;" onfocus="if(this.value==&#39;用户名/手机号/邮箱&#39;&amp;&amp;!this.flag)this.value=&#39;&#39;;return true;"></td>
            <td width="85" rowspan="2"> 
             <input type="hidden" name="act" value="act_login">
            <input type="hidden" name="back_act" value="/tongmeng/index.php/reg">
             </td>
          </tr>
          <tr>
            <td align="right">密码</td>
            <td>
            <input name="password" type="password" size="15" class="inputBg"></td>
            </tr>
                  
             <tr>
            <td align="right"></td>
            <td> </td>
            </tr>
            
            <tr>
            <td align="right"></td>
            <td> <input type="submit" name="submit" value="" class="us_Submit"> </td>
            </tr>
         
          <tr>
           <td align="right"></td>
            <td><input type="checkbox" value="1" name="remember" id="remember"><label for="remember">请保存我这次的登录信息。</label></td>
          </tr>
<tr>
            <td colspan="2" valign="middle"><table width="360" border="0" cellpadding="0" cellspacing="0">
                <tbody><tr>
                  <td height="30" colspan="4">使用合作网站账号登录：</td>
                </tr>
                <tr>
                  <td><a href="http://www.kaisenbuy.com/user.php?act=oath&type=qq"><img src="/tongmeng/Public/Home/Img/qq_login.gif"></a>
</td>
                                   <td><a href="http://www.kaisenbuy.com/user.php?act=oath&type=weibo"><img src="/tongmeng/Public/Home/Img/sina_login_logo.gif"></a>
</td>                  <td><a href="http://www.kaisenbuy.com/user.php?act=oath&type=taobao"><img src="/tongmeng/Public/Home/Img/taobao_login.gif"></a>
</td>
                </tr>
              </tbody></table></td>
          </tr>
      </tbody></table>
    </form>
 
  </div>
  <div class="usTxt">
  <div>
  <img src="/tongmeng/Public/Home/Img/login_r1.jpg">
  
  <a href="/tongmeng/index.php/reg"> <img src="/tongmeng/Public/Home/Img/login_r2.jpg"></a> <br>
 
 <img src="/tongmeng/Public/Home/Img/login_r3.jpg"> <br>
<a href="http://www.kaisenbuy.com/user.php?act=qpassword_name" class="f3"><img src="/tongmeng/Public/Home/Img/login_r4.jpg"></a> <br>
<a href="http://www.kaisenbuy.com/user.php?act=get_password" class="f3"><img src="/tongmeng/Public/Home/Img/login_r5.jpg"></a><br>
  </div>
   </div>
</div>
</div></div>
<div class="blank"></div>
<!-- 加载底部文件 -->
<?php echo W("Skins/bottom");?>
</body>
</html>