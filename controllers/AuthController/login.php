<?php
use controllers\AuthController\AuthController;
//use controllers\AuthController;

 $config = require base_path('config.php');
$data = new AuthController($config['database']);
//dd($data);
$data->login();



//use core\Database;

use model\UserModel;
//  use controllers\AuthController;

var_dump(session_id());


//dd($config);
//$db = new Database($config['database']);
//$data = new UserModel($config['database']);



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