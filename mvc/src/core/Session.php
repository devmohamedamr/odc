<?php

namespace Odc\Mvc\core;


class Session{
    public static function start()
    {
        session_start();
    }

    public static function set($key,$value){
        self::start();
        $_SESSION[$key] = $value;
    }

    public static function get($key){
        self::start();
        return $_SESSION[$key];
    }

    public static function authorize($key){
        self::start();
        if(empty($_SESSION[$key])){
            header("location: Auth/login");
        }
    }

    public static function remove($key){
        self::start();
        unset($_SESSION[$key]);
    }
}