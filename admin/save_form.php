<?php
	require_once 'connect.php';
	if(ISSET($_POST['add_form'])){
		$room_no = $_POST['room_no'];
		$extra_bed = $_POST['extra_bed'];
		$query = $conn->query("SELECT * FROM `transaction` WHERE `room_no` = '$room_no' && `status` = 'Check In'") or die(mysqli_error());
		$row = $query->num_rows;
		$time = date("H:i:s", strtotime("+8 HOURS"));
		if($row > 0){
			echo "<script>alert('Room not available')</script>";
		}else{
			$query2 = $conn->query("SELECT * FROM `transaction` NATURAL JOIN `guest` NATURAL JOIN `room` WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
			$fetch2 = $query2->fetch_array();

			# find day difference between two dates
			$checkin = $fetch2['checkin'];
			$checkout = $fetch2['checkout'];
			$day_difference = strtotime($checkin) - strtotime($checkout);
			$days = abs(round($day_difference / 86400));

			$total = $fetch2['price'] * $days;
			$total2 = 280 * $extra_bed;
			$total3 = $total + $total2;
			$conn->query("UPDATE `transaction` SET `room_no` = '$room_no', `days` = '$days', `extra_bed` = '$extra_bed', `status` = 'Check In', `checkin_time` = '$time', `checkout` = '$checkout', `bill` = '$total3' WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
			header("location:checkin.php");
		}
	}
?>