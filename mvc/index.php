<?php
include "category.php";
include "product.php";
$url = $_SERVER['QUERY_STRING'];

$url =  explode("/",$url);


$controller = $url[0];
$method = $url[1];


call_user_func_array([$controller,$method],[]);



