<?php
//session_start();
use core\Database;
//$heading ="Login in";
//var_dump(session_id());
 $config = require base_path('config.php');
use controllers\AuthController\AuthController;
//dd($config);
$resp = new AuthController($config['database']);

$resp->logout();
