<?php

namespace core;

use PDO;


class Database
{

    public $connection;

    public $statement;


    public function __construct($config)
    {

       $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";
        $user = 'jheng';
        $pwd = '122737420';

        //$pdo = new PDO($dsn, $user, $pwd);
          $this->connection = new PDO($dsn, "$user", "$pwd",[
            PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
          ]); 
    }


    public function query($query, $params = [])
    {

        //$statement = $pdo->prepare($query)
        $this->statement = $this->connection->prepare($query);
        //var_dump($this->statement);
        //echo "<BR>";
        $this->statement->execute($params);// 陣列使用ex[uesr_id=>id]
        //var_dump($this->statement);
        //echo "<BR>";
        //var_dump($this);
       return $this; //鏈式呼叫
        
        //return $statement;
    }

    public function find(){//單筆資料
        return $this->statement->fetch();
    }

    public function get(){ //取得所有資料
      return $this->statement->fetchall();
    }

    public function findOrFail(){
      $result = $this->find();

      if(!$result){
        abort();
      }

      return $result;
    }

//     public function checkUser($uid){//確認使用者  如果資料庫有一樣的 等於重複
//     $result = $this->query("SELECT * FROM users WHERE name_uid = :name_uid", [
//       'name_uid' => $uid
//   ])->get();
//   //dd($result);
//   //dd(!empty($result)); //empty空值為true,加上!讓他變成false,透過false進入else,增加使用者
//   return !empty($result); //
//   }

//   public function addUser($name_uid, $password) { //加入使用者
//     $hash = password_hash($password, PASSWORD_DEFAULT); //hash密碼
//     $this->query("INSERT INTO users(`name_uid`, `password`) VALUES(:name_uid, :password)", [
//         'name_uid' => $name_uid,
//         'password' => $hash
//     ]);
// }

//   public function loginUser($uid, $password){ //使用者登入
//     $user = $this->query("SELECT * FROM users WHERE name_uid = :name_uid", [
//       'name_uid' => $uid //確認有沒有該帳號
//     ])->find();
//   //dd($user);
//   if($user){//如果有使用者,回傳true
//       if(password_verify($password,$user['password'])){//確認hash密碼是否跟資料庫一致
//           $_SESSION['user_id'] = $user['id'];
//           $_SESSION['name'] = $user['name_uid'];
//           //dd($user);
//           //dd($_SESSION['user_id']);
//           return true;
//       }else{
//           return false;
//       }
//   }else{
//       return false;
//   }
//   }
//   public function permissions($uid) { //確認權限
//     $user = $this->query("SELECT * FROM users WHERE name_uid = :name_uid", [
//         'name_uid' => $uid
//     ])->find();

//     if($user) {
//         if($user['permissions'] == 0) { //資料庫0是最高權限
//             return true;
//         } 
//     } else {
//         return false;
//     }
// }


}