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
var isWidescreen=screen.widtd>=1280;
if (isWidescreen){document.getElementsByTagName("body")[0].className="w1200";}
</script>
<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<script type="text/javascript" src="/tongmeng/Public/Home/Js/jquery-1.7.2.min.js"></script>
<!--[if IE 6]>
<div id="yellowtip" style="widtd: 100%; background-color: rgb(254, 246, 227); border-top-widtd: 1px; border-bottom-widtd: 1px; border-style: solid none; border-top-color: rgb(229, 205, 150); border-bottom-color: rgb(229, 205, 150); height: 33px; min-widtd: 920px; z-index: 99999; background-position: initial initial; background-repeat: initial initial;">
<div style="margin:0 auto;widtd:900px;line-height:33px;text-align:center;color:#82654D;">温馨提示：尊敬的用户，现在检测到您正在使用IE6浏览器。为了确保您的购物安全和更好的用户体验，请<a class="se6_download" style="color:#1C79A1" href="http://chrome.360.cn/" target="_blank">下载360极速浏览器</a>或者升级更高版本的IE浏览器</div>
<div id="yellowtipclose" style="display:none;"></div>
</div>
<![endif]-->
<?php echo W('Skins/head');?>
<div class="block clearfix"> 
<script type="text/javascript">
(function(){

  var time = null;
  var list = $("#navlist");
  var box = $("#navbox");
  var lista = list.find("a");
  
  for(var i=0,j=lista.lengtd;i<j;i++){
    if(lista[i].className == "now"){
      var olda = i;
    }
  }
  
  var box_show = function(hei){
    box.stop().animate({
      height:hei,
      opacity:1
    },400);
  }
  
  var box_hide = function(){
    box.stop().animate({
      height:0,
      opacity:0
    },400);
  }
  
  lista.hover(function(){
    lista.removeClass("now");
    $(tdis).addClass("now");
    clearTimeout(time);
    var index = list.find("a").index($(tdis));
    box.find(".cont").hide().eq(index).show();
    var _height = box.find(".cont").eq(index).height()+0;
    box_show(_height)
  },function(){
    time = setTimeout(function(){ 
      box.find(".cont").hide();
      box_hide();
    },50);
    lista.removeClass("now");
    lista.eq(olda).addClass("now");
  });
  
  box.find(".cont").hover(function(){
    var _index = box.find(".cont").index($(tdis));
    lista.removeClass("now");
    lista.eq(_index).addClass("now");
    clearTimeout(time);
    $(tdis).show();
    var _height = $(tdis).height()+0;
    box_show(_height);
  },function(){
    time = setTimeout(function(){   
      $(tdis).hide();
      box_hide();
    },50);
    lista.removeClass("now");
    lista.eq(olda).addClass("now");
  });

})();
</script>

<div class="">
  <script type="text/javascript">
$('.discovery').hover(function(){
 $(tdis).find('.sub_layer').show();
},function(){
 $(tdis).find('.sub_layer').hide();
})
var codeL = $('.w').offset().left+20;
$('#weixin').hover(function(){
 $('#code').css({'right':codeL}).show();
},function(){
 $('#code').hide();
})
$("#AddFavorite").on("click", function () { 
 var sURL = "http://www.kaisenbuy.com/"; 
 sTitle = "开森商城"; 
 try {window.external.addFavorite(sURL, sTitle);} 
 catch (e) { 
 try {window.sidebar.addPanel(sTitle, sURL, "slice");} 
 catch (e) {alert("您可以尝试通过快捷键 Ctrl + D 加入到收藏夹~")} 
 } 
}); 
function formsubmit()
{
 document.searchForm.submit()
}
</script>

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
            <a href="<?php echo U('User/pwdMod');?>"><img src="/tongmeng/Public/Home/Img/u2.gif">密码修改</a>
            <a href="<?php echo U('User/personalMod');?>"><img src="/tongmeng/Public/Home/Img/u2.gif">个人资料修改</a>
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
         
           <h5>
               <span>我的反馈</span>
               <a href="<?php echo U('Feekback/feekbackAdd');?>">
                  <font style="font-size:20px;color:red;">添加反馈</font>
               </a>
           </h5>
     
            <div class="blank"></div><br/>
            
                   <div> 
                        <form action="" metdod="post">
                              反馈列表:     
                              <input type="text" name="feekbacktitle" />  
                              <input type="submit" name="sub" value="搜索">                           
                        </form>

                    </div><br/>
                    <div>
                        <table border='2' bordercolor='green' width="100%" cellpadding="3" cellspacing="3">
                          
                                <tr align='center'>
                                    <td><b>序号</b></td>
                                    <td><b>反馈主题</b></td>
                                    <td><b>反馈内容</b></td>
                                    <td><b>反馈时间</b></td>
                                    <td><b>操作</b></td>
                                </tr>
                          
                            
                            <?php if(is_array($feekback)): foreach($feekback as $key=>$feekback): ?><tr align='center'>
                                    <td><?php echo ($feekback["id"]); ?></td>
                                    <td>
                                        <?php echo ($feekback["feekbacktitle"]); ?>
                                    </td>
                                    <td><?php echo ($feekback["feekbackcontent"]); ?></td>
                                    <td><?php echo (date("Y-m-d H:i:s",$feekback["feekbacktime"])); ?></td>
                                    <td>
                                        <div  style="font-size:14px;">
                                                 <a title="查看回复" href="/tongmeng/index.php/Feekback/reply/fid/<?php echo ($feekback['id']); ?>">查看回复
                                                </a>&nbsp;&nbsp;
                                                <a title="删除" href="/tongmeng/index.php/Feekback/feekbackDel/id/<?php echo ($feekback['id']); ?>">删除
                                                </a>

                                        </div>
                                    </td>
                                </tr><?php endforeach; endif; ?>
                                 <tr align="center"><td colspan=5><?php echo ($Page); ?></td></tr>
                           
                        </table>
                    </div>
                    
                </div>
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
</body>
</html>