<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="ks-gecko29 ks-gecko ks-firefox29 ks-firefox ju-pc">
<head>
	<meta charset="utf-8">
	<meta name="Keywords" content="<?php echo ($config['keywords']); ?>">
	<meta name="Description" content="<?php echo ($config['description']); ?>">
	<title><?php echo ($config['title']); ?></title>
	<link rel="icon" href="/favicon.png">
	<link href="/tongmeng/Public/Home/Css/m_base.css" rel="stylesheet" type="text/css">
	<link href="/tongmeng/Public/Home/Css/m_style.css" rel="stylesheet" type="text/css">
	<link href="/tongmeng/Public/Home/Css/m_slider.css" rel="stylesheet" type="text/css">
	<link href="/tongmeng/Public/Home/Css/m_flex.css" rel="stylesheet" type="text/css">
	<script src="/tongmeng/Public/Home/Js/jquery-1.8.0.min.js"></script>
	<script src="/tongmeng/Public/Home/Js/jquery.jslides.js"></script>
</head>
<body class="w1200">
<!-- 加载顶部文件 -->
<?php echo W("Skins/head");?>
<div class="mask" style="display: none;"></div>
<div class="pop-window" style="display: none;">
	<a href="javascript:void(0);" class="pop-close-button close_pop">close</a>
	<a target="_blank" href="" class="pop-button close_pop">点击查看</a>
</div>
	<div id="full-screen-slider">
		<ul id="m-slides">
			<li style="z-index: 9; display: none; background: url(/tongmeng/pic/20150710zjmmzd.jpg) 50% 0% no-repeat;"><a href="" target="_blank" alt="" title="">meilire.com</a></li>
			<li style="z-index: 9; display: none; background: url(/tongmeng/pic/20150710cvdyot.png) 50% 0% no-repeat;"><a href="" target="_blank" alt="" title="">meilire.com</a></li>
			<li style="z-index: 8; display: block; background: url(/tongmeng/pic/20150710wmichi.png) 50% 0% no-repeat;"><a href="" target="_blank" alt="" title="">meilire.com</a></li>
			<li style="z-index: 9; display: none; background: url(/tongmeng/pic/20150707bmdudg.png) 50% 0% no-repeat;"><a href="" target="_blank" alt="" title="">meilire.com</a></li>
			<li style="z-index: 9; display: none; background: url(/tongmeng/pic/20150710ellpnf.png) 50% 0% no-repeat;"><a href="" target="_blank" alt="" title="">meilire.com</a></li>
			<li style="z-index: 9; display: none; background: url(/tongmeng/pic/20150527bgnaca.png) 50% 0% no-repeat;"><a href="" target="_blank" alt="" title="">meilire.com</a></li>
		</ul>
	</div>
	<div class="skin-default-mlr">
		<input type="hidden">
	</div>
</div>
<div class="skin-default-mlr">
<div class="ju-sugget-today-index clearfix">
<div class="skin-default-mlr">
<ul>
<?php if(is_array($comment)): foreach($comment as $key=>$vo): ?><li>
		<table cellpadding="0" cellspacing="0">
			<tbody>
					<tr>
					
					<td>
					<a href="#" target="_blank"><img src="/tongmeng/Pic/1433752198189539530.png" width="200" height="168" border="0" original="/tongmeng/Pic/1433752198189539530.png"><strong><?php echo ($vo["name"]); ?></strong></a>
					</td>
				
					
					</tr>
			</tbody>
		</table>
	</li><?php endforeach; endif; ?>
</ul>
</div>

<!--网站公告部分-->

<div class="subbanner-mlr">
<h2>网站公告</h2>
<div class="slider-mlr">
<ul class="chnls-stage-mlr clearfix">
<li>

<?php if(is_array($bulletin)): foreach($bulletin as $key=>$data): ?><div  style="border:5px solid #eeeeee; width=200px; height:270px; margin-top:5px;">

<div style="height:50px; background-color:pink; font-size:18px;">
     <p style="line-height:18px;"><?php echo ($data['title']); ?></p></div>
<div><?php echo ($data['content']); ?></div>
<div><?php echo ($data['time']); ?></div>
</div><?php endforeach; endif; ?>

</li>
</ul>
</div></div>


