<?php
//session_start();
use core\Database;
//$heading ="Login in";
var_dump(session_id());
// $config = require base_path('config.php');
// $db = new Database($config['database']);

// $error = [];

session_destroy();
header('Location: /');

view("logout.view.php",[
    'heading' => '登入',
    'error' => $error
]);