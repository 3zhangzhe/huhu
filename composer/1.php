<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
include './vendor/autoload.php';
// create a log channel
// $log = new Logger('name');
// $log->pushHandler(new StreamHandler('./log/'.date('Ymd').'.log', Logger::WARNING));

// // add records to the log
// $log->warning('Foo');
// $log->warning('这是一个警告！');
// $log->error('Bar');

$curl = new Curl\Curl();
$curl->get('http://www.baidu.com/');
echo $curl->response;