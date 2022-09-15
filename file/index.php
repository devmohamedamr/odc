<?php

$errors = [];


if($_POST['students'] == '' || empty($_POST['students']) || strlen($_POST['students']) == 0){
    $errors[] = "students must be required";
}


if($_POST['course'] == '' || empty($_POST['course']) || strlen($_POST['course']) == 0){
    $errors[] = "course must be required";
}



if(count($errors) == 0){
    $list_of_students =  explode(",",$_POST['students']);
    $course = $_POST['course'];
    $content = file_get_contents("certificate.html");
    
    
    foreach($list_of_students as $key => $student){
        $location = "cer/".$student.".html";
        fopen($location,"w");
    
        $new_content =  str_replace(["name","course"],[$student,$course],$content);
    
        file_put_contents($location,$new_content);
    }
}else{
    foreach($errors as $error){
        echo $error."<br>";
    }
}


