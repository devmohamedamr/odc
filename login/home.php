<?php
session_start();

if($_SESSION['login'] != true){
    header("location: login.html");
}


echo "welcome";