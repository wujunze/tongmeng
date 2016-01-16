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
LOCATIONG : <a href="/tongmeng">首页</a> <code>&gt;</code> 用户中心 
</div>
</div>
<div class="blank5"></div>  
  <div class="AreaL">
    <div class="box">
     <div class="box_1">
      <div class="userCenterBox">
        <div class="userMenu">
<a href="http://www.kaisenbuy.com/user.php"><img src="/tongmeng/Public/Home/Img/u1.gif"> 欢迎页</a>
<a href="/tongmeng/Public/Home/Img/gerenzilliao.html" class="curs"><img src="/tongmeng/Public/Home/Img/u2.gif"> 用户信息</a>
<a href="http://www.kaisenbuy.com/user.php?act=order_list"><img src="/tongmeng/Public/Home/Img/u3.gif"> 我的订单</a>
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
         
                          <script type="text/javascript">
                      var bonus_sn_empty = "请输入您要添加的红包号码！";
                      var bonus_sn_error = "您输入的红包号码格式不正确！";
                      var email_empty = "请输入您的电子邮件地址！";
                      var email_error = "您输入的电子邮件地址格式不正确！";
                      var old_password_empty = "请输入您的原密码！";
                      var new_password_empty = "请输入您的新密码！";
                      var confirm_password_empty = "请输入您的确认密码！";
                      var both_password_error = "您现两次输入的密码不一致！";
                      var msg_blank = "不能为空";
                      var msg_can_use = "- 可以使用";
                      var no_select_question = "- 您没有完成密码提示问题的操作";
                      var msg_telphone_blank = " - 手机号不能为空";
                      var msg_telphone_registered = " - 手机号已存在,请重新输入";
                      var msg_telphone_format = " - 手机号码不合法";
                  </script>
      <h5><span>个人资料</span></h5>
      <div class="blank"></div>
     <form name="formEdit" action="http://www.kaisenbuy.com/user.php" method="post" onsubmit="return userEdit()">
      <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
                <tbody><tr>
                  <td width="28%" align="right" bgcolor="#FFFFFF">出生日期： </td>
                  <td width="72%" align="left" bgcolor="#FFFFFF"> <select name="birthdayYear"><option value="1955">1955</option><option value="1956">1956</option><option value="1957">1957</option><option value="1958">1958</option><option value="1959">1959</option><option value="1960">1960</option><option value="1961">1961</option><option value="1962">1962</option><option value="1963">1963</option><option value="1964">1964</option><option value="1965">1965</option><option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option></select>&nbsp;<select name="birthdayMonth"><option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select>&nbsp;<select name="birthdayDay"><option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select> </td>
                </tr>
                <tr>
                  <td width="28%" align="right" bgcolor="#FFFFFF">性　别： </td>
                  <td width="72%" align="left" bgcolor="#FFFFFF"><input type="radio" name="sex" value="0" checked="checked">
                    保密&nbsp;&nbsp;
                    <input type="radio" name="sex" value="1">
                    男&nbsp;&nbsp;
                    <input type="radio" name="sex" value="2">
                  女&nbsp;&nbsp; </td>
                </tr>
                <tr>
                  <td width="28%" align="right" bgcolor="#FFFFFF">电子邮件地址： </td>
                  <td width="72%" align="left" bgcolor="#FFFFFF"><input name="email" type="text" value="admin@qq.com" size="25" class="inputBg"><span style="color:#FF0000"> *</span></td>
                </tr>
				        <tr>
          <td width="28%" align="right" bgcolor="#FFFFFF" id="extend_field5i">手机          </td><td width="72%" align="left" bgcolor="#FFFFFF">
          <input name="extend_field5" value="13013013013" type="text" class="inputBg" onblur="check_telphone1(this.value)"><span style="color:#FF0000" id="telphone_notice_5"> *</span>          <span id="telphone_notice" style="color:#FF0000"></span><input type="hidden" name="save_telphone" id="save_telphone" value="13013013013">          
          </td>
        </tr>
			                <tr>
                  <td colspan="2" align="center" bgcolor="#FFFFFF"><input name="act" type="hidden" value="act_edit_profile">
                    <input name="submit" type="submit" value="确认修改" class="bnt_blue_1" style="border:none;">
                  </td>
                </tr>
       </tbody></table>
    </form>
     <form name="formPassword" action="http://www.kaisenbuy.com/user.php" method="post" onsubmit="return editPassword()">
     <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
        <tbody><tr>
          <td width="28%" align="right" bgcolor="#FFFFFF">原密码：</td>
          <td width="76%" align="left" bgcolor="#FFFFFF"><input name="old_password" type="password" size="25" class="inputBg"></td>
        </tr>
        <tr>
          <td width="28%" align="right" bgcolor="#FFFFFF">新密码：</td>
          <td align="left" bgcolor="#FFFFFF"><input name="new_password" type="password" size="25" class="inputBg"></td>
        </tr>
        <tr>
          <td width="28%" align="right" bgcolor="#FFFFFF">确认密码：</td>
          <td align="left" bgcolor="#FFFFFF"><input name="comfirm_password" type="password" size="25" class="inputBg"></td>
        </tr>
        <tr>
          <td colspan="2" align="center" bgcolor="#FFFFFF"><input name="act" type="hidden" value="act_edit_password">
            <input name="submit" type="submit" class="bnt_blue_1" style="border:none;" value="确认修改">
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