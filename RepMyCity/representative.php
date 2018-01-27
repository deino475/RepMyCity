<?php 
include "connect.php";
$conn = $controller->connect();
$message = NULL;
$rep = $controller->model('Representative');
$bill = $controller->model('bill');
