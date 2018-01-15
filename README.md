Thinkphp5.1 发送短信
======

### 安装
~~~
composer require myxland/think-sms:dev-master
php think sms:config
~~~

### 用法
~~~
下载证书文件
https://curl.haxx.se/ca/cacert.pem
~~~
~~~
修改php.ini
curl.cainfo = /绝对路径/cacert.pem
~~~
~~~
<?php
use myxland\sms\Sms;

$result = Sms::app()->send(15804245680, [
	'template' => 'SMS_10996345',
	'data' => [
		'code' => 6379
	],
]);
var_dump($result);
~~~