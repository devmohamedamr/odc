<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST"){

    $email = $_POST['email'];
    $password =$_POST['password'];

    $connection = mysqli_connect("localhost","root","","odccrud");
    $query =  mysqli_query($connection,"SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");

    $user =  mysqli_fetch_assoc($query);
    if(empty($user)){
        header("location: login.php");
    }else{
        $_SESSION['crud'] = $user;
        header("location: home.php");
    }
}else{
    include "design/login.html";
}