<?php
session_start();


const BASE_PATH = __DIR__ . '/../';



require BASE_PATH .'core/function.php'; //因為base_path 是在funciton裡面所以這邊必須用常數來連接,而不是fn
//dd(base_path("vendor/autoload.php"));
require base_path("vendor/autoload.php");
//"/Users/jheng/Sites/web/public/../vendor/autoload.php"


//dd(BASE_PATH);
// spl_autoload_register(function($class){
//     //dd($class);core\Database
//     $result = str_replace('\\',DIRECTORY_SEPARATOR,$class);
//   //dd($result);
//     require base_path($result.".php");
// });




require base_path('core/route.php');