<?php
session_start();


const BASE_PATH = __DIR__ . '/../';

//var_dump(BASE_PATH);

require BASE_PATH .'core/function.php'; //因為base_path 是在funciton裡面所以這邊必須用常數來連接,而不是fn

spl_autoload_register(function($class){
    //dd($class);core\Database
    $result = str_replace('\\',DIRECTORY_SEPARATOR,$class);
  //dd($result);
    require base_path($result.".php");
});

require base_path('core/route.php');