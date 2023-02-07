<?php

namespace controllers\notes;

use model\CRUDModel;
use model\UserModel;
use core\Validator;

class NoteController
{
    private $data;
    private $errors = [];
    private $right = [];
    private $resp = [];

    public function __construct($config)
    {
        $this->data = new CRUDModel($config);
    }
    public function showAllMeg()
    {
        //dd($_SESSION['permissions']);
        if (!isset($_SESSION['user_id']) || ($_SESSION['permissions'] != 1)) { //
            // if (!($_SESSION['user_id'] == )) { 
            echo "<script>alert('結語不要亂玩'); location.href='login';</script>";
            // header('location: /login');
            exit;
        }

        //$notes = $db->query('select * from notes;') -> get(); //
        $notes = $this->data->getAllMsg(); //取得所有留言
        //dd($notes); //確認有取得資料user_id = 1 的資料

        view("notes/messages.view.php", [
            'heading' => 'hello',
            'notes' => $notes
        ]);
    }
    public function createMsg()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            date_default_timezone_set("Asia/Taipei");

            //dd(date('Y-m-d H:i:s'));
            if (!Validator::string($_POST['body'], 1, 500)) {
                $this->errors['body'] = '字數不可大於500字或者沒有輸入';
            }

            if (empty($this->errors)) { //如果error是空的,就代表他在上面if都沒卡關,可以輸入進去資料庫
                $this->right['body'] = '留言成功。2秒後跳轉';
                $this->data->addMsg(); //把留言加入資料庫


                //header('location: /notes');
                header('Refresh: 2; url=/notes');
            }
        }


        //require 'views/notes/create.view.php';
        view("notes/create.view.php", [
            'heading' => 'Create Note',
            'errors' => $this->errors,
            'right' => $this->right
        ]);
    }

    public function showUserMsg()
    {

        if (!isset($_SESSION['user_id'])) { //登入的時候有把資料庫的值灌到session,如果沒有就請他先登入
            echo "<script>alert('請先登入'); location.href='login';</script>";
            exit;
        }

        $notes = $this->data->getUserMsg();

        view("notes/index.view.php", [
            'heading' => 'Notdes',
            'notes' => $notes
        ]);
    }
    public function  deleteOrEditMsg($id)
    {

        $errors = [];
        //dd($_SERVER['REQUEST_METHOD']);//get
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['delete'])) {
                //$db->query('delete from notes where id = :id', ['id' => $id]);
                $this->data->deleteMsg($id);
                header('location: /notes');
                exit();
            } elseif (isset($_POST['edit'])) {
                //$note = $db->query('select * from notes where id = :id', ['id' => $id])->findOrFail();
                $note = $this->data->getOneMsg($id);

                //dd($note);
                if (!Validator::string($_POST['edit'], 1, 500)) {
                    $errors['body'] = '字數不可大於500字或者沒有輸入';
                    
                }
                if (empty($errors)) {
   
                    $result = $this->data->updateMsg($id); //更新留言
   
                    //dd($result);
                    $this->resp['body'] = '筆記成功更新';

                    header('Refresh: 2; url=/notes');
                }
            
            }
            view("notes/edit.view.php", [
                'heading' => 'edit Note',
                'note' => $note,
                'resp' => $this->resp,
            ]);
        } else {
       
            $note = $this->data->getOneMsg($id); //取得一筆留言

            authorize(($note['user_id'] == $_SESSION['user_id']) || ($_SESSION['permissions'] == 1));  // 包裝下方
 
            view("notes/show.view.php", [
                'heading' => 'No~~te',
                'note' => $note
            ]);

        }
    }
}
