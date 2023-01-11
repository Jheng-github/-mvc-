<?php
$config = require 'config.php';
$db = new Database($config['database']);


$heading ='Create Note';
//dd($_SERVER);//["REQUEST_METHOD"]=>string(4) "POST"
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //dd($_POST);//表單收到的form值
    $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)',[
        'body' => $_POST['body'], //$_POST['body']name值 ... body->資料庫欄位
        'user_id' => 1 //目前先寫死
    ]);
}


require 'views/note-create.view.php';