<?php


$list_of_students =  explode(",",$_POST['students']);

$content = file_get_contents("certificate.html");


foreach($list_of_students as $key => $student){
    $location = "cer/".$student.".html";
    fopen($location,"w");

    $new_content =  str_replace("name",$student,$content);

    file_put_contents($location,$new_content);
}