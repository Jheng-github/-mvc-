<?php

namespace core;

//use Dotenv\Dotenv;
use PDO;

class Database
{

  public $connection;

  public $statement;


  public function __construct($config) //連線
  {

    $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";
    $user = 'jheng';
    $pwd = '';

    //$pdo = new PDO($dsn, $user, $pwd);
    $this->connection = new PDO($dsn, "$user", "", [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
  }


  public function query($sql, $params = []) //把prepare 跟 execute 包裝一起
  {

    //$statement = $pdo->prepare($query)
    $this->statement = $this->connection->prepare($sql);

    $this->statement->execute($params); // 陣列使用ex[uesr_id=>id]

    return $this; //鏈式呼叫
  }

  public function find()
  { //單筆資料
    return $this->statement->fetch();
  }

  public function get()
  { //取得所有資料
    return $this->statement->fetchall();
  }

  public function findOrFail()
  { //找單筆資料,找不到就噴404
    $result = $this->find();

    if (!$result) {
      abort();
    }

    return $result;
  }
}
