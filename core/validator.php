<?php

namespace core;


class Validator{//限制字串長度
    public static function string($value, $min = 1, $max = INF ){
        $value = trim($value);

       return  strlen($value) >= $min && strlen($value) <= $max  ;
    }

    public static function email($value){
        //filter_var($value);
       return filter_var($value, FILTER_VALIDATE_EMAIL);
    }


}