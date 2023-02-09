<?php

use controllers\AuthController\AuthController;

$config = require base_path('config.php'); //引入連線檔

$data = new AuthController($config['database']); //連線
$data->signup();




//----把下方包裝成signup()
// $error = [];
// if (isset($_POST['submit'])) {
//     $uid = $_POST['uid'];
//     $pwd = $_POST['password'];
//     $pwdrepeat = $_POST['passwordrepeat'];
//     $email = $_POST['email'];
//     if($pwd !== $pwdrepeat){
//         $error['password'] = "兩次密碼輸入不相同,請重新輸入";
//     }
//     if($data->checkUser($uid)) { //$POST進來的值
//         $error['uid'] = "帳號已存在請重新輸入";
//     } else {
//         $data->addUser($uid, $pwd); //如果沒值就筆POST來的值加入進去
//     }
    
// }


// view("AuthView/signup.view.php", 
// [
//     'heading' => '註冊',
//     'error' => $error 
// ]);
