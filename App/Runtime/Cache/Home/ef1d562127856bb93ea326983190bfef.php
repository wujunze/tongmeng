<?php if (!defined('THINK_PATH')) exit();?><!-- <?php if(is_array($type)): foreach($type as $key=>$val): if(is_array($val)): foreach($val as $key=>$i): echo ($i); ?><br /><?php endforeach; endif; endforeach; endif; ?> -->
<?php if(is_array($type)): foreach($type as $key=>$val): ?><li style="border-bottom:none; border-right:none;">
<h3 class="mcate-item-hd lipin">
    <span><a style="float:left;" href=""><?php echo ($val['name']); ?></a></span>
</h3>

    <p class="mcate-item-bd">
    <?php if(is_array($val['child'])): foreach($val['child'] as $key=>$a): ?><a href="<?php echo U('Viewgoods/index',array('id'=>$a['id']));?>"><?php echo ($a['name']); ?></a><?php endforeach; endif; ?>
    </p>
</li><?php endforeach; endif; ?>