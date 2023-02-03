<?php
// namespace controllers;
// use model\UserModel;
// //echo 'ff';

// class AuthController
// {
//     private $data;
//     private $error = [];

//     public function __construct($config) //進行資料庫連線
//     {
//         $this->data = new UserModel($config['database']);
//     }

//     public function login() //登入
//     {
//         if (isset($_POST['submit'])) {
//             $uid = $_POST['uid'];
//             $password = $_POST['password'];

//             if ($this->data->loginUser($uid, $password)) {
//                 $_SESSION['permissions'] = $this->data->permissions($uid);
//                 header("Location: /");
//             } else {
//                 $this->error['fail'] = "帳號或密碼錯誤，請重新輸入。";
//             }
//         }

//         view("AuthView/login.view.php", [
//             'heading' => '您已經登入',
//             'error' => $this->error
//         ]);
//     }


//     public function logout()
//     {
//         // session_destroy();
//         // var_dump('hi');
//         // exit();
//         //  header("Location: /");
//         // var_dump(session_id());
       
//         //session_start();

//       // 砍掉舊的 session
//         //session_destroy();
//        // if ( session_destroy()){
//         // 重新導向回首頁
//        // echo "<script>alert('已登出,回首頁'); location.href='/';</script>";
//        // exit;
//     //}


     
//        //exit();
//         // view("AuthView/logout.view.php", [
//         //     //'heading' => ''
//         // ]);
//     }
//}