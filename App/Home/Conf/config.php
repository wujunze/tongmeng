<?php
	//加载数据库配置文件
	require(APP_PATH.'Lib/tm_db.php');
	require(APP_PATH.'Lib/tm_mail.php');
	return array(
		//'配置项'=>'配置值'
		'DB_TYPE'               =>  Sql_type,     // 数据库类型
        'DB_HOST'               =>  Sql_host, // 服务器地址
        'DB_NAME'               =>  Sql_name,          // 数据库名
        'DB_USER'               =>  Sql_user,      // 用户名
        'DB_PWD'                =>  Sql_pwd,          // 密码
        'DB_PORT'               =>  Sql_port,        // 端口
        'DB_PREFIX'             =>  Sql_prefix,    // 数据库表前缀
        'DB_CHARSET'            =>  Sql_charset,      // 数据库编码默认采用utf8
        'SHOW_PAGE_TRACE' 		=>	true, 				// 显示页面Trace信息 (thinkPHP调试小按钮)

        'MAIL_ADDRESS'			=>	Mail_From, // 邮箱地址
    	'MAIL_SMTP'				=>	Mail_Host, // 邮箱SMTP服务器
    	'MAIL_LOGINNAME'		=>	Mail_User, // 邮箱登录帐号
    	'MAIL_PASSWORD'			=>	Mail_Pass, // 邮箱密码
    	'MAIL_CHARSET'			=>	'UTF-8',//编码
    	'MAIL_AUTH'				=>true,//邮箱认证
    	'MAIL_HTML'				=>true,//true HTML格式 false TXT格式
	);