<?php 
include "connect.php";
$conn = $controller->connect();
$message = NULL;
$rep = $controller->model('Representative');
$bill = $controller->model('bill');

// Get Information
$billdata = $bill->getBill($conn, $_GET['id']);
$votes = $bill->getVotes($conn, $_GET['id']);
$tags = $bill->getTags($conn, $_GET['id']);

//Render Views
$controller->view('header');
$controller->view('bill',$data = array('bill'=>$billdata));
$controller->view('votes',$data = array('votes'=>$votes));
$controller->view('tags',$data = array('tags'=>$tags));
$controller->view('footer');
