<?php

$config = require base_path('config.php'); //引入連線檔案
use controllers\AuthController\AuthController;
//dd($config);
$resp = new AuthController($config['database']);

$resp->logout(); //登出
