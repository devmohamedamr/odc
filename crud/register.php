<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $imgname = $_FILES['img']['name'];
    $tmp = $_FILES['img']['tmp_name'];

    move_uploaded_file($tmp,"upload/".$imgname);

    $connection = mysqli_connect("localhost","root","","odccrud");
    mysqli_query($connection,"INSERT INTO `users` (`name`,`email`,`password`,`img`) VALUES ('$name','$email','$password','$imgname')");

    if(mysqli_affected_rows($connection) == 1){
        echo "user is registerd";
    }

}else{

    include "design/register.html";

}



