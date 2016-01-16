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

<title>商品分类列表</title>
<style type="text/css">
    #mws-wrapper{
        margin-left:-150px;
    }
    .dataTables_wrapper{
        background: none repeat scroll 0 0 #444444;
    }
    #DataTables_Table_1_paginate a,#DataTables_Table_1_paginate span{width:20px;height:20px;margin-right:10px;display:block;float:left;}

    .text_center{
        text-align:center;
    }
    
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
                        搜索:<input type="text" name='name'>
                        <input type="submit" name="sub" value="搜索">
                       
                    </div>

                    <div class="mws-panel-body no-padding dataTables_wrapper" style="background: none repeat scroll 0 0 #444444;">
                        <table class="mws-table mws-datatable">
                            <thead>
                                <tr>
                                    <th>pic</th>
                                    <th>ID</th>
                                    <th>名称</th>
                                    <th>板块</th>
                                    <th>分区</th>
                                    <th>添加</th>
                                    <th>删除</th>
                                    
                                </tr>
                            </thead>
                            <tbody> 
                               <?php if(is_array($goodstype)): foreach($goodstype as $key=>$val): ?><tr>
                                  <td class="text_center">
                                <?php if($val['pid'] == 0): ?><img src = '/tongmeng/Public/images/red.png'>
                             <?php else: ?><img src = '/tongmeng/Public/images/black.png'><?php endif; ?></td>
                                  <td class="text_center"><?php echo ($val['id']); ?></td>
                                  
                          <!--品牌下的商品展示-->
                                  <td class="text_center">
                                        <?php if($val['pid'] == 0): echo ($val['name']); ?>
                                        <?php else: ?>
                                        <a style="color:#FFBB00; font-weight:bold;" href="/tongmeng/admin.php/Goodstype/branddetail/id/<?php echo ($val['id']); ?>"><?php echo ($val['name']); ?></a><?php endif; ?> 
                                  </td>

                                  <td class="text_center"><?php echo ($val['pid']); ?></td>
                                  <td class="text_center"><?php echo ($val['path']); ?></td>
                                  
                                  <td class="text_center">
                                      <?php if($val['pid'] == 0): ?><a href="/tongmeng/admin.php/Goodstype/addbrand/id/<?php echo ($val['id']); ?>"><img src="/tongmeng/Public/images/add.png"/></a>
                                      <?php else: ?>
                                         <a href="<?php echo U('Goods/addsp',array('id'=>$val['id']));?>">
                                          <img src="/tongmeng/Public/images/addblue.png"> 
                                         </a><?php endif; ?>     
                                  </td>


                                  <td class="text_center">
                                          <a href="/tongmeng/admin.php/Goodstype/del/id/<?php echo ($val['id']); ?>/pid/<?php echo ($val['pid']); ?>"><img src="/tongmeng/Public/images/del.png"/></a>
                                  </td>
                                </tr><?php endforeach; endif; ?>

                      <!--显示页数-->
                            <tr style="font-size:18px; font-weight:bold;" align="center"><td colspan=6><?php echo ($Page); ?><td></tr>

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