<?php

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];


if(!empty($_FILES['img']['name'])){
    $imgname = $_FILES['img']['name'];
    $tmp = $_FILES['img']['tmp_name'];
    move_uploaded_file($tmp,"upload/".$imgname);
    $extra = ", `img` = '$imgname'";
}else{
    $extra = "";
}

// $extra = (!empty($_FILES['img']['name'])) ? ", `img` = '$imgname' " : "";

$connection = mysqli_connect("localhost","root","","odccrud");
$query =  mysqli_query($connection,"UPDATE `users` SET `name` = '$name' , `email` = '$email' , `password` = '$password' $extra  WHERE `id` = $id");


header("location: home.php");

