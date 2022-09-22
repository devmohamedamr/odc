<?php

namespace Odc\Mvc\controllers;
use Odc\Mvc\models\UsersModel;
class Users{

    public function store(){
        $data = [
            "name"=>"mvc",
            "password"=>"mvc",
            "img"=>"mvc"
        ];
        $usermodel = new UsersModel;
        $usermodel->createNewUser($data);
    }

}