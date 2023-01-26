<?php
//session_start();
use core\Database;
//$heading ="Login in";
var_dump(session_id());
$config = require base_path('config.php');
$db = new Database($config['database']);

$error = [];

if (isset($_POST['submit'])) {
    $uid = $_POST['uid'];
    $password = $_POST['password'];

    if ($db->loginUser($uid, $password)) {
        //登入成功
        //跳轉到首頁
        header("Location: /");
    } else {
     $error['fail'] = "帳號或密碼錯誤，請重新輸入。";
    }
    }
//require base_path("views/index.view.php"); //PHP -S 

view("login.view.php",[
    'heading' => '登入',
    'error' => $error
]);