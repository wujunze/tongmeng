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
<!--ueditor开始-->
    <script type="text/javascript" charset="utf-8" src="/tongmeng/Public/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/tongmeng/Public/ueditor/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="/tongmeng/Public/ueditor/lang/zh-cn/zh-cn.js"></script>
<!--ueditor结束-->
<title>商品添加</title>
<style type="text/css">
    #mws-wrapper{
        margin-left:-150px;
    }
    .good{color:red;width:150px;position:absolute;margin-left:10px;display:none;}
</style>
</head>

<body>
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
        
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
        
            <div class="mws-panel grid_8">
                    <div class="mws-panel-header">
                        <span>添加商品分类</span>
                    </div>
                    <div class="mws-panel-body no-padding">

        <!--提交表单-->
                        <form class="mws-form" action="/tongmeng/admin.php/Goodstype/insert" method="post" >
                            <div class="mws-form-inline">
                              
                                <div class="mws-form-row">
                                    <label class="mws-form-label">添加分类:</label>
                                    <div class="mws-form-item">
                                        <input type="text" class="small" name="name" id="protitle">
                                        <!--<span class="good" id="tit"></span>-->
                                    </div>

                                </div>

                              
                            <div class="mws-button-row">
                                <input type="submit" value="提交" class="btn btn-danger" id="button">
                                <input type="reset" value="重置" class="btn ">
                            </div>
                        </form>
                    </div>      
                </div>
                <div id="right"></div>
          
                        
        </div>
        <!-- Main Container End -->
    </div>
    

</body>
</html>