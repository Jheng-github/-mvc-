<?php

use core\Database;


$config = require base_path('config.php');
$db = new Database($config['database']); //在這邊產生根資料庫連地__connection , 
//dd($db); //確認有東西
$currentUserId =1;
// $heading = "Note";
$id =$_GET['id']; // foreach note['id']
//dd($id);
//$note = $db->query('select * from notes where id = :id',['id'=>$id ]) -> findOrFail();

//dd($_SERVER);


if($_SERVER['REQUEST_METHOD'] == 'POST'){ //提交刪除表單
    $note = $db->query('select * from notes where id = :id',['id'=>$id ]) -> findOrFail();
    //dd($_POST);//確認有收到hidden 的值
    $db->query('delete from notes where id = :id',['id'=>$id]);

    header('location: /notes');
    exit();
}else{
// //dd($note); //確認有取得資料
$note = $db->query('select * from notes where id = :id',['id'=>$id ]) -> findOrFail();
authorize($note['user_id'] == $currentUserId);  // 包裝下方
view("notes/show.view.php",[
    'heading' => 'Note',
    'note' => $note
]);
}