<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
	</head>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #F0CB9E;
}

.topnav a {
  float: left;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #f6eaea;
  color: black;
}

.topnav a.active {
  background-color: #a52a2a;
  color: white;
}

footer {
  text-align: right;
  padding: 20px;
  background-color: DarkSalmon;
  color: black;
  }

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}


</style>
</head>
<body style="background-color:#ffffe1;">

<div class="topnav">
  <img src="images/LOGO/ma_logo1.png" style="float: left;">
  <a style="float: right;" class="active" href="contact.php">Contact</a>
  <a style="float: right;" href="rooms_booking.php">Rooms</a>
  <a style="float: right;" href="index.php">Home</a>
</div>

<h1 style="text-align: center; font-size: 32px;"><b>HOTELART MAAK, A LUXURY COLLECTION HOTEL, ATHENS</b></h1>
<img src="/images/red_bar.png" class="center">

<br />


	<div class = "container">

					<div class = "well" style = "background-color: #f8e5cf; height:1250px; width:100%;">
						<div style = "float:left;">
							<img src = "images/contact.jpg" width="100%" />
						</div>
						<div style = "float:left; margin-left:30px;">
						</div>
								<br style = "clear:both;" />
								<br /><br />
									<div class = "well col-md-4" style="width: 100%; background-color: transparent; border-width: 0;">
										<form method = "POST" enctype = "multipart/form-data">
											<div class = "form-group" >
												<label>Full Name</label>
												<input type = "text" class = "form-control" name = "name" required = "required" />
											</div>
											<div class = "form-group">
												<label>email</label>
												<input type = "text" class = "form-control" name = "email" required = "required" />
											</div>
											<div class = "form-group">
												<label>Subject</label>
												<input type = "text" class = "form-control" name = "title" required = "required" />
											</div>
											<div class = "form-group">
												<label>Message</label>
												<textarea style="resize: none;" maxlength="500" rows="10" cols="50" type = "text" class = "form-control" name = "message" required = "required"></textarea>
											</div>
											<br /><br />
											<div class = "form-group">
												<button style="background-color: #12806a;" class = "btn btn-info form-control" name = "send_mail"><i class = "glyphicon glyphicon-check"></i> Submit</button>
											</div>
										</form>
									</div>
									<div class = "col-md-4"></div>
									<?php require_once 'send_email.php'?>
						</div>
						<br />
						<br />
					</div>

</body>
<footer>
  <p>© 2022 Mert Aga. All rights reserved.</p>
</footer>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>