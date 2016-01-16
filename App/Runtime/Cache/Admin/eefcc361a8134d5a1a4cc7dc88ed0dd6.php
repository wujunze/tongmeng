<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>查看帮助</title>
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
        <div id="mws-container" class="clearfix"  style="margin-left:-10px">
        
            <div class="mws-panel grid_8">
                    <div class="mws-panel-header">
                        <span>查看帮助</span>
                    </div><br/>
                    <div class="mws-panel-body no-padding">
                        
                            <div class="mws-form-inline">
                                <div class="mws-form-item" >
                                 帮助主题:   
                                        <input type="text" class="small" name="title" value="<?php echo ($help['title']); ?>" style="width:800px;">
                                   
                                </div><br/>

                                <div class="mws-form-row"  style="margin-left:10px">
                                  帮助内容:
                                        <textarea name="content"  cols=100 rows = 20>        <?php echo ($help['content']); ?>
                                        </textarea>
                                   
                                </div>
                      
                                 
                            </div>
                            <div class="mws-button-row">
                               
                               <center>
                                   <a href="<?php echo U('Help/index');?>">返回帮助列表</a>
                               </center>
                            </div>
                       
                    </div>      
                </div>
        
            <!-- Footer -->
          
            
        </div>

</body>
</html>