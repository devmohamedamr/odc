<?php

$id =  $_GET['id'];


$connection = mysqli_connect("localhost","root","","odccrud");
$query =  mysqli_query($connection,"DELETE FROM `users` WHERE `id` = $id");

header("location: home.php");