<?php
	require_once 'admin/connect.php';
	if(ISSET($_POST['send_mail'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$title = $_POST['title'];
		$message = $_POST['message'];

		$conn->query("INSERT INTO `email`(name, email_addr, title, message) VALUES('$name', '$email', '$title', '$message')") or die(mysqli_error());
		header("location:email_success.php");
	}
?>