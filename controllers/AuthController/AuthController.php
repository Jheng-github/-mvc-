<?php

namespace controllers\AuthController;
//namespace controllers;
use model\UserModel;
//echo 'ff';
use core\Database;

class AuthController
{
    private $data;
    private $error = [];

    public function __construct($config) //進行資料庫連線
    {
        $this->data = new UserModel($config);
        //dd('wdwdwd');
    }

    public function login() //登入
    {
        if (isset($_POST['submit'])) {
            $uid = $_POST['uid'];
            $password = $_POST['password'];

            if ($this->data->loginUser($uid, $password)) {
                $_SESSION['permissions'] = $this->data->permissions($uid);
                header("Location: /");
            } else {
                $this->error['fail'] = "帳號或密碼錯誤，請重新輸入。";
            }
        }

        view("AuthView/login.view.php", [
            'heading' => '您已經登入',
            'error' => $this->error
        ]);
    }


    public function logout()//登出
    {
        session_destroy();
        // var_dump('hi');
        echo "<script>alert('已登出,點擊後回首頁'); location.href='/';</script>";
        exit();
        header("Location: /");
    }

    public function signup()//註冊
    {
        //$error = [];


        if (isset($_POST['submit'])) {
            $uid = $_POST['uid'];
            $pwd = $_POST['password'];
            $pwdrepeat = $_POST['passwordrepeat'];
            $email = $_POST['email'];
            if ($pwd !== $pwdrepeat) {
                $this->error['password'] = "兩次密碼輸入不相同,請重新輸入";
                
            }
            if ($this->data->checkUser($uid)) { //$POST進來的值
                $this->error['uid'] = "帳號已存在請重新輸入";
                
            } if (empty($this->error)) {
                $this->data->addUser($uid, $pwd);
                }//如果沒error來的值加入進去
        }


        view(
            "AuthView/signup.view.php",
            [
                'heading' => '註冊',
                'error' => $this->error
            ]
        );
    }
}
