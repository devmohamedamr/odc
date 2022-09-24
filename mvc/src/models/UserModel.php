<?php


namespace Odc\Mvc\models;

use Odc\Mvc\core\DB;

class UserModel extends DB{
    public function getUserByEmailAndPassword($email,$password){
        return $this->select("users","*")->where("email","=",$email)->andWhere("password",'=',$password)->first();
    }
}