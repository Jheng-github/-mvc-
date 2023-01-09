<?php
class Database
{

    public $connection;


    public function __construct($config)
    {
        // $config  = [
        //     'host' => 'localhost',
        //     'port' => 3306,
        //     'dbname' => 'myapp',
        //     'charset' => 'UTF8mb4'
        // ];
        //dd(http_build_query($config, ';'));
       // dd(http_build_query($config, ";")); //example.com?host=localhost&port=3306&name=myapp
      // $dsn ='mysql'.http_build_query($config, '', ';');

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
        $statement = $this->connection->prepare($query);
        $statement->execute($params);

        return $statement;
    }
}