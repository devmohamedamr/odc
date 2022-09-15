<?php

// session_start();

// session_destroy();

setcookie("login",true,time()-60*60*24,"/");



header("location: login.html");