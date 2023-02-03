<?php

use core\Database;
use core\Validator;
use model\CRUDModel;


$config = require base_path('config.php');
//$db = new Database($config['database']); //在這邊產生根資料庫連地__connection , 
$db = new CrudModel($config['database']);

//dd($_GET);
//dd($db); //確認有東西
//$currentUserId =1;
//echo $_SESSION['user_id'];


//dd($_POST);

//dd($note['id']);
$id = $_GET['id']; // foreach note['id']
//dd($id);


//dd($_SERVER);
//dd($id);
//dd($_SERVER['REQUEST_URI']);
$resp = [];
$right = [];
$errors = [];
//dd($_SERVER['REQUEST_METHOD']);//get
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //dd($_SERVER['REQUEST_METHOD']);//POST

    //$note = $db->query('select * from notes where id = :id', ['id' => $id])->findOrFail();
    //dd($note);
    if (isset($_POST['delete'])) {
       //$db->query('delete from notes where id = :id', ['id' => $id]);
       $db->deleteMsg($id);
        header('location: /notes');
        exit();
    } 
    elseif (isset($_POST['edit'])) {
        //$note = $db->query('select * from notes where id = :id', ['id' => $id])->findOrFail();
        $note = $db->getOneMsg($id);
        //$note = $db->deleteMsg($id);

        //dd($note);
        if (!Validator::string($_POST['edit'], 1, 500)) {
            $errors['body'] = '字數不可大於500字或者沒有輸入';
        }

        if (empty($errors)) {
            // $result = $db->query('UPDATE notes SET body=:body WHERE id=:id', [
            //     'body' => $_POST['edit'],
            //     'id' => $id
            // ])->find();
            $result = $db->updateMsg($id);//更新留言


            //dd($result);
            $resp['body'] = '筆記成功更新';
            
            header('Refresh: 2; url=/notes');
            //dd($result);
            // if ($result) {
            //     $right['body'] = '筆記成功更新';
            //    } else {  
            // }
            //     $errors['body'] = '筆記更新失敗';
        }
    }
    //require 'views/notes/create.view.php';

    //note = $db->query('SELECT * FROM notes WHERE id = :id', ['id' => $id]);

    view("notes/edit.view.php", [
        'heading' => 'edit Note',
        'note' => $note,
        'resp' =>$resp,
        'right' => $right
    ]);
} else {
    //dd($note); //確認有取得資料
    //dd("test");

    //$note = $db->query('select * from notes where id = :id', ['id' => $id])->findOrFail();
    $note = $db->getOneMsg($id);//取得一筆留言
    //echo "fff";
    //dd($_SESSION['user_id']);
    //dd($note);
    //dd($note);

//dd($_SERVER);
     authorize(($note['user_id'] == $_SESSION['user_id']) || ($_SESSION['permissions'] == 1));  // 包裝下方
    //authorize(($note['user_id'] == $_SESSION['user_id']));  // 包裝下方
    view("notes/show.view.php", [
        'heading' => 'No~~te',
        'note' => $note
    ]);
    //dd($_SERVER);
}
