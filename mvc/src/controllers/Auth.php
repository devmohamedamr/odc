<?php

namespace Odc\Mvc\controllers;
use Odc\Mvc\core\Controller;
use Odc\Mvc\core\Session;
use Odc\Mvc\models\UserModel;

class Auth{
    use Controller;

    public function login(){
        return $this->views("login");
    }

    public function loginrequest(){
        $email = $_POST['email'];
        $password =$_POST['password'];
        $user = new UserModel;
        $userdata =  $user->getUserByEmailAndPassword($email,$password);
        if(!empty($userdata)){
            
            Session::set("login",$userdata);
            header("location: /");
        }else{
            header("location: login");
        }
    }

    public function logout(){
        Session::remove("login");
        header("location: login");
    }
}