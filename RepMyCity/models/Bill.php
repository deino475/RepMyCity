<?php
class Bill {
	public function insertBill($conn, $name, $description, $date, $tags) {
		$bill_id = $this->generateRandomString($length = 25);
		$insertBill = mysqli_query($conn, "INSERT INTO bills VALUES ('','$bill_id','$name','$description','$date')");
		$this->insertTags($conn, $bill_id, $tags);
		if ($insertBill) {
			return '<p class = "bg-success">Bill inserted.</p>';
		} else {
			return '<p class = "bg-warning">Bill not inserted.</p>';
		}
	}
	public function insertTags($conn, $id, $tags) {
		$tagList = explode(',', $tags);
		foreach ($tagList as $tag) {
			$tag = trim($tag);
			$insertTags = mysqli_query($conn, "INSERT INTO tags VALUES ('','$id','$tag')");
		}
	}
	public function insertVotes($conn, $billid, $repid, $result) {
		$insertVote = mysqli_query($conn, "INSERT INTO votes VALUES ('','$billid','$repid','$result')");
		if ($insertVote) {
			return '<p class = "bg-success">Vote inserted.</p>';
		} else {
			return '<p class = "bg-warning">Vote not inserted.</p>';
		}
	}

	public function getAllBills($conn) {
		$getBills = mysqli_query($conn, "SELECT * FROM bills ORDER BY date DESC, bid DESC LIMIT 30 ");
		if (mysqli_num_rows($getBills) >= 1) {
			$data = array();
			while ($row = mysqli_fetch_assoc($getBills)){
				$billappend = array($row['bill_id'],$row['bill_name'], $row['description']);
				array_push($data, $billappend);
			}
			return $data;
		}
	}

	public function getBill($conn, $id) {
		$getBill = mysqli_query($conn, "SELECT * FROM bills WHERE bill_id = '$id'");
		if (mysqli_num_rows($getBill) == 1) {
			while ($row = mysqli_fetch_assoc($getBill)) {
				return array($row['bill_id'],$row['bill_name'], $row['description'], $row['date']);
			}
		}
	}

	public function getVotes($conn, $id) {
		$getVotes = mysqli_query($conn, "SELECT representatives.rep_name, representatives.position, votes.result FROM votes, representatives, bills WHERE bills.bill_id = votes.bill_id AND votes.rep_id = representatives.rep_id AND bills.bill_id = '$id' ORDER BY bills.bill_name ASC");
		if (mysqli_num_rows($getVotes) >= 1) {
			$data = array();
			while ($row = mysqli_fetch_assoc($getVotes)) {
				array_push($data, array($row['rep_name'], $row['position'], $row['result']));
			}
			return $data;
		}
	}

	public function getTags($conn, $id) {
		$getTags = mysqli_query($conn, "SELECT * FROM tags WHERE bill_id = '$id'");
		if (mysqli_num_rows($getTags) >= 1) {
			$data = array();
			while ($row = mysqli_fetch_assoc($getTags)) {
				array_push($data, $row['tag']);
			}
			return $data;
		}
	}

	public function getSimilarBills($conn, $tag) {
		$getBillsByTags = mysqli_query($conn, "SELECT DISTINCT bills.bill_id, bills.bill_name, bills.description FROM bills, tags WHERE bills.bill_id = tags.bill_id AND tags.tag = '$tag' ORDER BY bills.date DESC");
		if (mysqli_num_rows($getBillsByTags) >= 1) {
			$data = array();
			while ($row = mysqli_fetch_assoc($getBillsByTags)) {
				array_push($data, array($row['bill_id'], $row['bill_name'], $row['description']));
			}
			return $data;
		}
	}

	public function getRecentBills($conn) {
		$getRecentBills = mysqli_query($conn, "SELECT * FROM bills ORDER BY date DESC, bid DESC LIMIT 4");
		if (mysqli_num_rows($getRecentBills) >= 1) {
			$data = array();
			while ($row = mysqli_fetch_assoc($getRecentBills)) {
				array_push($data, array($row['bill_id'], $row['bill_name'], $row['description']));
			}
			return $data;
		}
	}

	public function generateRandomString($length = 10) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}
}