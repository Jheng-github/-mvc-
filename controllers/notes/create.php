<?php

use core\Database;
use core\Validator;
use model\CRUDModel;
use controllers\notes\NoteController;


var_dump(session_id());
require base_path('core/validator.php');
//var_dump(base_path('core/validator.php'));


$config = require base_path('config.php');

$db = new NoteController($config['database']);

$db->createMsg();










// ------------------------------------------------------------------
// $errors = [];
// $right = [];
//dd($_SERVER);//     ["REQUEST_METHOD"]=>string(4) "POST"
//輸入的值不可為0 or 多餘500字  這兩個條件以外才能加入資料庫
// if($_SERVER['REQUEST_METHOD'] == 'POST'){
//     //dd($_POST);//表單收到的form值 
// date_default_timezone_set("Asia/Taipei");

//dd(date('Y-m-d H:i:s'));
//   if(! Validator::string($_POST['body'],1 , 500)){
//         $errors['body'] = '字數不可大於500字或者沒有輸入';
//     }
    
//     if(empty($errors)){ //如果error是空的,就代表他在上面if都沒卡關,可以輸入進去資料庫
//         $right['body'] = '留言成功。2秒後跳轉';
//         // $result = $db->query('INSERT INTO notes(body, user_id,time) VALUES(:body, :user_id, :time)',[
//         //     'body' => $_POST['body'], //$_POST['body']name值 ... body->資料庫欄位
//         //     'user_id' => $_SESSION['user_id'], //
//         //     'time' => date('Y-m-d H:i:s')
//         // ]);
//             $result = $db->addMsg();//把留言加入資料庫


//         //header('location: /notes');
//         header('Refresh: 2; url=/notes');
//  }
//  //dd($notes);
// }


// //require 'views/notes/create.view.php';
// view("notes/create.view.php",[
//     'heading' => 'Create Note',
//     'errors' => $errors,
//     'right' => $right
// ]);