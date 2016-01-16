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

<title>商品列表</title>
<style type="text/css">
    #mws-wrapper{
        margin-left:-150px;text-align:center;list-style:none;
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
                         <form action="" method="post" style="float:left;">
                   搜索:<input type="text" name='goodsname'>
                        <input type="submit" name="sub" value="搜索">
                        </form> 
                    </div>
                    <div class="mws-panel-body no-padding dataTables_wrapper" style="background: none repeat scroll 0 0 #444444;">
                        <table class="mws-table mws-datatable">
                            <thead>
                                <tr>
                                    
                                    <th>商品ID</th>
                                    <th>商品名称</th>
                                    <th>商品价格</th>
                                    <th>商品主图</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php if(is_array($goods)): foreach($goods as $key=>$results): ?><tr>

                                            <td name="tid"><?php echo ($results['tid']); ?></td>
                                            <td name="goodsname"><?php echo ($results['goodsname']); ?></td>
                                            <td name="price"><?php echo ($results['price']); ?>元</td>
                                            <td name="goodspic">
                                           <center><div style="width:60px; height:60px; border:1px solid green">
                                                     <img src="/tongmeng/Public/<?php echo ($results['goodspic']); ?>"/>
                                                </div> </center>
                                            </td>

                                        </tr><?php endforeach; endif; ?>

                                <!--显示页数-->
                                     <tr align="center"><td colspan= 3><?php echo ($Page); ?><td></tr>
                            </tbody>
                        </table>
                        <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate"><?php echo ($pages); ?></div> 
                        
                    </div>
                    <!-- 成功提示信息 -->
                    <div class="mws-form-message success" style="display:none">
                                
                    <!-- </div>
                    <div class="mws-form-message error" style="display:none"> -->
                                
                    </div>
                </div>
          
            
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
    <script src="/tongmeng/Public/js/libs/excanvas.min.js"></script>
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
    <script type="text/javascript">
    //点击删除按钮的时候 给提示信息
        $('.delete').click(function(){
            
            var res = confirm('您确定要删除么?');
            if(!res){
                return false;
            }else{
                //获取id值
                var id = $(this).parents('tr').find('td:first').text();
                //获取tr父级
                $(this).parents('tr').fadeOut();
                //发送ajax
                $.get("<?php echo U('Goods/delete');?>",{id:id},function(msg){
                    if(msg == 0){
                        //删除成功
                        showSuccess('删除成功');

                    }else{
                        //删除失败
                        showError('删除失败');
                    }
                })
                return false;
            }

        })   
    
        
        function showSuccess(str){
            $('.success').html(str);
            $('.success').show();
            setTimeout(function(){
                $('.success').fadeOut();
            },3000)
        } 
        function showError(str){
            $('.error').html(str);
            $('.error').show();
            setTimeout(function(){
                $('.error').fadeOut();
            },3000)
        } 
                  
    </script>
</body>
</html>