</div></div></div>
<div class="wrap">
<div class="tonglan"><table cellpadding="0" cellspacing="0">
<tbody><tr><td><a href="" target="_blank"><img src="/tongmeng/pic/bn.jpg" width="1200" height="90" border="0" original="/tongmeng/pic/bn.jpg" style="display: inline;"></a></td></tr>
</tbody></table></div>
<div class="floor" id="floor1">
	<div class="nav_bar">
		<a href="" title="床铃/摇铃" target="_blank"></a>
		<a href="" title="学步/健身" target="_blank"></a>
		<a href="" title="识图布书" target="_blank"></a>
		<a href="" title="爬行地垫" target="_blank"></a>
		<a href="" title="益智手抓图" target="_blank"></a>
		<a href="" title="学习故事机" target="_blank"></a>
	</div>
<div class="R fl">
	<h1>
		<div class="keyWord fr"><a class="more" href="" title="" target="_blank">更多&gt;&gt;</a></div>
	</h1>
<div class="sad1 fl">
<div class="longbox fl">
	<ul class="longbox_content" style="margin-top: 0px;"> 
	<li>
		<table cellpadding="0" cellspacing="0">
			<tbody>
				<tr>
					<td><a href="" target="_blank"><img src="/tongmeng/Public/Home/Img/1432892009042086893.png" width="785" height="352" border="0" original="/tongmeng/Public/Home/Img/1432892009042086893.png" style="display: inline;"></a></td>
				</tr>
			</tbody>
		</table>
	</li>
	<li>
		<table cellpadding="0" cellspacing="0">
			<tbody>
				<tr>
					<td><a href="" target="_blank"><img src="/tongmeng/Public/Home/Img/1432948807175386977.png" width="785" height="352" border="0" original="/tongmeng/Public/Home/Img/1432948807175386977.png" style="display: inline;"></a></td>
				</tr>
			</tbody>
		</table>
	</li>
	</ul>
	<ul class="longbox_nav">
		<li class="current">1</li>
		<li class="">2</li>
	</ul>
</div>
</div>
<div class="sad2 fr">
 	<table cellpadding="0" cellspacing="0">
		<tbody>
			<tr>
				<td><a href="" target="_blank"><img src="/tongmeng/Public/Home/Img/1432869544211186172.jpg" width="242" height="170" border="0" original="/tongmeng/Public/Home/Img/1432869544211186172.jpg" style="display: inline;"></a></td>
			</tr>
		</tbody>
	</table>
</div>
<div class="sad2 fr">
	<table cellpadding="0" cellspacing="0">
		<tbody>
			<tr>
				<td><a href="" target="_blank"><img src="/tongmeng/Public/Home/Img/1432869360552934420.jpg" width="242" height="170" border="0" original="/tongmeng/Public/Home/Img/1432869360552934420.jpg" style="display: inline;"></a></td>
			</tr>
		</tbody>
	</table>
</div>
</div>
<ul>                
<div id="page">
	<div class="ju-itemlist" id="mainContent">
		<ul class="clearfix">
			<?php if(is_array($goods)): foreach($goods as $key=>$val): ?><li class="item-small-v1"><div class="item-status not-begin">
			<a target="_blank" href="<?php echo U('Goods/index',array('id'=>$val['id']));?>" class="link-box"><div class="item-pic-wrap">
			<img src="/tongmeng/Public/<?php echo ($val["goodspic"]); ?>" style="display: block; background: url(/tongmeng/Public/Home/Img/loading.gif) 50% 50% no-repeat;" class="item-pic" width="290" height="290" original="/tongmeng/pic/bn.jpg">
			<div class="biz-wrap  ">
			<div class="biz-logo-wrap">
			<span class="biz-logo logo-jmp"></span>
			</div></div></div><i class="soldout-mask"></i>
			<h3 title="<?php echo ($val["goodsname"]); ?>"><?php echo ($val["goodsname"]); ?></h3>
			<div class="item-prices"><span class="price"><i>¥</i><em>
			          <?php echo ($val["price"]); ?>          </em></span>
			<div class="dock"><del class="orig-price"></del></div>
			<span class="sold-num"><em><?php echo ($val["salesnum"]); ?></em> 人已买</span></div>
			</a></div>
			</li><?php endforeach; endif; ?>
		</ul>
	</div>
