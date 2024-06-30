<?php

//start the session
session_start();

define('APPURL', 'http://localhost/vnfood/');

$request = $_SERVER['REQUEST_URI'];
$request = ltrim($request, '/');
$url = explode('/', $request);

// check route for admin
if ($url[1] == 'admin') {
    require 'router/admin.php';
    $admin = new RouterAmdin();
} else {
    require 'router/web.php';
    $web = new RouterWeb();
}