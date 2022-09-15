<?php
// session_start();
//  get db
$emaildb = "email@test.com";
$passworddb = 123456;
// ==================================




$email = $_POST['email'];
$password = $_POST['password'];



if($email == $emaildb && $password == $passworddb){

    setcookie("login",true,time()+60*60*24,"/");
    
    header("location: home.php");
}else{
    header("location: login.html");
}