<?php

namespace controllers\Notes;

use model\CRUDModel;
use model\UserModel;


class NoteController
{
    private $data;

    function __construct($config)
    {
        $this->data = new CRUDModel($config);
    }
    function showAllMeg(){
        if (!isset($_SESSION['user_id'])) { //登入的時候有把資料庫的值灌到session,如果沒有就請他先登入
            echo "<script>alert('結語不要亂玩'); location.href='login';</script>";
           // header('location: /login');
            exit;
          }
        
        //$notes = $db->query('select * from notes;') -> get(); //
        $notes = $this->data->getAllMsg();//取得所有留言
        //dd($notes); //確認有取得資料user_id = 1 的資料
        
        view("notes/messages.view.php",[
            'heading' => 'hello',
            'notes' => $notes
        ]);
    }
}
