<?php

namespace Odc\Mvc\controllers;
use Odc\Mvc\core\Controller;
use Odc\Mvc\core\DB;
use Odc\Mvc\core\Session;
use Odc\Mvc\models\StudentModel;

class Student{
    use Controller;
    public function __construct()
    {
       Session::authorize("login");
    }

    public function index(){
        $studentmodel = new StudentModel;
        $students =  $studentmodel->getAllStudent();
        return $this->views("indexstudent",['students'=>$students]);
    }

    public function create(){
        $db = new DB;
        $branches =  $db->select('branches',"*")->all();
     
        return $this->views("createstudent",['branches'=>$branches]);
    }

    public function store(){

        $studentmodel = new StudentModel;
        $studentmodel->createNewStudent($_POST);
        header("location: index");
    }

    public function delete($id){
        $studentmodel = new StudentModel;
        $studentmodel->deleteStudent($id);
        header("location: ../index");
    }
    public function edit($id){
        $db = new DB;
        $branches =  $db->select('branches',"*")->all();

        $studentmodel = new StudentModel;
        $student =  $studentmodel->getStudentById($id);
        return $this->views("editstudent",['student'=>$student,'branches'=>$branches]);
    }

    public function update(){
        if(empty($_POST['password'])){
            unset($_POST['password']);
        }    
        $studentmodel = new StudentModel;
        $studentmodel->updateStudent($_POST);
        header("location: index");

    }

    public function search(){
        return $this->views("search");
    }

    public function searchrequest(){
        $studentmodel = new StudentModel;
        $result =  $studentmodel->getStudentByNameOrPhone($_POST['name']);

        return  $this->views('result',['result'=>$result]);
    }

    public function searchresult(){

    }
}