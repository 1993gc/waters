<?php
/**
 * Created by PhpStorm.
 * User: GAO
 * Date: 2016/11/11
 * Time: 10:20
 */
// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 绑定访问Admin模块
define('BIND_MODULE','Admin');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

// 定义应用目录
define('APP_PATH','./Application/');
define('PUBLIC','./Public/');
// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';
