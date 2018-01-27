<?php 
include "connect.php";
$conn = $controller->connect();
$message = NULL;
$rep = $controller->model('Representative');
$bill = $controller->model('bill');
$recentBills = $bill->getRecentBills($conn);
$allreps = $rep->getAllReps($conn);
$controller->view('mainpage', $data = array('bills'=>$recentBills, 'reps'=>$allreps));