<?php
$uri = parse_url($_SERVER["REQUEST_URI"])['path'];

$routes = 
[
    '/' => 'controllers/Cindex.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php'

];

function abort($code = 404){
    http_response_code($code);
    require "views/$code.php";
    die();
}


//var_dump($routes[$uri]);
function routeToController($uri, $routes){
if (array_key_exists($uri, $routes)){
    require $routes[$uri];
}else{
    abort();
}
}

routeToController($uri, $routes);