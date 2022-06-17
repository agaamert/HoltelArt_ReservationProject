<?php
	require_once 'admin/connect.php';
	if(ISSET($_POST['add_guest'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$contactno = $_POST['contactno'];
		$checkin = $_POST['date'];
		$checkout = $_POST['date_out'];
		$conn->query("INSERT INTO `guest` (firstname, lastname, address, contactno) VALUES('$firstname', '$lastname', '$address', '$contactno')") or die(mysqli_error());
		$query = $conn->query("SELECT * FROM `guest` WHERE `firstname` = '$firstname' && `lastname` = '$lastname' && `contactno` = '$contactno'") or die(mysqli_error());
		$fetch = $query->fetch_array();
		$query2 = $conn->query("SELECT * FROM `transaction` WHERE `checkin` <= '$checkin' && `checkout` >= '$checkout' && `room_id` = '$_REQUEST[room_id]' && `status` = 'Pending'") or die(mysqli_error());
		$row = $query2->num_rows;

		$query3 = $conn->query("SELECT * FROM `transaction` WHERE `checkin` >= '$checkin' && `checkout` <= '$checkout' && `room_id` = '$_REQUEST[room_id]' && `status` = 'Pending'") or die(mysqli_error());
		$row2 = $query3->num_rows;

		
		if($checkin < date("Y-m-d", strtotime('+8 HOURS'))){	
				echo "<script>alert('Check-in date must be present date')</script>";
			}else if($checkout < $checkin){
				echo "<script>alert('Checkout can not be before from check in date')</script>";
			}
			else{
				if($row > 0 || $row2 > 0){
					echo "<div class = 'col-md-4'>
								<label style = 'color:#ff0000;'>Room is not available between:</label><br />";
							$q_date = $conn->query("SELECT * FROM `transaction` WHERE `status` = 'Pending'") or die(mysqli_error());
							while($f_date = $q_date->fetch_array()){
								echo "<ul>
										<li>	
											<label class = 'alert-danger'>".date("M d, Y", strtotime($f_date['checkin']."+8HOURS"))." - ".date("M d, Y", strtotime($f_date['checkout']."+8HOURS"))." </label>	
										</li>
									</ul>";
							}
						"</div>";
				}else{	
						if($guest_id = $fetch['guest_id']){
							$room_id = $_REQUEST['room_id'];
							$conn->query("INSERT INTO `transaction`(guest_id, room_id, status, checkin, checkout) VALUES('$guest_id', '$room_id', 'Pending', '$checkin', '$checkout')") or die(mysqli_error());
							if( ! headers_sent()){
								header("location:reserve_success.php");
							}
							else { 	echo "<script type='text/javascript'>window.location.href='reserve_success.php';</script>"; }
						}else{
							echo "<script>alert('Error Javascript Exception!')</script>";
						}
				}	
			}	
	}	
?>