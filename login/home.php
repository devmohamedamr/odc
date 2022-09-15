<?php
// session_start();

if($_COOKIE['login'] != true){
    header("location: login.html");
}


echo "welcome";

?>

<a href="logout.php">logout</a>

<!-- cookies -->