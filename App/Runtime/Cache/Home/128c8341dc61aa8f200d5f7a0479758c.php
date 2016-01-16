<?php if (!defined('THINK_PATH')) exit(); if(is_array($navs)): foreach($navs as $key=>$nav): ?><div class="nav">
        <?php echo ($nav['title']); ?>
    </div><?php endforeach; endif; ?>