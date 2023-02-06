<?php

use core\Database;
$config = require base_path('config.php');
//use model\CrudModel;
//$db = new CRUDModel($config['database']);

use controllers\Notes\NoteController;

$data = new NoteController($config['database']);
$data->showAllMeg();//取得所有留言

// /--------------------------------------------------------------------
// if (!isset($_SESSION['user_id'])) { //登入的時候有把資料庫的值灌到session,如果沒有就請他先登入
//     echo "<script>alert('結語不要亂玩'); location.href='login';</script>";
//    // header('location: /login');
//     exit;
//   }

//$notes = $db->query('select * from notes;') -> get(); //

//dd($notes); //確認有取得資料user_id = 1 的資料

// view("notes/messages.view.php",[
//     'heading' => 'hello',
//     'notes' => $notes
// ]);
