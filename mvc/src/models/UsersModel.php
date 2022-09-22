<?php

namespace Odc\Mvc\models;
use Odc\Mvc\core\DB;

class UsersModel extends DB{

    public function createNewUser($data){
        return $this->insert('users',$data)->excute();
    }

    public function getUserById($id){
        return $this->select("users","*")->where("id","=",$id)->first();
    }
}