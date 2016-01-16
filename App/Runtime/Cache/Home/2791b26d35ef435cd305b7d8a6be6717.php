<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="Keywords" content="<?php echo ($keywords); ?>">
    <meta name="Description" content="<?php echo ($description); ?>">
    <title><?php echo ($title); ?></title>
    <link rel="icon" href="/favicon.png">
    <link href="/tongmeng/Public/Home/Css/m_base.css" rel="stylesheet" type="text/css">
    <link href="/tongmeng/Public/Home/Css/m_style.css" rel="stylesheet" type="text/css">
    <link href="/tongmeng/Public/Home/Css/m_slider.css" rel="stylesheet" type="text/css">
    <link href="/tongmeng/Public/Home/Css/m_flex.css" rel="stylesheet" type="text/css">
    <link href="/tongmeng/Public/Home/Css/style.css" rel="stylesheet" type="text/css">
    <script charset="utf-8" src="/tongmeng/Public/Home/Js/v.js"></script>
    <script src="/tongmeng/Public/Home/Js/hm.js"></script>
    <script type="text/javascript" src="/tongmeng/Public/Home/Js/common.js"></script><script type="text/javascript" src="/tongmeng/Public/Home/Js/shopping_flow.js"></script>
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
     <div class="tc"><img src="/tongmeng/Public/Home/Img/grey.gif" class="tc_bg_01"></div>
<div class="blank"></div>
  
  
  <script type="text/javascript" src="/tongmeng/Public/Home/js/showdiv.js"></script>  <script type="text/javascript">
      var user_name_empty = "请输入您的用户名！";
      var email_address_empty = "请输入您的电子邮件地址！";
      var email_address_error = "您输入的电子邮件地址格式不正确！";
      var new_password_empty = "请输入您的新密码！";
      var confirm_password_empty = "请输入您的确认密码！";
      var both_password_error = "您两次输入的密码不一致！";
      var show_div_text = "请点击更新购物车按钮";
      var show_div_exit = "关闭";
    </script>
<div class="blank5"></div>
<form id="formCart" name="formCart" method="post" action="">
<table align="center" class="orderbox" border="0" cellpadding="3" cellspacing="0" width="100%" height="32">
  <tbody>
  <tr>
    <td class="flowtitle" align="center" valign="middle" width="50%"><div class="pl10">商品名称</div></td> 
         <td class="flowtitle" align="center" valign="middle" width="10%">属性</td>
        <td class="flowtitle" align="center" valign="middle" width="10%">本店价</td>
    <td class="flowtitle" align="center" valign="middle" width="10%">购买数量</td>
    <td class="flowtitle" align="center" valign="middle" width="10%">小计</td>
    <td class="flowtitle" align="center" valign="middle" width="10%">操作</td>
  </tr>
</tbody>
</table>
<table class="cartbox" style="font-size: 12px; line-height: 18px;" align="center" border="0" cellpadding="3" cellspacing="0" width="100%" bgcolor="#FFFFFF">
                   <tbody><tr>
              <td align="left">
                    <div class="p-img"><a href="" target="_blank"><img src="/tongmeng/Public/Home/Img/1965_thumb_G_1436771352289.jpg" border="0" title="奥迪双钻超级飞侠遥控飞机儿童玩具遥控滑行飞机"></a></div><div class="p-text"><a href="http://www.kaisenbuy.com/goods.php?id=1965" target="_blank">奥迪双钻超级飞侠遥控飞机儿童玩具遥控滑行飞机</a>
              </td>
                            <td bgcolor="#ffffff" align="center" width="10%">颜色:红色-乐迪 <br>
