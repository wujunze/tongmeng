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

<script charset="utf-8" src="/tongmeng/Public/Home/Js/v.js"></script><script src="/tongmeng/Public/Home/Js/hm.js"></script><script type="text/javascript" src="/tongmeng/Public/Home/Js/common.js"></script><script type="text/javascript" src="/tongmeng/Public/Home/Js/shopping_flow.js"></script>  <style type="text/css">
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
       <form action="/tongmeng/index.php/Buy/index" method="post" name="theForm" id="theForm" onsubmit="return checkOrderForm(this)">
        <!-- <script type="text/javascript">
        var flow_no_payment = "您必须选定一个支付方式。";
        var flow_no_shipping = "您必须选定一个配送方式。";
        </script> -->
      <div class="flowBox">
      <div class="box_1">
      <h6><span>收货人信息</span><a href="<?php echo U('Address/addressadd');?>" target="_blank" class="f6"> 新增地址 </a></h6>
      <table width="98%" align="center" border="0" cellpadding="5" cellspacing="0" bgcolor="#dddddd">
             <tbody><tr>
              <td bgcolor="#ffffff">收货人姓名: <?php echo ($addr[0]['name']); ?> &nbsp;&nbsp;&nbsp;&nbsp; 电话: <?php echo ($addr[0]['telphone']); ?> &nbsp;&nbsp;&nbsp;&nbsp; 选择收货地址: <select name="addr" style="border:0px;">请选择收货地址
              <?php $__FOR_START_30913__=0;$__FOR_END_30913__=count($addr);for($i=$__FOR_START_30913__;$i < $__FOR_END_30913__;$i+=1){ ?><option name="<?php echo ($addr[$i]['addr']); ?>" style="border:0px;" <?php echo ($addr[$i]['defaultaddr']==1 ? 'selected' : ''); ?>><?php echo ($addr[$i]['addr']); ?></option><?php } ?>
              </select>
              <span class="none">邮政编码: <?php echo ($addr[0]['postcode']); ?></span></td>
            </tr>
                        <tr style="display:none;">
              <td bgcolor="#ffffff">收货人姓名:<?php echo ($addr[0]['name']); ?>  详细地址:<?php echo ($addr[0]['addr']); ?> &nbsp;&nbsp;&nbsp;&nbsp; 电话:<?php echo ($addr[0]['telphone']); ?><span class="none">邮政编码:<?php echo ($addr[0]['postcode']); ?></span></td>
            </tr>
                        <tr style="display:none;">
              <td bgcolor="#ffffff"><span class="none">手机:<?php echo ($addr[0]['telphone']); ?></span></td>
            </tr>
                         <tr style="display:none;">
              <td bgcolor="#ffffff">标志建筑: 最佳送货时间:</td>
            </tr>
                      </tbody></table>
         </div>
      </div>
     <div class="blank"></div>
	 
	       <div class="flowBox">
	<!-- <div class="box_1">
    <h6><span>配送方式</span></h6>
    <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd" id="shippingTable">
            <tbody><tr>
              <th bgcolor="#ffffff" width="5%">&nbsp;</th>
              <th bgcolor="#ffffff" width="25%">名称</th>
              <th bgcolor="#ffffff">订购描述</th>
              <th bgcolor="#ffffff" width="15%">费用</th>
              <th bgcolor="#ffffff" width="15%">免费额度</th>
              <th bgcolor="#ffffff" width="15%">保价费用</th>
            </tr>
                        <tr>
              <td bgcolor="#ffffff" valign="top"><input name="shipping" type="radio" value="7" supportcod="0" insure="2%" onclick="selectShipping(this)">
              </td>
              <td bgcolor="#ffffff" valign="top"><strong>中通速递</strong></td>
              <td bgcolor="#ffffff" valign="top">满58包邮</td>
              <td bgcolor="#ffffff" align="right" valign="top">0.00</td>
              <td bgcolor="#ffffff" align="right" valign="top">58.00</td>
              <td bgcolor="#ffffff" align="right" valign="top">2%</td>
            </tr>
                        <tr>
              <td colspan="6" bgcolor="#ffffff" align="right"><label for="ECS_NEEDINSURE">
                <input name="need_insure" id="ECS_NEEDINSURE" type="checkbox" onclick="selectInsure(this.checked)" value="1" disabled="true">
                配送是否需要保价 </label></td>
            </tr>
          </tbody></table>
    </div>
	</div>
    <div class="blank"></div>
                <div class="flowBox">
	<div class="box_1">
    <h6><span>支付方式</span></h6>
    <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd" id="paymentTable">
            <tbody><tr>
              <th width="5%" bgcolor="#ffffff">&nbsp;</th>
              <th width="20%" bgcolor="#ffffff">名称</th>
              <th bgcolor="#ffffff">订购描述</th>
              <th bgcolor="#ffffff" width="15%">手续费</th>
            </tr>
                        
            <tr>
              <td valign="top" bgcolor="#ffffff"><input type="radio" name="payment" value="4" iscod="0" onclick="selectPayment(this)"></td>
              <td valign="top" bgcolor="#ffffff"><strong>在线支付</strong></td>
              <td valign="top" bgcolor="#ffffff"></td>
              <td align="right" bgcolor="#ffffff" valign="top">0.00</td>
            </tr>
                        
            <tr>
              <td valign="top" bgcolor="#ffffff"><input type="radio" name="payment" value="1" iscod="0" onclick="selectPayment(this)"></td>
              <td valign="top" bgcolor="#ffffff"><strong>支付宝</strong></td>
              <td valign="top" bgcolor="#ffffff"><font color="red">使用信用卡支付的用户请选择</font></td>
              <td align="right" bgcolor="#ffffff" valign="top">0.00</td>
            </tr>
                        
            <tr>
              <td valign="top" bgcolor="#ffffff"><input type="radio" name="payment" value="6" iscod="0" onclick="selectPayment(this)"></td>
              <td valign="top" bgcolor="#ffffff"><strong>微信支付</strong></td>
              <td valign="top" bgcolor="#ffffff"><font color="red">手机端用户请选择</font></td>
              <td align="right" bgcolor="#ffffff" valign="top">0.00</td>
            </tr>
                      </tbody></table>
    </div>
	</div>
        
          
          
   <div class="flowBox">
      <div class="box_1">
       <div class="blank"></div>
      <table width="97%" align="center" border="0" cellpadding="5" cellspacing="0" bgcolor="#ffffff">
                <tbody>
                                    <tr>
              <td valign="top" bgcolor="#ffffff" width="8%" style="font-size:14px;"><strong>备 注:</strong></td>
              <td bgcolor="#ffffff"><textarea name="postscript" cols="80" rows="3" style="color:#B4B3B3;border:1px solid #ccc;width:600px;height:80px;font-size:14px;" id="postscript" onkeydown="textdown(event)" onkeyup="textup()" onfocus="if(value==&#39;为了能够更好的为您提供服务，请您填写您的具体送货要求和建议！&#39;){value=&#39;&#39;}" onblur="if (value ==&#39;&#39;){value=&#39;为了能够更好的为您提供服务，请您填写您的具体送货要求和建议！&#39;}">为了能够更好的为您提供服务，请您填写您的具体送货要求和建议！</textarea></td>
            </tr>
			<script type="text/javascript">
