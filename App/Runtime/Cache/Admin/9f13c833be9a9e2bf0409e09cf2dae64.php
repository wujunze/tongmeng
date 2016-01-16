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

<title>公告列表</title>
<style type="text/css">
    #mws-wrapper{
        margin-left:-150px;
    }
    .dataTables_wrapper{
        background: none repeat scroll 0 0 #444444;
    }
    #DataTables_Table_1_paginate a,#DataTables_Table_1_paginate span{width:20px;height:20px;margin-right:10px;display:block;float:left;}
    
</style>
</head>

<body>
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
        
        
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
            
             <div class="mws-panel grid_8 mws-collapsible">
             
                    
                    <div class="mws-panel-header">

               <!--form-->
                        <form action="" method="post">
                        

                    </div>

                    <div class="mws-panel-body no-padding dataTables_wrapper" style="background: none repeat scroll 0 0 #444444;">
                        <table class="mws-table mws-datatable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>图片名称</th>
                                    <th>用途说明</th>
                                    <th>保存路径</th>
                                    <th>用途</th>
                                    <th>删除</th>
                                    
                                </tr>
                            </thead>
                            <tbody> 
                           		 <?php if(is_array($advertising)): foreach($advertising as $key=>$val): ?><tr>
                           		 		<td><?php echo ($val['id']); ?></td>
                           		 		<td><?php echo ($val['img']); ?></td>
                           		 		<td><?php echo ($val['content']); ?></td>
                           		 		<td><?php echo ($val['links']); ?></td>
                           		 		<td><a href="/tongmeng/admin.php/Advertising/see/
                           		 		id/<?php echo ($val['id']); ?>">查看</a></td>
                           		 		<td><a href="/tongmeng/admin.php/Advertising/del/id/<?php echo ($val['id']); ?>">删除</a></td>
                           		 	</tr><?php endforeach; endif; ?>

                            </tbody>
                               

                        </table>
                        
                        <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate"></div>
                        
                    </div>
                    <!-- 成功提示信息 -->
                    <div class="mws-form-message success" style="display:none">
                                
                    </div>
                    <div class="mws-form-message error" style="display:none">
                                
                    </div>
                </div>
          
            
        </div>
        <!-- Main Container End -->
        
    </div>

</body>
</html>