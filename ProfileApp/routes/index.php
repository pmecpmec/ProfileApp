<?php


$App = require 'private.php';
$dbconn = $App['database'];

$routes = [
    "/" => "controllers/index.php",
    "/home" => "controllers/home.php",
    "/profiel" => "controllers/profiel.php",
   "/myprojects" => "controllers/myprojects.php",
    "/settings" => "controllers/settings.php",
     "/login" => "controllers/login.php",
    "/register" => "controllers/register.php",


];

if(array_key_exists($_SERVER['REQUEST_URI'], $routes)) {
    require $routes[$_SERVER['REQUEST_URI']];
} else {
    echo "404";
}



