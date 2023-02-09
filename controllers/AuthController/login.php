<?php

use controllers\AuthController\AuthController;

$config = require base_path('config.php'); //連線檔案
$data = new AuthController($config['database']); //引入陣列值
//dd($data);
$data->login();



//包裝以下至login()
//---------------------------------------------
// $error = [];

// if (isset($_POST['submit'])) {
//     $uid = $_POST['uid'];
//     $password = $_POST['password'];

//     if ($data->loginUser($uid, $password)) {
//         $_SESSION['permissions'] = $data->permissions($uid); //判斷是否為最高權限
//         //登入成功
//         //跳轉到首頁
//        //dd($_SESSION['permissions']);
//         header("Location: /");
//     } else {
//      $error['fail'] = "帳號或密碼錯誤，請重新輸入。";
//     }
//     }
// //require base_path("views/index.view.php"); //PHP -S 

// view("AuthView/login.view.php",[
//     'heading' => '您已經登入',
//     'error' => $error
// ]);