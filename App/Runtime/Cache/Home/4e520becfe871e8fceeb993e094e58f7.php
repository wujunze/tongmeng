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
<link href="/tongmeng/Public/Home/Css/style.css" rel="stylesheet" type="text/css">

<script charset="utf-8" src="/tongmeng/Public/Home/Js/v.js"></script>
<script src="/tongmeng/Public/Home/Js/hm.js"></script>
<script type="text/javascript" src="/tongmeng/Public/Home/Js/transport.js"></script>
<script type="text/javascript" src="/tongmeng/Public/Home/Js/common.js"></script>
<script type="text/javascript" src="/tongmeng/Public/Home/Js/user.js"></script>
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
<div class="block clearfix"> 
<div class="">

 <div id="ur_here">
LOCATIONG : <a href="<?php echo U('Index/index');?>">首页</a> <code>&gt;</code> 用户中心 
</div>
</div>
<div class="blank5"></div>  
  <div class="AreaL">
    <div class="box">
     <div class="box_1">
      <div class="userCenterBox">
        <div class="userMenu">
             <a href="<?php echo U('User/index');?>" class="curs"><img src="/tongmeng/Public/Home/Img/u1.gif"> 欢迎页</a>
            <a href="<?php echo U('User/pwdmod');?>"><img src="/tongmeng/Public/Home/Img/u2.gif">密码修改</a>
            <a href="<?php echo U('User/personalmod');?>"><img src="/tongmeng/Public/Home/Img/u2.gif">个人资料修改</a>
            <a href="<?php echo U('Feekback/myfeekback');?>"><img src="/tongmeng/Public/Home/Img/u6.gif"> 我的反馈</a>
            <a href="<?php echo U('MyOrder/myorder');?>"><img src="/tongmeng/Public/Home/Img/u3.gif"> 我的订单</a>
            <a href="<?php echo U('MyCollect/mycollect');?>"><img src="/tongmeng/Public/Home/Img/u12.gif"> 我的收藏</a>
            <a href="<?php echo U('Histroy/histroy');?>"><img src="/tongmeng/Public/Home/Img/u5.gif">浏览历史</a>
            <a href="<?php echo U('Recharge/recharge');?>"><img src="/tongmeng/Public/Home/Img/u13.gif">充值历史</a>
            <a href="<?php echo U('Address/index');?>"><img src="/tongmeng/Public/Home/Img/u9.gif">收货地址</a>
            <a href="<?php echo U('logout/index');?>" style="background:none; text-align:right; margin-right:10px;"><img src="/tongmeng/Public/Home/Img/bnt_sign.gif"></a>
        </div>      
       </div>
     </div>
    </div>
  </div>
  <div class="AreaR">
    <div class="box">
     <div class="box_1">
      <div class="userCenterBox boxCenterList clearfix" style="_height:1%;">
                   <script type="text/javascript">
                     var email_empty = "请输入您的电子邮件地址！";
                      var email_error = "您输入的电子邮件地址格式不正确！";
                      var msg_blank = "不能为空";
                      var msg_can_use = "- 可以使用";
                      var msg_telphone_blank = " - 手机号不能为空";
                      var msg_telphone_registered = " - 手机号已存在,请重新输入";
                      var msg_telphone_format = " - 手机号码不合法";
                  </script>
        <h5><span>个人资料</span></h5>
      <div class="blank"></div>
           <form action="<?php echo U('User/personalupdate');?>" method="post" enctype="multipart/form-data" align="center" >
              <div >
                  <div  style="margin-left:100px;">
                      用户昵称:
                      <input type="text" class="small" name="name" value="<?php echo ($userdetail['name']); ?>">
                  </div><br/>
                  
                  <div style="width:400px;margin-left:300px;">
                      用户头像：
                          <div><img src="/tongmeng/Public/<?php echo ($userdetail['pic']); ?>" alt="" width="100px"></div><br/>
                          <input type="file" name="pic">                                 
                  </div><br/>
                  <div style="margin-left:100px;">
                     用户性别:<?php echo ($userdetail['sex']==1?'<input type="radio" name="sex" value="1" checked>男<input type="radio" name="sex" value="0">女':'<input type="radio" name="sex" value="1">男<input type="radio" name="sex" value="0" checked> 女'); ?>
                  </div><br/>

                  <div style="margin-left:100px;">
                     用户年龄:&nbsp;&nbsp;
                     <input type="text" name="age" value="<?php echo ($userdetail['age']); ?>" >                              
                  </div><br/>

                  <div style="margin-left:100px;" >
                      用户邮箱:&nbsp;
                      <input type="text" name="email" value="<?php echo ($userdetail['email']); ?>" >
                    
                  </div><br/>

                  <div style="margin-left:100px;">
                      用户地址:&nbsp;
                      <input type="text" name="address" value="<?php echo ($userdetail['address']); ?>" >
                     
                  </div><br/>


                  <div style="margin-left:100px;" id="extend_field5i">
                      手机号码:&nbsp;
                      <input type="text" name="tel" value="<?php echo ($userdetail['tel']); ?>"  class="inputBg" onblur="check_telphone1(this.value)">
                     
                  </div><br/>
                    <div style="margin-left:100px;">
                        <input type="hidden" name="uid" value="<?php echo ($userdetail['uid']); ?>">
                        <input type="hidden" name="pic" value="<?php echo ($userdetail['pic']); ?>" >
                        <input type="submit" value="提交" >&nbsp;
                        <input type="reset" value="重置">
                    </div>
              </div>    
        </form>
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
</body>
</html>