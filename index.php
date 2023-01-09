<?php
// require '/Users/jheng/Sites/web/views/partials/nav.php';
// require '/Users/jheng/Sites/web/views/partials/head.php';
// //require '/Users/jheng/Sites/web/views/partials/banner.php';
// require '/Users/jheng/Sites/web/views/partials/footer.php'; 用本地端SITE開發可以使用



require 'function.php';
require 'Database.php';
require 'route.php';
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
