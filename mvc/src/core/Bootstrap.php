<?php
namespace Odc\Mvc\core;

class Bootstrap{

    public $controller;
    public $method;

    public function __construct()
    {
        $this->url();
        $this->run();
    }
    public function url(){
        $url = $_SERVER['QUERY_STRING'];
        $url = explode("/",$url);
        $this->controller = $url[0];
        $this->method = $url[1];
    }

    public function run(){
        $controller = "Odc\\Mvc\\controllers\\".$this->controller;
        call_user_func_array([new $controller,$this->method],[]);
    }
}