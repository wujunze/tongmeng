<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/tongmeng/Public/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/tongmeng/Public/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/tongmeng/Public/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/tongmeng/Public/css/login.css" media="screen">

<link rel="stylesheet" type="text/css" href="/tongmeng/Public/css/mws-theme.css" media="screen">

<title>后台管理员登陆——童梦网</title>
<style type="text/css">
        .err{height:20px;background:#35353a;font-size:14px;padding-left:40px;}
        .err ul{display:none;}
        .err li{color:#f00;}
        #mws-login .mws-login-button{height:30px;font-weight:bold;font-size:14px;cursor:pointer;}
        #mws-login-form{height:200px;}

</style>
</head>
<body>

    <div id="mws-login-wrapper">
        <div id="mws-login">
            <h1>后台登陆——童梦网</h1>
            <div class="mws-login-lock"><i class="icon-lock"></i></div>
            <div id="mws-login-form">
                <form class="mws-form" action="/tongmeng/admin.php/Admin/dologin" method="post">
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="text" name="username" class="mws-login-username required" placeholder="username">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="password" name="password" class="mws-login-password required" placeholder="password">
                        </div>
                    </div>
                    <div class="mws-form-row mws-inset err" id="mws-login-remember">
                        <ul class="mws-form-list inline">
                            <li id="error"></li>
                        </ul>
                    </div>
                    <div class="mws-form-row">
                        <input type="submit" value="登&nbsp;陆" class="btn btn-success mws-login-button">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript Plugins -->
    <script src="/tongmeng/Public/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/tongmeng/Public/js/libs/jquery.placeholder.min.js"></script>
    <script src="/tongmeng/Public/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/tongmeng/Public/jui/js/jquery-ui-effects.min.js"></script>

    <!-- Plugin Scripts -->
    <script src="/tongmeng/Public/plugins/validate/jquery.validate-min.js"></script>

    <!-- Login Script -->
    <script src="/tongmeng/Public/js/core/login.js"></script>

</body>
</html>