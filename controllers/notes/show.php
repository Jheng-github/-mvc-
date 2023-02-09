<?php

use controllers\notes\NoteController;

$config = require base_path('config.php'); //引入連線檔案

$data = new NoteController($config['database']);

if ($_GET == null) {
    abort(404);
}

$id = $_GET['id'];

$data->deleteOrEditMsg($id);


//把下方包裝成deleteOrEditMsg()
//-----------
// $resp = [];
// $right = [];
// $errors = [];
// //dd($_SERVER['REQUEST_METHOD']);//get
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     if (isset($_POST['delete'])) {
//        //$db->query('delete from notes where id = :id', ['id' => $id]);
//        $db->deleteMsg($id);
//         header('location: /notes');
//         exit();
//     } 
//     elseif (isset($_POST['edit'])) {
//         //$note = $db->query('select * from notes where id = :id', ['id' => $id])->findOrFail();
//         $note = $db->getOneMsg($id);

//         //dd($note);
//         if (!Validator::string($_POST['edit'], 1, 500)) {
//             $errors['body'] = '字數不可大於500字或者沒有輸入';
//         }

//         if (empty($errors)) {
//             // $result = $db->query('UPDATE notes SET body=:body WHERE id=:id', [
//             //     'body' => $_POST['edit'],
//             //     'id' => $id
//             // ])->find();
//             $result = $db->updateMsg($id);//更新留言


//             //dd($result);
//             $resp['body'] = '筆記成功更新';
            
//             header('Refresh: 2; url=/notes');
//             //dd($result);
//             // if ($result) {
//             //     $right['body'] = '筆記成功更新';
//             //    } else {  
//             // }
//             //     $errors['body'] = '筆記更新失敗';
//         }
//     }
//     view("notes/edit.view.php", [
//         'heading' => 'edit Note',
//         'note' => $note,
//         'resp' =>$resp,
//         'right' => $right
//     ]);
// } else {
//     //$note = $db->query('select * from notes where id = :id', ['id' => $id])->findOrFail();
//     $note = $db->getOneMsg($id);//取得一筆留言

//      authorize(($note['user_id'] == $_SESSION['user_id']) || ($_SESSION['permissions'] == 1));  // 包裝下方
//     //authorize(($note['user_id'] == $_SESSION['user_id']));  // 包裝下方
//     view("notes/show.view.php", [
//         'heading' => 'No~~te',
//         'note' => $note
//     ]);
//     //dd($_SERVER);
// }
