<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0046)http://www.kaisenbuy.com/article_cat.php?id=11 -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="Keywords" content="">
<meta name="Description" content="">
<title>童梦网帮助中心</title>
<link rel="shortcut icon" href="http://www.kaisenbuy.com/favicon.ico">
<link rel="icon" href="http://www.kaisenbuy.com/animated_favicon.gif" type="image/gif">
<link href="/tongmeng/Public/Home/Css/m_base.css" rel="stylesheet" type="text/css">
<link href="/tongmeng/Public/Home/Css/m_style.css" rel="stylesheet" type="text/css">
<link href="/tongmeng/Public/Home/Css/m_slider.css" rel="stylesheet" type="text/css">
<link href="/tongmeng/Public/Home/Css/m_flex.css" rel="stylesheet" type="text/css">
<link href="/tongmeng/Public/Home/Css/style.css" rel="stylesheet" type="text/css">
<script charset="utf-8" src="/tongmeng/Public/Home/Js/v.js"></script><script src="/tongmeng/Public/Home/Js/hm.js"></script><script type="text/javascript" src="/tongmeng/Public/Home/Js/common.js"></script></head>
<body class="w1200">
<script type="text/javascript">
var isWidescreen=screen.width>=1280;
if (isWidescreen){document.getElementsByTagName("body")[0].className="w1200";}
</script>
<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<script type="text/javascript" src="/tongmeng/Public/Home/Js/jquery-1.7.2.min.js"></script>
<?php echo W('Skins/head');?>
<script type="text/javascript" src="/tongmeng/Public/Home/Js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/tongmeng/Public/Home/Js/jquery.scrollLoading.js"></script>
<script type="text/javascript" src="/tongmeng/Public/Home/Js/jquery-migrate-1.1.0.js"></script>
<script type="text/javascript" src="/tongmeng/Public/Home/Js/jquery.hoverdelay.js"></script>
<div class="block clearfix">
 <div class="">
 <div id="ur_here">
LOCATIONG : <a href="">首页</a> <code>&gt;</code> <a href="/tongmeng/index.php/Help/index">返回帮助列表</a> 
</div>
</div>
<div class="blank5"></div>  

  
  
  <div class="AreaR">
   <div class="box">
   <div class="box_1">
    <h3><span>帮助中心</span></h3>
    <div class="boxCenterList">
 
      <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#ffffff">
     
        <tbody>
       <?php if(is_array($help)): foreach($help as $key=>$data): ?><tr>
        <td bgcolor="#ffffff">

            <div style="border-bottom:1px dotted #ccc; padding:5px 0; background:">
               <div style="width:80%; border:1px dashed red; font-size:15px;">
       			      <p style="line-height:20px;"> <?php echo ($help[0]['content']); ?> </p>
               </div>
       		 </div>
        </td>

      
        </tr><?php endforeach; endif; ?>


    
          </tbody>
        </table>
    </div>
   </div>
  </div>
  <div class="blank5"></div>
  
<form name="selectPageForm" action="http://www.kaisenbuy.com/article_cat.php" method="get">

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
<?php echo W('Skins/bottom');?>
</body></html>