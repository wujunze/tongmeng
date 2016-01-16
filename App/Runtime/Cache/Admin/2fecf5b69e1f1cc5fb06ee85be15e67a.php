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

<title>友情链接列表</title>
<style type="text/css">
    #mws-wrapper{
        margin-left:-150px;
    }
    .dataTables_wrapper{
        background: none repeat scroll 0 0 #444444;
    }
    #DataTables_Table_1_paginate a,#DataTables_Table_1_paginate span{width:20px;height:20px;margin-right:10px;display:block;float:left;}
    #tianjia{
        position:absolute;
        right:50px;
        font-size:20px;
        float:left;
        margin-left:80px;
        color:#fff;
         cursor:pointer;
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
                        <span><i class="icon-table"></i>友情链接列表<a id="tianjia" href="<?php echo U('Link/add');?>">添加</a></span>
                    </div>
                    
                    <div class="mws-panel-body no-padding dataTables_wrapper" style="background: none repeat scroll 0 0 #444444;">
                        <table class="mws-table mws-datatable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>网站名称</th>
                                    <th>网站地址</th>                                
                                    <th>操作</th>
                                </tr>
                            </thead>
                            
                            <tbody id="neirong">
                                <?php if(is_array($links)): foreach($links as $k=>$vo): ?><tr>
                                    <td name="id" class="linkid"><?php echo ($vo['id']); ?></td>
                                    <td name="linktitle"><?php echo ($vo['linkname']); ?></td>
                                    <td name="linkurl"><?php echo ($vo['links']); ?></td>
                                    
                                    
                                 

                                    <td>
                                    <span class="btn-group">
                                        <a href="<?php echo U('Link/edit',array('id'=>$vo['id']));?>" class="btn btn-small"><i class="icon-pencil"></i></a>
                                        <a href="<?php echo U('Link/delete',array('id'=>$vo['id']));?>" class="btn btn-small delete" ><i class="icon-trash"></i></a>
                                    </span>
                                    </td>
                                </tr><?php endforeach; endif; ?>
                            </tbody>
                        </table>
                        
                        <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate"><?php echo ($pages); ?></div>
                        
                    </div>
                    <!-- 成功提示信息 -->
                    <div class="success" style="display:none">
                                
                    </div>
                    <div class="error" style="display:none">
                                
                    </div>
                </div>
          
            
        </div>
        <!-- Main Container End -->
        


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
                $.get("<?php echo U('Link/delete');?>",{id:linkid},function(msg){
                    if(msg == 0){
                        //删除成功
                        showSuccess('删除成功');
                    }else{
                        //删除失败
                        showError('删除失败');
                    }
                })
                // return true;
            }
            return false;
        })  
    window.onload = function(){
        $('.linkid').html();

    }
                  
    </script>
</body>
</html>