<?php


namespace Odc\Mvc\models;

use Odc\Mvc\core\DB;

class StudentModel extends DB{
    public function createNewStudent($data){
        return $this->insert("students",$data)->excute();
    }

    public function getAllStudent(){
        return $this->select("students","branches.name as branches_name,students.name as students_name,email,password,phone,students.id")->join("inner","branches","students.branch_id","branches.id")->all();
    }

    public function deleteStudent($id){
        return $this->delete("students")->where("id","=",$id)->excute();
    }
    public function getStudentById($id){
        return $this->select("students","*")->where("id","=",$id)->first();
    }

    public function updateStudent($data){
        return $this->update("students",$data)->where("id","=",$data['id'])->excute();
    }
}