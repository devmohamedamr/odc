<?php

namespace Odc\Mvc\controllers;
use Odc\Mvc\models\UsersModel;
use Odc\Mvc\core\Controller;
class Users{

    use Controller;
  

    public function create(){
        return $this->views("create");
    }

    public function store(){
        $data = [
            "name"=>"mvc",
            "password"=>"mvc",
            "img"=>"mvc"
        ];
        $usermodel = new UsersModel;
        $usermodel->createNewUser($data);
    }

    public function edit($id){
        $usermodel = new UsersModel;
        $data =  $usermodel->getUserById($id);
        // $this->dd($data);
       return $this->views("show",["user"=>$data,"name"=>"mohamed"]);
    }
}