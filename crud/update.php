<?php

$id = $_GET['id'];

$connection = mysqli_connect("localhost","root","","odccrud");
$query =  mysqli_query($connection,"SELECT * FROM `users` WHERE `id` = $id");
$user = mysqli_fetch_assoc($query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="doupdate.php" method="post" enctype="multipart/form-data">
        <input type="hidden" value="<?= $user['id']; ?>" name="id">
        <input type="text" value="<?= $user['name']; ?>" name="name" placeholder="name">
        <input type="text" value="<?= $user['email']; ?>" name="email"  placeholder="email">
        <input type="text" value="<?= $user['password']; ?>" name="password" placeholder="password">
        <img width="100px" height="100px" src="upload/<?= $user['img']; ?>">
        <input type="file" name="img">
        <input type="submit">
    </form>
</body>
</html>