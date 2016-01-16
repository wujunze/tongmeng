<?php if (!defined('THINK_PATH')) exit();?><!-- 头部 -->
<?php echo W('Skins/uinfo');?>
<div id="header">
    <div class="head clearfix">
        <div class="hd">
        <a title="玩具就是童梦网！" href="/tongmeng" id="logo"><img src="/tongmeng/Uploads/<?php echo ($config['logo']); ?>" alt=""></a>
    </div>
    <div class="tab_search">
        <form id="searchForm" name="searchForm" method="post" action="<?php echo U('Search/index');?>">
            <input class="searchinput" title="search" size="10" placeholder="积木 变形金刚" name="goodsname">
            <input class="btn-css3 ok_btn" border="0" value="搜索" type="submit">
        </form> 
    </div>
    <div class="keyW">
        <em>热门搜索:</em>
         <a href="">早教玩具</a>
         <a href="">芭比娃娃</a>
         <a href="">遥控飞机</a>
        
    </div>
    <span id="ECS_CARTINFO"><a href="<?php echo U('Goods/Cart');?>" class="cart" title="查看购物车">我的购物车( <font id="cartTopGoodsNumber" color="#444444"><?php echo ($cartNum?$cartNum:'0'); ?></font> )</a></span>
</div>

<div class="nav_menu">
    <div class="nav">
        <div class="list" id="navlist">
            <ul id="navfouce">
                <li class="all_co"><a href="/tongmeng">所有商品分类</a></li>
                
                <li><a id="JS_Header_Home_Link" href="/tongmeng" class="index current">首页</a></li>
                <?php if(is_array($navs)): foreach($navs as $key=>$nav): ?><li><a href="<?php echo ($nav["links"]); ?>" target="_blank" style="position:relative;"><?php echo ($nav["name"]); ?></a></li><?php endforeach; endif; ?>
                <li><a href="<?php echo U('Love/index');?>" style="position:relative;" class="">悦读成长计划<img src="/tongmeng/Public/Home/Img/new4.gif" style="position:absolute;background:none;right:0px;top:-5px;" original="/tongmeng/Public/Home/Img/new4.gif"></a></li>
                <li><a href="" style="position:relative;" class="">暑价来啦<img src="/tongmeng/Public/Home/Img/hot.gif" style="position:absolute;background:none;right:0px;top:-5px;" original="/tongmeng/Public/Home/Img/hot.gif"></a></li> 
            </ul>
        </div>
        
        <div class="box" id="navbox" style="height: 0px; opacity: 0; overflow: hidden;">
        
            <div class="cont" style="display:none;">
                <ul class="sublist clearfix">
                <?php echo W('Skins/navlist');?>
            </ul>
        </div>
        
        </div>
    </div>
</div>
<script type="text/javascript">
(function(){
    var time = null;
    var list = $("#navlist");
    var box = $("#navbox");
    var lista = list.find("a");
    
    for(var i=0,j=lista.length;i<j;i++){
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
        $(this).addClass("now");
        clearTimeout(time);
        var index = list.find("a").index($(this));
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
        var _index = box.find(".cont").index($(this));
        lista.removeClass("now");
        lista.eq(_index).addClass("now");
        clearTimeout(time);
        $(this).show();
        var _height = $(this).height()+0;
        box_show(_height);
    },function(){
        time = setTimeout(function(){       
            $(this).hide();
            box_hide();
        },50);
        lista.removeClass("now");
        lista.eq(olda).addClass("now");
    });
})();
</script>
</div>