<?php
// require '/Users/jheng/Sites/web/views/partials/nav.php';
// require '/Users/jheng/Sites/web/views/partials/head.php';
// //require '/Users/jheng/Sites/web/views/partials/banner.php';
// require '/Users/jheng/Sites/web/views/partials/footer.php'; 用本地端SITE開發可以使用



require 'function.php';

//echo "hello where";

//  $uri = $_SERVER["REQUEST_URI"];
//  var_dump($uri);
//  echo "<BR>";

// var_dump(parse_url($uri))['path'];
// echo "<BR>";
// var_dump(parse_url($uri), 'path');

// $uri = parse_url($_SERVER["REQUEST_URI"]);
// var_dump($uri);
//var_dump($uri);
//var_dump($uri);
//dd($uri);

//dd(parse_url($uri));


// if($uri === '/'){ //可以試試看改成等於HOME的URI

//     require 'controllers/Cindex.php';
// }
// else if($uri === '/about'){
//     require 'controllers/about.php';
//     //echO "錯";
// }
// else if ($uri === '/contact'){
//     require 'controllers/contact.php';
// }

$uri = parse_url($_SERVER["REQUEST_URI"])['path'];

$routes = 
[
    '/' => 'controllers/Cindex.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php'

];

if (array_key_exists($uri, $routes)){
    require $routes[$uri];
}