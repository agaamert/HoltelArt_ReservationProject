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
  <a style="float: right;" href="contact.php">Contact</a>
  <a style="float: right;" class="active" href="rooms_booking.php">Rooms</a>
  <a style="float: right;" href="index.php">Home</a>
</div>

<h1 style="text-align: center; font-size: 32px;"><b>HOTELART MAAK, A LUXURY COLLECTION HOTEL, ATHENS</b></h1>
<img src="/images/red_bar.png" class="center">
<p style="text-align: center; font-size: 17pt; padding-right: 200px ;padding-left: 200px;">
<b>R&nbsp;&nbsp;&nbsp;E&nbsp;&nbsp;&nbsp;S&nbsp;&nbsp;&nbsp;E&nbsp;&nbsp;&nbsp;R&nbsp;&nbsp;&nbsp;V&nbsp;&nbsp;&nbsp;A&nbsp;&nbsp;&nbsp;T&nbsp;&nbsp;&nbsp;I&nbsp;&nbsp;&nbsp;O&nbsp;&nbsp;&nbsp;N</b></p>
<img src="/images/red_bar.png" class="center" style="width: 20%">
<br />


	<div class = "container">

				<?php 
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `room` WHERE `room_id` = '$_REQUEST[room_id]'") or die(mysql_error());
					$fetch = $query->fetch_array();
				?>

					<div class = "well" style = "background-color: #f8e5cf; height:920px; width:100%;">
						<div style = "float:left;">
							<img src = "images/rooms/<?php echo $fetch['photo']?>" height = "250" width = "350"/>
						</div>
						<div style = "float:left; margin-left:30px;">
							<h3><b><?php echo $fetch['room_type']?></b></h3>
							<p><?php echo $fetch['description']?></p>
							<h3 style = ""><?php echo $fetch['price'].".00 €"?></h3>
							<br /><br />
							<p style="font-size: 18px;">Confirmation is immediate - No registration required - Free cancel</p>
						</div>
								<br style = "clear:both;" />
								<br /><br />
									<div class = "well col-md-4" style="width: 100%; background-color: transparent; border-width: 0;">
										<form method = "POST" enctype = "multipart/form-data">
											<div class = "form-group">
												<label>Check in</label>
												<input type = "date" class = "form-control" name = "date" required = "required" />
											</div>
											<div class = "form-group">
												<label>Check out</label>
												<input type = "date" class = "form-control" name = "date_out" required = "required" />
											</div>
											<br /><br />
											<div class = "form-group" >
												<label>Firstname</label>
												<input type = "text" class = "form-control" name = "firstname" required = "required" />
											</div>
											<div class = "form-group">
												<label>Lastname</label>
												<input type = "text" class = "form-control" name = "lastname" required = "required" />
											</div>
											<div class = "form-group">
												<label>Address</label>
												<input type = "text" class = "form-control" name = "address" required = "required" />
											</div>
											<div class = "form-group">
												<label>Contact No</label>
												<input type = "text" class = "form-control" name = "contactno" required = "required" />
											</div>
											<br />
											<div class = "form-group">
												<button style="background-color: #12806a;" class = "btn btn-info form-control" name = "add_guest"><i class = "glyphicon glyphicon-check"></i> Submit</button>
											</div>
										</form>
									</div>
									<div class = "col-md-4"></div>
									<?php require_once 'add_query_reserve.php'?>
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