</div>
</ul>
</div>
<div class="floor" id="floor2">
	<div class="nav_bar">
		<a href="" title="积木玩具" target="_blank"></a>
		<a href="" title="音乐玩具" target="_blank"></a>
		<a href="" title="卡通玩具" target="_blank"></a>
		<a href="" title="惯性玩具" target="_blank"></a>
		<a href="" title="音乐故事机" target="_blank"></a>
		<a href="" title="挂图" target="_blank"></a>
	</div>
	<div class="R fl">
		<h1>
			<div class="keyWord fr"><a class="more" href="" title="" target="_blank">更多&gt;&gt;</a></div>
		</h1>
<div class="sad1 fl">
<div class="flex-container" id="sulv_banner">
<div class="flexslider" id="flexslider2">
	<ul class="slides">
		<li style="width: 100%; float: left; margin-right: -100%; display: list-item;">
			<table cellpadding="0" cellspacing="0">
				<tbody>
					<tr>
						<td><a href="" target="_blank"><img src="/tongmeng/Public/Home/Img/1427163812711445480.png" width="785" height="352" border="0" original="/tongmeng/Public/Home/Img/1427163812711445480.png"></a></td>
					</tr>
				</tbody>
			</table>
		</li>
		<li style="width: 100%; float: left; margin-right: -100%; display: none;">
			<table cellpadding="0" cellspacing="0">
				<tbody>
					<tr>
						<td><a href="" target="_blank"><img src="/tongmeng/Public/Home/Img/1432892105555803057.png" width="785" height="352" border="0" original="/tongmeng/Public/Home/Img/1432892105555803057.png"></a></td>
					</tr>
				</tbody>
			</table>
		</li>
	</ul>
	<ol class="flex-control-nav">
		<li><a class="active">1</a></li>
		<li><a class="">2</a></li>
	</ol>
	<ul class="flex-direction-nav">
		<li><a class="prev" href="">Previous</a></li>
		<li><a class="next" href="">Next</a></li>
	</ul>
</div>
</div>
</div>
<div class="sad2 fr">
<table cellpadding="0" cellspacing="0">
<tbody><tr><td><a href="http://www.kaisenbuy.com/affiche.php?ad_id=15&uri=http%3A%2F%2Fwww.kaisenbuy.com%2Fgoods-1254.html" target="_blank"><img src="/tongmeng/Public/Home/Img/1432870589466405684.jpg" width="242" height="170" border="0" original="/tongmeng/Public/Home/Img/1432870589466405684.jpg" style="display: inline;"></a></td></tr>
</tbody></table></div>
<div class="sad2 fr">
 <table cellpadding="0" cellspacing="0">
<tbody><tr><td><a href="http://www.kaisenbuy.com/affiche.php?ad_id=16&uri=http%3A%2F%2Fwww.kaisenbuy.com%2Fgoods-792.html" target="_blank"><img src="/tongmeng/Public/Home/Img/1432870049384914710.jpg" width="242" height="170" border="0" original="/tongmeng/Public/Home/Img/1432870049384914710.jpg" style="display: inline;"></a></td></tr>
</tbody></table></div>
</div>
<ul>
 <div id="page">
	<div class="ju-itemlist" id="mainContent">
		<ul class="clearfix">
			<?php if(is_array($sale)): foreach($sale as $key=>$num): ?><li class="item-small-v1"><div class="item-status not-begin">
				<a target="_blank" href="<?php echo U('Goods/index',array('id'=>$num['id']));?>" class="link-box"><div class="item-pic-wrap">
			<img src="/tongmeng/Public/<?php echo ($num["goodspic"]); ?>" style="display: block; background: url(/tongmeng/Public/Home/Img/loading.gif) 50% 50% no-repeat;" class="item-pic" width="290" height="290" original="/tongmeng/pic/bn.jpg">
			<div class="biz-wrap  ">
			<div class="biz-logo-wrap">
			<span class="biz-logo logo-jmp"></span>
			</div></div></div><i class="soldout-mask"></i>
			<h3 title="<?php echo ($num["goodsname"]); ?>"><?php echo ($num["goodsname"]); ?></h3>
			<div class="item-prices"><span class="price"><i>¥</i><em>
			          <?php echo ($num["price"]); ?>          </em></span>
			<div class="dock"><del class="orig-price"></del></div>
			<span class="sold-num"><em><?php echo ($num["salesnum"]); ?></em> 人已买</span></div>
			</a></div>
			</li><?php endforeach; endif; ?>
		</ul>
	</div>
