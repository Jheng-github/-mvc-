<?php

namespace core;

//use Dotenv\Dotenv;
use PDO;

// $dotenv = Dotenv::createImmutable(__DIR__);
// $dotenv->load();

class Database
{

    public $connection;

    public $statement;

    // public function __construct($config)
    // {

    //    $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";
    //     $user = 'jheng';
    //     $pwd = '';
    //     $dsn = "mysql:host=$this->host;port=3306;dbname=$this->dbname;charset=utf8mb4";
    //     //$pdo = new PDO($dsn, $user, $pwd);
    //       $this->connection = new PDO($dsn, "$user", "",[
    //         PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
    //       ]); 
    // }


    public function __construct($config)
    {

       $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";
        $user = 'jheng';
        $pwd = '';

        //$pdo = new PDO($dsn, $user, $pwd);
          $this->connection = new PDO($dsn, "$user", "",[
            PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
          ]); 
    }


    public function query($sql, $params = [])
    {

        //$statement = $pdo->prepare($query)
        $this->statement = $this->connection->prepare($sql);
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

}