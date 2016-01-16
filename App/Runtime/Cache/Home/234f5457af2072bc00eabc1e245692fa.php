<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>童梦网程序安装 - Powered by tongmeng</title>
<link rel="stylesheet" href="/tongmeng/Public/install/images/css.css" />
</head>
<body>
	<div class="wrap">
		<div class="header">
			<h1 class="logo">logo</h1>
					<div class="icon_install">安装向导</div>
					<div class="version">v4</div>
		</div><div class="section">
	<div class="step">
		<ul>
			<li class="current"><em>1</em>检测环境</li>
			<li><em>2</em>创建数据</li>
			<li><em>3</em>完成安装</li>
		</ul>
	</div>
	<div class="server">
		<table width="100%">
			<tr>
				<td class="td1">环境检测</td>
				<td class="td1" width="25%">推荐配置</td>
				<td class="td1" width="25%">当前状态</td>
				<td class="td1" width="25%">最低要求</td>
			</tr>
			
			<tr>
				<td>操作系统</td>
				<td>Linux</td>
				<td>
<span class="correct_span">&radic;</span>
<?php $up=TRUE; $os = explode(" ", php_uname()); echo $os[0];?></td>
				<td>不限制</td>
			</tr>
			<tr>
				<td>PHP版本</td>
				<td>>5.2.x</td>
				<td><?php echo ($php); echo PHP_VERSION;?></td>
				<td>5.1.2</td>
			</tr>
			<tr>
				<td>Mysql扩展（client）</td>
				<td>>5.x.x</td>
				<td><?php echo ($mysql); ?></td>
				<td>5.0.x</td>
			</tr>
			<tr>
				<td>Session</td>
				<td>开启</td>
				<td><?php echo ($session); ?></td>
				<td>必须开启</td>
			</tr>
			<tr>
				<td>附件上传</td>
				<td>>20M</td>
				<td>
<span class="correct_span">&radic;</span>
<?php echo ini_get('upload_max_filesize');?></td>
				<td>不限制</td>
			</tr>
		</table>
		<table width="100%">
			<tr>
				<td class="td1">目录、文件权限检查</td>
				<td class="td1" width="25%">当前状态</td>
				<td class="td1" width="25%">所需状态</td>
			</tr>
<?php  $dirall="./App/|./App/Lib/|./ThinkPHP/"; $exp=explode('|',$dirall); for($j=0;$j<count($exp);$j++){ echo '			<tr>
				<td>'.$exp[$j].'</td>
          '; if(EDITDIR($exp[$j])){ echo '<td><span class="correct_span">&radic;</span>可写</td>'; }else{ $up=false; echo '<td><span class="error_span">&times;</span>不可写或不存在</td>'; } echo '<td>读/写</td>
			</tr>'; } ?>
		</table>
	</div>
	<div class="bottom tac">
		<a href="/tongmeng/index.php/Install/save1" class="btn">重新检测</a><a href="/tongmeng/index.php/Install/save2" class="btn" <?php if(!$up) echo 'disabled';?>>下一步</a> <?php if(!$up) echo '<font color=red>请先完成以上没有通过的信息!</font>';?>
	</div>
</section>
	</div>
	<div class="footer">
		&copy; 2015 <a href="" target="_blank">童梦网版权所有</a>
	</div>
<?php
function EDITDIR($filename){ if(is_dir($filename)){ $cswj=$filename."cs_text.txt"; if(@fwrite(fopen($cswj,"wb"),"tongmeng")){ $rs=@unlink($cswj); if($rs){ return true; } }else{ return false; } }else{ return false; } } ?>
</body>
</html>