<?php
// require '/Users/jheng/Sites/web/views/partials/nav.php';
// require '/Users/jheng/Sites/web/views/partials/head.php';
// //require '/Users/jheng/Sites/web/views/partials/banner.php';
// require '/Users/jheng/Sites/web/views/partials/footer.php'; 用本地端SITE開發可以使用

const BASE_PATH = __DIR__ . '/../';

//var_dump(BASE_PATH);

require BASE_PATH .'function.php'; //因為base_path 是在funciton裡面所以這邊必須用常數來連接,而不是fn

spl_autoload_register(function($class){
    //var_dump(base_path($class. '.php'));
     require base_path("core/".$class.".php");
});

// require base_path('Database.php');
// require base_path('Response.php');
require base_path('route.php');

//require 'Database.php';



// $config = require 'config.php';
// $db = new Database($config['database']);











//dd($_GET);

// $id = $_GET['id'];
// //var_dump($id);


// $query = "select * from posts where id = :id";

// $posts =$db->query($query, [':id' => $id])->fetch();

// dd($posts);



// foreach ($posts as $post) {
//    //"<li>" . $post. "</li>";
//    var_dump($posts);
//    echo "<BR>";
//    var_dump($post);
//    echo "<BR>";
// }




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
