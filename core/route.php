<?php
$routes = require base_path('routes.php');
//dd($_SERVER);
//dd(parse_url($_SERVER["REQUEST_URI"]));
$uri = parse_url($_SERVER["REQUEST_URI"])['path'];; // 抓取uri localhost8888後面的值  / or /about...等
// var_dump($uri);
// echo "<br>";
// dd($routes);
function abort($code = 404){
    http_response_code($code);
    require base_path("views/$code.php")    ;
    die();
}
//dd(base_path($routes[$uri]));
//var_dump($routes[$uri]);
function routeToController($uri, $routes){
if (array_key_exists($uri, $routes)){ //檢查routes的key值是否存在於uri中 
    require base_path($routes[$uri]); //由於uri的值相當於routes的key值 就可以順便做引入檔案的動作了
    
}else{
    abort(); //如果都沒有 回傳404error
}
}

routeToController($uri, $routes);