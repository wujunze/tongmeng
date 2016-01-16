<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">
<script src="jquery.js"></script>
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
<script type="text/javascript">
    $(function(){
        $('#cid').change(function(){
             var data = $(this).val();
            alert(data);
        });
    })
</script>
</head>

<body>
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
        
            <div class="mws-panel grid_8">
                    <div class="mws-panel-header">
                        <span>添加商品</span>
                    </div>
                    <div class="mws-panel-body no-padding">
           <!--from提交表单-->  
                        <form class="mws-form" action="/tongmeng/admin.php/Goods/goodsadd" method="post" enctype="multipart/form-data">

                            <div class="mws-form-inline">
                                

                       <!--商品名称-->
                                <div class="mws-form-row">
                                    <label class="mws-form-label">商品名称:</label>
                                    <div class="mws-form-item">
                                        <input type="text" class="small" name="goodsname" id="protitle" value="<?php echo ($value['goodsname']); ?>">
                                        <span class="good" id="tit">商品名称不能为空</span>
                                    </div>

                                </div>

                        <!--商品价格-->
                                <div class="mws-form-row">
                                    <label class="mws-form-label">商品价格:</label>
                                    <div class="mws-form-item">
                                        <input type="text" class="small" name="price" id="price" value="<?php echo ($goodsInfo['price']); ?>"><span class="good">商品价格不能为空</span>
                                    </div>
                                </div>
                        <!--商品销量-->        
                                <div class="mws-form-row">
                                    <label class="mws-form-label">商品销量:</label>
                                    <div class="mws-form-item">
                                        <input type="text" class="small" name="salesnum" id="member" value="<?php echo ($goodsInfo['member']); ?>"><span class="good">会员优惠价格不能为空</span>
                                    </div>
                                </div>

                            
                              

                         <!--商品库存--> 
                                <div class="mws-form-row">
                                    <label class="mws-form-label">商品库存:</label>
                                    <div class="mws-form-item">
                                        <input type="number" class="small" name="stock" id="goodsnum" value="<?php echo ($goodsInfo['goodsnum']); ?>"><span class="good">库存数量不能为空</span>
                                    </div>
                                </div>



                        <!--商品评论次数-->
                                <div class="mws-form-row">
                                    <label class="mws-form-label">评论次数:</label>
                                    <div class="mws-form-item">
                                        <input type="number" class="small" name="comment" id="goodsnum" value="<?php echo ($goodsInfo['goodsnum']); ?>"><span class="good">库存数量不能为空</span>
                                    </div>
                                </div>




                        <!--商品描述-->
                              <div class="mws-form-row">
                                   <label class="mws-form-label">商品描述:</label>
                                   <div class="mws-form-item">
                                          <script id="editor" type="text/plain" style="width:800px;height:80px;" name = "goodsdesc">
                                              <?php echo ($goodsInfo['contents']); ?>
                                          </script>
                                   </div>
                               </div> 





                        <!--商品图片-->

                                 <div class="mws-form-row" style="width:50%;">
                                    <label class="mws-form-label">商品主图:</label>
                                    <div class="mws-form-item">
                                        
                                        <input type="file" class="small" name="goodspic" id="proimg">
                                    </div>
                                </div>



                       
                               

                        <!--是否可以使用优惠券-->
                                <div class="mws-form-row">
                                    <label class="mws-form-label">使用优惠卷:</label>
                                    <div class="mws-form-item">
                                        <select class="small" name='cupon' id="hgoods">
                                                <option value="1">请选择</option>
                                                <option value="1" selected</if>可以</option>
                                                <option value="0"  selected</if>不可以</option>
                                        </select><span class="good">精品设置不能为空</span>
                                        
                                    </div>
                                </div> 
                                    
                
                        
                        <!--上架下架-->
                                <div class="mws-form-row">
                                    <label class="mws-form-label">是否上架:</label>
                                    <div class="mws-form-item">
                                        <select class="small" name='status' id="hgoods">
                                                <option value="1">请选择</option>
                                                <option value="1" selected</if>上架</option>
                                                <option value="0"  selected</if>下架</option>
                                        </select><span class="good">精品设置不能为空</span>
                                        
                                    </div>
                                </div> 
                               
                               
                                
                               
                               
                            </div>
                            <div class="mws-button-row">
                                <input type="hidden" name="tid" value="<?php echo ($_GET['id']); ?>">
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
    <script type="text/javascript" src="/tongmeng/Public/ueditor/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
   <script type="text/javascript" src="/tongmeng/Public/ueditor/ueditor.all.js"></script>                      
    <!-- JavaScript Plugins -->
    <script src="/tongmeng/Public/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/tongmeng/Public/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/tongmeng/Public/js/libs/jquery.placeholder.min.js"></script>
    <script src="/tongmeng/Public/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/tongmeng/Public/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/tongmeng/Public/jui/jquery-ui.custom.min.js"></script>
    <script src="/tongmeng/Public/jui/js/jquery.ui.touch-punch.js"></script>
    <script src="/tongmeng/Public/jui/js/timepicker/jquery-ui-timepicker.min.js"></script>

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

    <script type="text/javascript" src="/tongmeng/Public/My97DatePicker/WdatePicker.js"></script>
    <script type="text/javascript"> 
    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
          var ue = UE.getEditor('editor');
    ue.ready(function() {

    //获取html内容，返回: <p>hello</p>
    var html = ue.getContent();
    //获取纯文本内容，返回: hello
    var txt = ue.getContentTxt();
    });
    </script>


</body>
</html>