<?php

use core\Database;


$config = require base_path('config.php');
$db = new Database($config['database']); //在這邊產生根資料庫連地__connection , 
//dd($db); //確認有東西

// $heading = "Note";
$id =$_GET['id']; // foreach note['id']
//dd($id);
$note = $db->query('select * from notes where id = :id',['id'=>$id ]) -> findOrFail();

//dd($note);


// //dd($note); //確認有取得資料
// if(!$note){  //如果note裡面沒有資料返回 404
//     abort();
// }


$currentUserId =1;
authorize($note['user_id'] == $currentUserId);  // 包裝下方


// if($note['user_id'] !== $currentUserId){ //如果嘗試訪別人的筆記本拒絕訪問
//     abort(Response::FORBIDDEN);
// }


//require "../views/about.view.php"; //用本地端要這樣
//require 'views/notes/show.view.php'; //php -S localhost

view("notes/create.view.php",[
    'heading' => 'Note',
    'note' => $note
]);