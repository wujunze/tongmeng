<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>修改用户</title>
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
    </head>
       <body>
  <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
        
            <div class="mws-panel grid_8" style="margin-left:-100px;">
                    <div class="mws-panel-header">
                        <span>修改用户资料</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <form class="mws-form" action="/tongmeng/admin.php/User/update" method="post">
                            <div class="mws-form-inline">
                                <div class="mws-form-row">
                                    <label class="mws-form-label">用户名:</label>
                                    <div class="mws-form-item">
                                        <input type="text" class="small" name="username" value="<?php echo ($user['username']); ?>">
                                    </div>
                                </div>

                                <div class="mws-form-row">
                                    <label class="mws-form-label">密码:</label>
                                    <div class="mws-form-item">
                                        <input type="password" class="small" name="password" >
                                    </div>
                                </div>
                                
                               <div class="mws-form-row">
                                    <label class="mws-form-label">auth权限</label>
                                    <div class="mws-form-item">
                                        <select class="small" name='auth' id="hgoods">
                                                <option value="1" checked>1</option>
                                                <option value="0" >0</option>
                                        </select><span class="user">auth权限不能为空</span>
                                        
                                    </div>
                                </div> 

                             <div class="mws-form-row">
                                    <label class="mws-form-label">status权限</label>
                                    <div class="mws-form-item">
                                        <select class="small" name='status' id="hgoods">
                                                <option value="1" checked>1</option>
                                                <option value="0" >0</option>
                                        </select><span class="user">status权限不能为空</span>
                                        
                                    </div>
                                </div> 
                                
                            </div>
                            <div class="mws-button-row">
                                <center>
                                    <input type="hidden" name="id" value="<?php echo ($user['id']); ?>"/>
                                    <input type="submit" value="提交" class="btn btn-danger">
                                    <input type="reset" value="重置" class="btn ">
                                </center>
                            </div>
                        </form>
                    </div>      
                </div>
        
            <!-- Footer -->
          
            
        </div>

</body>
</html>