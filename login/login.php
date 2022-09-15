<?php
session_start();
//  get db
$emaildb = "email@test.com";
$passworddb = 123456;
// ==================================




$email = $_POST['email'];
$password = $_POST['password'];



if($email == $emaildb && $password == $passworddb){
    $_SESSION['login'] = true;
    header("location: home.php");
}else{
    header("location: login.html");
}