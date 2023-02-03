<?php

use core\Database;
use model\CrudModel;

$config = require base_path('config.php');
//$db = new Database($config['database']); //在這邊產生根資料庫連地__connection , 
//dd($config);
$db = new CRUDModel($config['database']);
//dd($db); //確認有東西
//dd($db);
// $heading = "My Notes";
if (!isset($_SESSION['user_id'])) { //登入的時候有把資料庫的值灌到session,如果沒有就請他先登入
    echo "<script>alert('結語不要亂玩'); location.href='login';</script>";
   // header('location: /login');
    exit;
  }



//$notes = $db->query('select * from notes;') -> get(); //
$notes = $db->getAllMsg();//取得所有留言
//dd($notes);

//dd($notes); //確認有取得資料user_id = 1 的資料


//require "../views/about.view.php"; //用本地端要這樣
//require 'views/notes/index.view.php'; //php -S localhost


view("notes/messages.view.php",[
    'heading' => 'hello',
    'notes' => $notes
]);
