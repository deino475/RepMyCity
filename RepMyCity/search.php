<?php 
include "connect.php";
$conn = $controller->connect();
$message = NULL;
$rep = $controller->model('Representative');
$bill = $controller->model('bill');

$bills = $bill->getSimilarBills($conn, $_GET['tag']);

$controller->view('header');
$controller->view('search', $data = array('results' => $bills));
$controller->view('footer');
