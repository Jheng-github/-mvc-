<?php

use core\Database;
use core\Validator;
var_dump(session_id());

//var_dump(base_path('core/validator.php'));
require base_path('core/validator.php');

$config = require base_path('config.php');
$db = new Database($config['database']);


//$heading ='Create Note';

//dd(Validator::email('1e12ee12e12'));

// if(!Validator::email('1e12ee12e12')){
//     dd('無效的mail驗證');
// }
$errors = [];
$right = [];
//dd($_SERVER);//     ["REQUEST_METHOD"]=>string(4) "POST"
//輸入的值不可為0 or 多餘500字  這兩個條件以外才能加入資料庫
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //dd($_POST);//表單收到的form值 


    //$validator = NEW Validator;

    //把下面兩個if包裝成class做訪問
    if(! Validator::string($_POST['body'],1 , 500)){
        $errors['body'] = '字數不可大於500字或者沒有輸入';
    }
    // if(strlen($_POST['body']) == 0){ //檢查留言輸出裡面有沒有東西,沒有東西長度就會等於0,並且會有 error body => '需要填寫', 陣列出現
    //     $errors['body'] = '不寫東西你用啥筆記本？';
    // }

    // if(strlen($_POST['body']) > 500){ //檢查留言輸出裡面有沒有東西,沒有東西長度就會等於0,並且會有 error body => '需要填寫', 陣列出現
    //     $errors['body'] = '留言字數不能大約500字';
    // }
    

    if(empty($errors)){ //如果error是空的,就代表他在上面if都沒卡關,可以輸入進去資料庫
        $right['body'] = '留言成功';
    $result = $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)',[
        'body' => $_POST['body'], //$_POST['body']name值 ... body->資料庫欄位
        'user_id' => $_SESSION['user_id'] //目前先寫死
    ]);
 }
}


//require 'views/notes/create.view.php';
view("notes/create.view.php",[
    'heading' => 'Create Note',
    'errors' => $errors
]);