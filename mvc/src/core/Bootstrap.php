<?php
namespace Odc\Mvc\core;

class Bootstrap{

    private $controller;
    private $method;
    private $params;

    public function __construct()
    {
        $this->url();
        $this->run();
    }
    private function url(){
        $url = $_SERVER['QUERY_STRING'];
        $url = explode("/",$url);

        $this->controller = (!empty($url[0])) ? $url[0] : "home";
        $this->method = (!empty($url[1])) ? $url[1] : "index";
        if(!empty($url)){
            unset($url[0],$url[1]);
        }
        $this->params = $url;
    }

    private function run(){
        $controller = "Odc\\Mvc\\controllers\\".$this->controller;
        call_user_func_array([new $controller,$this->method],$this->params);
    }
}