</td>
                            <td align="center" bgcolor="#ffffff" width="10%">99.00</td>
              <td align="center" bgcolor="#ffffff" width="10%">
                 <script language="javascript" type="text/javascript">
                function goods_cut($val){
                    var num_val=document.getElementById('number'+$val);
                    var new_num=num_val.value;
                    if(isNaN(new_num)){alert('请输入数字');return false}
                    var Num = parseInt(new_num);
                    if(Num>1)Num=Num-1;
                    num_val.value=Num;
                    document.getElementById('updatecart').click();
                }
                function goods_add($val){
                    var num_val=document.getElementById('number'+$val);
                    var new_num=num_val.value;
                    if(isNaN(new_num)){alert('请输入数字');return false}
                    var Num = parseInt(new_num);
                    Num=Num+1;
                    num_val.value=Num;
                    document.getElementById('updatecart').click();
                }
            </script>
                                <div class="cartnum">              
        <a href="javascript:void(0);" onclick="goods_cut(&#39;2397&#39;);" class="imgl"></a><input type="text" name="goods_number[2397]" onchange="document.getElementById(&#39;update_btn&#39;).click()" id="number2397" value="1" size="4" class="inum" title=""><a href="javascript:void(0);" onclick="goods_add(&#39;2397&#39;);" class="imgr"></a></div>
                              </td>
              <td align="center" bgcolor="#ffffff" width="10%" class="f1 f5">99.00</td>
              <td align="center" bgcolor="#ffffff" width="10%">
                <a href="javascript:if (confirm('您确实要把该商品移出购物车吗？')) location.href='flow.php?step=drop_goods&id=2397'; " class="f7">删除</a>
                                <a href="javascript:if (confirm('您确实要把该商品移出购物车吗？')) location.href='flow.php?step=drop_to_collect&id=2397'; " class="f7">放入收藏夹</a>
                              </td>
            </tr>
              
             <tr>
              <td colspan="6"><div class="orderboxline"></div></td>
            </tr>
            <tr>
             <td colspan="6">
             <table width="100%" align="center" border="0" cellpadding="5" cellspacing="0">
            <tbody><tr><td bgcolor="#ffffff"><input type="button" value=" " class="cartl" onclick="location.href=&#39;flow.php?step=clear&#39;"><input name="submit" type="submit" id="updatecart" value="更新购物车" class="none">
              </td>
              <td align="right" bgcolor="#ffffff">
                                <font class="fcart">购物金额小计 99.00</font>
              </td>
          
            </tr><tr>
              <td bgcolor="#ffffff">
              </td>
              <td align="right" bgcolor="#ffffff">
                <a href=""><img src="/tongmeng/Public/Home/Img/checkout.gif" alt="checkout"></a>
              </td>
            </tr>
          </tbody></table>
             </td>
             </tr>
    </tbody></table>
          <input type="hidden" name="step" value="update_cart">
        </form>
        <div class="blank5"></div>
      <script type="text/javascript" src="/tongmeng/Public/Home/Js/transport.js"></script>       <script type="text/javascript" charset="utf-8">
        function collect_to_flow(goodsId)
        {
          var goods        = new Object();
          var spec_arr     = new Array();
          var fittings_arr = new Array();
          var number       = 1;
          goods.spec     = spec_arr;
          goods.goods_id = goodsId;
          goods.number   = number;
          goods.parent   = 0;
          Ajax.call('flow.php?step=add_to_cart', 'goods=' + goods.toJSONString(), collect_to_flow_response, 'POST', 'JSON');
        }
        function collect_to_flow_response(result)
        {
          if (result.error > 0)
          {
            // 如果需要缺货登记，跳转
            if (result.error == 2)
            {
              if (confirm(result.message))
              {
                location.href = 'user.php?act=add_booking&id=' + result.goods_id;
              }
            }
            else if (result.error == 6)
            {
              openSpeDiv(result.message, result.goods_id);
            }
            else
            {
              alert(result.message);
            }
          }
          else
          {
            location.href = 'flow.php';
          }
        }
      </script>
    <div class="blank"></div>
    </div>
    <div class="blank5"></div>
</div>
<div class="blank5"></div>
<?php echo W('Skins/bottom');?>
</body>
</html>