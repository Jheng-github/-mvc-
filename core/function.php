<?php
use core\Response;


function dd($value){
    echo "<PRE>";
    var_dump($value);
    echo "</PRE>";

    die();
}

function urlIs($value){
    return $_SERVER['REQUEST_URI'] === $value;
}

function authorize($condition, $status = Response::FORBIDDEN){ //彈性顯示回報錯誤ex 404
    if(!$condition){
        abort($status);
    }
}

function base_path($path){ //BASE_PATH = __DIR__ . '/../';  配上第二參數做新路徑 BASE_PATH in public.index.php
    return BASE_PATH . $path;
}

function view($path, $attributes = []){
    extract($attributes);
    require base_path('views/'. $path);
}