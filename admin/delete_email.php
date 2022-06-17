<?php
	require_once 'connect.php';
	$conn->query("DELETE FROM `email` WHERE `email_ID` = '$_REQUEST[email_ID]'") or die(mysqli_error());
	 header("location: email.php");

?>