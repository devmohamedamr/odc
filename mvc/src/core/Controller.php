<?php

namespace Odc\Mvc\core;

trait Controller{
    public function __call($name, $arguments)
    {
        echo "this method : ".$name." not found";
    }
    protected function views($path,$data = []){
        extract($data);

        include "../src/views/".$path.".php";
    }

    public function dd($data){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        die;
    }
}