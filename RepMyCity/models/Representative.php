<?php
class Representative {
	public function insertRep($conn, $name, $position) {
		$deactivateReps = mysqli_query($conn, "UPDATE representatives SET active = 0 WHERE position = '$position'");
		$insertRep = mysqli_query($conn, "INSERT INTO representatives VALUES ('',UUID(),'$name','$position','1')");
		if ($insertRep) {
			return '<p class = "bg-success">You successfully added and updated coucil members.</p>';
		} else {
			return '<p class = "bg-warning">An error occurred. Please try again.</p>';
		}
	}
	public function getRep($conn, $position) {
		$getRep = mysqli_query($conn, "SELECT * FROM representatives WHERE position = '$position' AND active = 1");

	}

	public function getAllReps($conn) {
		$getAllReps = mysqli_query($conn, "SELECT * FROM representatives WHERE active = 1");
		if (mysqli_num_rows($getAllReps) >= 1) {
			$data = array();
			while ($row = mysqli_fetch_assoc($getAllReps)){
				$repappend = array($row['rep_id'],$row['rep_name'],$row['position'],$row['img']);
				array_push($data, $repappend);
			}
			return $data;
		}
	}

	public function getVotes($conn, $repid) {
		$getMyVotes = mysqli_query($conn, "SELECT bills.bill_id, bills.bill_name, bills.description, bills.date, votes.result FROM bills, votes WHERE bills.bill_id = votes.bill_id AND votes.rep_id = '$repid'");
		if (mysqli_num_rows($getMyVotes) >= 1) {
			return 0;
		}
	}
	
}