function textdown(e) {
    textevent = e;
    if (textevent.keyCode == 8) {
        return;
    }
    if (document.getElementById('postscript').value.length >= 200) {
        alert("为了能够更好的为您提供服务，请您填写您的具体送货要求和建议！")
        if (!document.all) {
            textevent.preventDefault();
        } else {
            textevent.returnValue = false;
        }
    }
}
function textup() {
    var s = document.getElementById('postscript').value;
    //判断ID为text的文本区域字数是否超过100个 
    if (s.length > 200) {
        document.getElementById('postscript').value = s.substring(0, 200);
    }
}
</script>
                        <tr>
              <td bgcolor="#ffffff"><strong>缺货处理:</strong></td>
              <td bgcolor="#ffffff">                <label>
                <input name="how_oos" type="radio" value="0" checked="" onclick="changeOOS(this)">
                等待所有商品备齐后再发</label>
                                <label>
                <input name="how_oos" type="radio" value="1" onclick="changeOOS(this)">
                取消订单</label>
                                <label>
                <input name="how_oos" type="radio" value="2" onclick="changeOOS(this)">
                与店主协商</label>
                              </td>
            </tr>
                      </tbody></table>
    </div>
    </div> -->
    
    <div class="blank"></div>
      <div class="flowBox">
         <div class="box_1">
		     <h6><span>购买的商品</span></h6>
          <div class="cartbor clearfix">
         <table width="99%" align="center" border="0" cellpadding="0" cellspacing="0" bgcolor="#dddddd">
            <tbody><tr class="carttrbg">
              <th height="28" class="ftit">商品名称</th>
              <th>属性</th>
                            <!-- <th></th> -->
                            <th colspan="2">商品价格</th>
              <th>购买数量</th>
              <th>小计</th>
            </tr>
            <?php $__FOR_START_26726__=0;$__FOR_END_26726__=count($_SESSION['cart']);for($i=$__FOR_START_26726__;$i < $__FOR_END_26726__;$i+=1){ ?><tr>
                <td bgcolor="#ffffff" height="20" class="tittr"><a href="http://www.kaisenaddr.com/goods.php?id=1965" target="_blank" class="f77"><?php echo ($_SESSION['cart'][$i]['goodsname']); ?></a></td>
                <td bgcolor="#ffffff"><?php echo ($_SESSION['goods'][$i]['goodsdesc']); ?><br></td>
                              <td align="center" bgcolor="#ffffff"></td>
                              <td bgcolor="#ffffff" align="center"><?php echo ($_SESSION['cart'][$i]['goodsprice']); ?></td>
                <td bgcolor="#ffffff" align="center"><?php echo ($_SESSION['cart'][$i]['number']); ?></td>
                <td bgcolor="#ffffff" align="center"><?php echo ($_SESSION['cart'][$i]['goodsprice']); ?></td>
              </tr><?php } ?>
              <tr>
              <td bgcolor="#ffffff" colspan="7" class="tittrr">
              <div class="f_r">     </div>
              </td>
            </tr>
                      </tbody></table>
      </div>
      </div>
	   </div>
    <div class="blank"></div>
    <div class="flowBox">
          <script type="text/javascript" src="/tongmeng/Public/Home/Img/transport.js"></script><div id="ECS_ORDERTOTAL">
<table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
    <tbody>
    <tr>
    <td align="right" bgcolor="#ffffff">
      商品总价: <font class="f4_b"><?php echo ($price); ?></font>
                                              </td>
  </tr>
    <tr>
    <td align="right" bgcolor="#ffffff"> 应付款金额: <font class="f4_b" style="font-size:20px;"><?php echo ($price); ?></font>
    	</td>
  </tr>
</tbody></table>
</div>           <div style="margin:8px auto;float:right">
            <input type="submit" class="orderbuybtn">
            </div>
    </div>
    </form>
</div>
<div class="blank5"></div>
</div>
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
var btn_addr = "购买";
var is_cancel = "取消";
var select_spe = "请选择商品属性";
</script>
<?php echo W('Skins/bottom');?>
</body></html>