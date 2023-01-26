<?php
//session_start();
use core\Database;
use controllers\SignupController;
var_dump(session_id());
$config = require base_path('config.php');
$db = new Database($config['database']); //在這邊產生根資料庫連地__connection , 
//dd($_SERVER['REQUEST_METHOD']);

$error = [];


if (isset($_POST['submit'])) {
    $uid = $_POST['uid'];
    $pwd = $_POST['password'];
    $pwdrepeat = $_POST['passwordrepeat'];
    $email = $_POST['email'];
    if($pwd !== $pwdrepeat){
        $error['password'] = "兩次密碼輸入不相同,請重新輸入";
    }
    if($db->checkUser($uid)) { //$POST進來的值
        $error['uid'] = "帳號已存在請重新輸入";
    } else {
        $db->addUser($uid, $pwd); //如果沒值就筆POST來的值加入進去
    }
    
}


view("signup.view.php", 
[
    'heading' => '註冊',
    'error' => $error 
]);
