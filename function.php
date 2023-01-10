<?php

function dd($value){
    echo "<PRE>";
    var_dump($value);
    echo "</PRE>";

    die();
}

function urlIs($value){
    return $_SERVER['REQUEST_URI'] === $value;
}

function authorize($condition, $status = Response::FORBIDDEN){
    if(!$condition){
        abort($status);
    }
}