</div>
</ul>
</div>
<div class="tonglan"></div>
<div class="sale_floor fl">
<div class="news_section">
<h1><a href="" target="_blank"><font style="font-size:16px;">新闻中心</font></a></h1>
<div class="news_box news_box1 fl"><table cellpadding="0" cellspacing="0">
<tbody><tr><td><a href="" target="_blank"><img src="/tongmeng/Public/Home/Img/1427186634111364155.png" width="366" height="321" border="0" original="/tongmeng/Public/Home/Img/1427186634111364155.png" style="display: inline;"></a></td></tr>
</tbody></table></div> 
 
<div class="news_box news_box2 fl"><table cellpadding="0" cellspacing="0">
<tbody><tr><td><a href="" target="_blank"><img src="/tongmeng/Public/Home/Img/1427186686849166916.png" width="327" height="150" border="0" original="/tongmeng/Public/Home/Img/1427186686849166916.png" style="display: inline;"></a></td></tr>
</tbody></table></div> 
<div class="news_box news_box3 fl">
 <table cellpadding="0" cellspacing="0">
<tbody><tr><td><a href="" target="_blank"><img src="/tongmeng/Public/Home/Img/1427186712802603766.png" width="161" height="165" border="0" original="/tongmeng/Public/Home/Img/1427186712802603766.png" style="display: inline;"></a></td></tr>
</tbody></table></div> 
<div class="news_box news_box3 fl">
 <table cellpadding="0" cellspacing="0">
<tbody><tr><td><a href="" target="_blank"><img src="/tongmeng/Public/Home/Img/1427186736667372369.png" width="161" height="165" border="0" original="/tongmeng/Public/Home/Img/1427186736667372369.png" style="display: inline;"></a></td></tr>
</tbody></table></div> 
</div>
<div class="coupon_section">
<h1>精彩活动</h1>
<div class="coupon_box coupon_box1 fl">
 <table cellpadding="0" cellspacing="0">
<tbody><tr><td><a href="" target="_blank"><img src="/tongmeng/Public/Home/Img/1427186806591782423.png" width="159" height="150" border="0" original="/tongmeng/Public/Home/Img/1427186806591782423.png" style="display: inline;"></a></td></tr>
</tbody></table></div> 
<div class="coupon_box coupon_box1 fl">
 <table cellpadding="0" cellspacing="0">
<tbody><tr><td><a href="" target="_blank"><img src="/tongmeng/Public/Home/Img/1427186829458674009.png" width="159" height="150" border="0" original="/tongmeng/Public/Home/Img/1427186829458674009.png" style="display: inline;"></a></td></tr>
</tbody></table></div> 
<div class="coupon_box coupon_box1 fl">
 <table cellpadding="0" cellspacing="0">
<tbody><tr><td><a href="" target="_blank"><img src="/tongmeng/Public/Home/Img/1427186854835489856.png" width="159" height="150" border="0" original="/tongmeng/Public/Home/Img/1427186854835489856.png" style="display: inline;"></a></td></tr>
</tbody></table></div> 
 
<div class="coupon_box coupon_box2 fl"><table cellpadding="0" cellspacing="0">
<tbody><tr><td><a href="" target="_blank"><img src="/tongmeng/Public/Home/Img/1427186876168967779.png" width="324" height="165" border="0" original="/tongmeng/Public/Home/Img/1427186876168967779.png" style="display: inline;"></a></td></tr>
</tbody></table></div> 
<div class="coupon_box coupon_box3 fl"><table cellpadding="0" cellspacing="0">
<tbody><tr><td><a href="" target="_blank"><img src="/tongmeng/Public/Home/Img/1427186897324866508.png" width="159" height="165" border="0" original="/tongmeng/Public/Home/Img/1427186897324866508.png" style="display: inline;"></a></td></tr>
</tbody></table></div> 
</div>
</div>
 
</div>
<!-- 加载底部文件 -->
<?php echo W('Skins/bottom');?>
</body></html>