<?php 
include "connect.php";
$conn = $controller->connect();
$message = NULL;
$rep = $controller->model('Representative');
$bill = $controller->model('bill');

if (isset($_POST['addRepButton'])){
	$repname = $controller->clean($conn, $_POST['repname']);
	$position = $_POST['position'];
	$message = $rep->insertRep($conn, $repname, $position);
}

if (isset($_POST['addBillButton'])){
	$identification = $bill->generateRandomString($length = 25);
	$name = $_POST['name'];
	$description = $_POST['bill_desc'];
	$date = $_POST['mydate'];
	$tags = $_POST['billtags'];
	$insertIntoDB = mysqli_query($conn, "INSERT INTO bills VALUES ('','$identification','$name','$description','$date')");
	$bill->insertTags($conn, $identification, $tags);
	if ($insertIntoDB) {
		$message = '<p class = "bg-success">Bill inserted.</p>';
	} else {
		$message = '<p class = "bg-warning">Bill not inserted.</p>';
	}
}

if (isset($_POST['addVoteButton'])){
	$billid = $_POST['billid'];
	$repid = $_POST['repid'];
	$result = $_POST['result'];
	$message = $bill->insertVotes($conn, $billid, $repid, $result);

}

$allreps = $rep->getAllReps($conn);
$allbills = $bill->getAllBills($conn);

$controller->view('header');
$controller->view('jumbotron', $data = array('message' => $message));
$controller->view('menu', $data = array('bill' => $allbills, 'rep' => $allreps));
$controller->view('sidemenu', $data = array('bill' => $allbills));
$controller->view('footer');