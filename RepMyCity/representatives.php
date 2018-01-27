<?php 
include "connect.php";
$conn = $controller->connect();
$message = NULL;
$rep = $controller->model('Representative');
$bill = $controller->model('bill');
$allreps = $rep->getAllReps($conn);

$controller->view('header');
$controller->view('reps',$data = array('reps'=>$allreps));
$controller->view('footer');