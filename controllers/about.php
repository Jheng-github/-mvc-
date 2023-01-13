<?php

 $heading = "About us";
// echo "<PRE>";
// var_dump($_SERVER); 


//require "../views/about.view.php"; //用本地端要這樣

//require 'views/about.view.php'; //php -S localhost

view("about.view.php",[
    'heading' => 'About us'
]);
