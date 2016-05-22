<?php
return array(
	//'配置项'=>'配置值'
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => 'localhost', // 服务器地址
	'DB_NAME'   => 'admin', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => 'zhang123', // 密码
	'DB_PORT'   => 3306, // 端口
	'DB_PARAMS' =>  array(), // 数据库连接参数
	'DB_PREFIX' => 'zz_', // 数据库表前缀 
	'DB_CHARSET'=> 'utf8', // 字符集
	'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
	'APP_SUB_DOMAIN_DEPLOY'=>true, // 开启子域名配置
	/*子域名配置 
		*格式如: '子域名'=>array('分组名/[模块名]','var1=a&var2=b'); 
    */ 
	'APP_SUB_DOMAIN_RULES'=>array(   
		'm'=>array('Admin/'),  // admin域名指向Admin分组
	),
);