<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<title></title>
	<link rel="stylesheet" href="">
	<link rel="icon" href="/favicon.png">
	<script src=""></script>
</head>
<body>
	<form action="/tongmeng/index.php/Email/mail" method="post">
		发信用户:<input type="text" name="mail_name" value="" placeholder="">
		发送到:<input type="text" name="mail_host" value="" placeholder="">
		邮件主题:<input type="text" name="mail_title" value="" placeholder="">
		发信内容:<textarea name="mail_contents">
			
		</textarea>
		<input type="submit" name="" value="发送">
	</form>
</body>
</html>