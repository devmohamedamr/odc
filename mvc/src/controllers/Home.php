<?php

namespace Odc\Mvc\controllers;
use Odc\Mvc\core\Controller;
use Odc\Mvc\core\Session;

class Home{
    use Controller;
    public function __construct()
    {
       Session::authorize("login");
    }
    public function index(){
        return $this->views("dashboard");
    }
}