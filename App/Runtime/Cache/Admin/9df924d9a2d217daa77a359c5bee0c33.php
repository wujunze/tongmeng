<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/tongmeng/Public/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="/tongmeng/Public/custom-plugins/wizard/wizard.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/tongmeng/Public/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/tongmeng/Public/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/tongmeng/Public/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/tongmeng/Public/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/tongmeng/Public/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/tongmeng/Public/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/tongmeng/Public/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/tongmeng/Public/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/tongmeng/Public/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/tongmeng/Public/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/tongmeng/Public/css/themer.css" media="screen">

<title>同梦网后台管理系统</title>
<style type="text/css">
       #mws-user-tools #mws-user-info #mws-user-functions{font-size:14px;}

</style>
</head>

<body>

	<!-- Themer (Remove if not needed) -->  
    <!-- Themer End -->

	<!-- Header -->
	<div id="mws-header" class="clearfix">
    
    	<!-- Logo Container -->
    	<div id="mws-logo-container">
        
        	<!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
        	<div id="mws-logo-wrap">
            	<img href="/tongmeng/Public/images/tmw-logo.png" alt="童梦网后台">
			</div>
        </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix" style="width:350px;">
        
        	<!-- Notifications -->
        	<div id="mws-user-notif" class="mws-dropdown-menu">
            	<a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-exclamation-sign"></i></a>
                
                <!-- Unread notification count -->
                <span class="mws-dropdown-notif">35</span>
                
                <!-- Notifications dropdown -->
                <div class="mws-dropdown-box">
                	<div class="mws-dropdown-content">
                        <ul class="mws-notifications">
                        	<li class="read">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="read">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
	                        <a href="#">View All Notifications</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Messages -->
            <div id="mws-user-message" class="mws-dropdown-menu">
            	<a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-envelope"></i></a>
                
                <!-- Unred messages count -->
                <span class="mws-dropdown-notif">35</span>
                
                <!-- Messages dropdown -->
                <div class="mws-dropdown-box">
                	<div class="mws-dropdown-content">
                        <ul class="mws-messages">
                        	<li class="read">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="read">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
	                        <a href="#">View All Messages</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset" style="left:0px;width:180px;font-size:14px;">
                <div id="mws-user-functions" style="margin-left:0px;">
                    <div id="mws-username">
                        欢迎管理员, <?php echo (session('username')); ?>
                    </div>
                    <ul>
                        <li><a href="<?php echo U('Admin/Logout');?>">退出登陆</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
    	<!-- Necessary markup, do not remove -->
		<div id="mws-sidebar-stitch"></div>
		<div id="mws-sidebar-bg"></div>
        
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
        
            <!-- Hidden Nav Collapse Button -->
            <div id="mws-nav-collapse">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul>
                     <li>
                        <a href="#"><i class="icon-list"></i>权限管理</a>
                        <ul>
                            <li><a href="<?php echo U('Admin/index');?>" target="frame">管理员列表</a></li>
                            <li><a href="<?php echo U('Admin/add');?>" target="frame">添加管理员</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-list"></i>商品管理</a>
                        <ul>
                            <li><a href="<?php echo U('Goodstype/index');?>" target="frame">商品分类列表</a></li>
                            <li><a href="<?php echo U('Goodstype/add');?>" target="frame">添加分类和品牌</a></li>
                            <li><a href="<?php echo U('Goods/index');?>" target="frame">商品详情列表</a></li>

                            
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-list"></i>订单列表</a>
                        <ul>
                            <li><a href="<?php echo U('Order/index');?>"  target="frame">订单列表</a></li>
							<li><a href="<?php echo U('Logistics/index');?>"  target="frame">物流管理</a></li>
							<li><a href="<?php echo U('Logistics/add');?>"  target="frame">添加物流</a></li>
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="icon-list"></i>主导航管理</a>
                        <ul>
                            <li><a href="<?php echo U('Nav/index');?>" target="frame">列表</a></li>
                            <li><a href="<?php echo U('Nav/addNav');?>" target="frame">添加</a></li>

                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="icon-list"></i>评论管理</a>
                        <ul>
                            <li><a href="<?php echo U('Comment/index');?>"  target="frame">评论列表</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-list"></i>用户管理</a>
                        <ul>
                            <li><a href="<?php echo U('User/Index');?>" target="frame">用户列表</a></li>
                            
                            <li><a href="<?php echo U('User/Add');?>" target="frame">添加用户</a></li>
                            
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="icon-list"></i>帮助中心</a>
                        <ul>

                            <li><a href="<?php echo U('Help/Index');?>" target="frame">帮助列表</a></li>
                            
                            <li><a href="<?php echo U('Help/Add');?>" target="frame">添加帮助</a></li>

                        </ul>
                    </li>
                    
                    <li>
                        <a href="#"><i class="icon-list"></i>应聘表</a>
                        <ul>

                            <li><a href="<?php echo U('Job/Index');?>" target="frame">应聘列表</a></li>
                            

                        </ul>
                    </li>

                    <!--网站系统设置管理-->
                    <li>
                        <a href="#"><i class="icon-list"></i>系统设置</a>
                        <ul>
                            <li><a href="<?php echo U('config/index');?>" href="form_elements.html" target="frame">网站配置</a></li>
                        
                            <li><a href="<?php echo U('Link/index');?>" href="form_elements.html" target="frame">友情链接</a></li>
                            <li><a href="<?php echo U('Mail/index');?>" href="form_elements.html" target="frame">邮件配置</a></li>
                        </ul>
                    </li>

                 <!--公告管理-->
                   <li>
                        <a href="#"><i class="icon-list"></i>公告管理</a>
                        <ul>
                            <li><a href="<?php echo U('Bulletin/index');?>" target="frame">公告列表</a></li>
                            <li><a href="<?php echo U('Bulletin/add');?>" target="frame">公告添加</a></li>
                        </ul>
                    </li>    
                  <!--广告管理结束-->
                  	<li>
                        <a href="#"><i class="icon-list"></i>广告管理</a>
                        <ul>
                            <li><a href="<?php echo U('Advertising/index');?>" target="frame">广告列表</a></li>
                            <li><a href="<?php echo U('Advertising/add');?>" target="frame"> 广告添加</a></li>
                        </ul>
                    </li>   	
                  <!--用户反馈开始-->
                   <li>
                        <a href="#"><i class="icon-list"></i>用户反馈管理</a>
                        <ul>
                            <li><a href="<?php echo U('Feedback/index');?>" target="frame">反馈列表</a></li>
                          	<li><a href="<?php echo U('/Love/index');?>" target="frame">爱心捐赠管理</a></li>
                        </ul>
                    </li>    					

                  <!--用户反馈结束-->
                  
                </ul>

            </div>         
        </div>
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
            <iframe src="<?php echo U('Index/welcome');?>" frameborder="0" width="100%" height="900" border='1' name="frame"></iframe>
        </div>
        <!-- Main Container End -->
        
    </div>

    <!-- JavaScript Plugins -->
    <script src="/tongmeng/Public/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/tongmeng/Public/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/tongmeng/Public/js/libs/jquery.placeholder.min.js"></script>
    <script src="/tongmeng/Public/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/tongmeng/Public/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/tongmeng/Public/jui/jquery-ui.custom.min.js"></script>
    <script src="/tongmeng/Public/jui/js/jquery.ui.touch-punch.js"></script>

    <!-- Plugin Scripts -->
    <script src="/tongmeng/Public/plugins/datatables/jquery.dataTables.min.js"></script>
    <!--[if lt IE 9]>
    <script src="js/libs/excanvas.min.js"></script>
    <![endif]-->
    <script src="/tongmeng/Public/plugins/flot/jquery.flot.min.js"></script>
    <script src="/tongmeng/Public/plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
    <script src="/tongmeng/Public/plugins/flot/plugins/jquery.flot.pie.min.js"></script>
    <script src="/tongmeng/Public/plugins/flot/plugins/jquery.flot.stack.min.js"></script>
    <script src="/tongmeng/Public/plugins/flot/plugins/jquery.flot.resize.min.js"></script>
    <script src="/tongmeng/Public/plugins/colorpicker/colorpicker-min.js"></script>
    <script src="/tongmeng/Public/plugins/validate/jquery.validate-min.js"></script>
    <script src="/tongmeng/Public/custom-plugins/wizard/wizard.min.js"></script>

    <!-- Core Script -->
    <script src="/tongmeng/Public/bootstrap/js/bootstrap.min.js"></script>
    <script src="/tongmeng/Public/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/tongmeng/Public/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="/tongmeng/Public/js/demo/demo.dashboard.js"></script>

</body>
</html>