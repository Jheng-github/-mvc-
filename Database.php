<?php
class Database
{

    public $connection;


    public function __construct()
    {

        $dsn = "mysql:host=localhost;port=3306;dbname=myapp;charset=UTF8mb4";
        $user = 'jheng';
        $pwd = '122737420';

        //$pdo = new PDO($dsn, $user, $pwd);
          $this->connection = new PDO($dsn, $user, $pwd); 
    }


    public function query($query)
    {

        //$statement = $pdo->prepare($query)
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }
}