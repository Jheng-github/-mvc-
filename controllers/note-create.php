<?php
$config = require 'config.php';
$db = new Database($config['database']);


$heading ='Create Note';
//dd($_SERVER);//["REQUEST_METHOD"]=>string(4) "POST"
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //dd($_POST);//表單收到的form值
    $errors = [];

    if(strlen($_POST['body']) == 0){ //檢查留言輸出裡面有沒有東西,沒有東西長度就會等於0,並且會有 error body => '需要填寫', 陣列出現
        $errors['body'] = '需要填寫';
    }

    if(strlen($_POST['body']) > 500){ //檢查留言輸出裡面有沒有東西,沒有東西長度就會等於0,並且會有 error body => '需要填寫', 陣列出現
        $errors['body'] = '留言字數不能大約500字';
    }


    if(empty($errors)){ //如果error是空的,就代表他在上面if都沒卡關,可以輸入進去資料庫
    $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)',[
        'body' => $_POST['body'], //$_POST['body']name值 ... body->資料庫欄位
        'user_id' => 1 //目前先寫死
    ]);
 }
}


require 'views/note-create.view.php';