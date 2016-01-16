<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>

    <title></title>
    <mate charset = 'utf-8'/>
</head>
<body>
         <form  action="/tongmeng/admin.php/Bulletin/insert" method="post">

                <input type="text" name='title'/>

                <input type="text" name='btime'/>

                <textarea name="content" style="width:50em; heigth:40em;"></textarea> 

                <input type="submit" value="提交">

        </form>
</body>
</html>