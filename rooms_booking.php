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
  <img src="images/LOGO/ma_logo1.png" style="float: left; margin-left: 20px;" >  
  <a style="float: right;" href="contact.php">Contact</a>
  <a style="float: right;" class="active" href="rooms_booking.php">Rooms</a> <!-- Activate Rooms button -->
  <a style="float: right;" href="index.php">Home</a>
</div>

<h1 style="text-align: center; font-size: 32px;"><b>HOTELART MAAK, A LUXURY COLLECTION HOTEL, ATHENS</b></h1>
<img src="/images/red_bar.png" class="center">
<p style="text-align: center; font-size: 17pt; padding-right: 200px ;padding-left: 200px;">
<b>R&nbsp;&nbsp;&nbsp;O&nbsp;&nbsp;&nbsp;O&nbsp;&nbsp;&nbsp;M&nbsp;&nbsp;&nbsp;S</b></p>
<img src="/images/red_bar.png" class="center" style="width: 20%">
<br />


	<div class = "container">
				<?php
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `room`") or die(mysql_error());
					while($fetch = $query->fetch_array()){
				?>
					<div class = "well" style = "background-color: #f8e5cf; height:300px; width:100%;">
						<div style = "float:left;">
							<img src = "images/rooms/<?php echo $fetch['photo']?>" height = "250" width = "350"/>
						</div>
						<div style = "float:left; margin-left:20px;">
							<h3><b><?php echo $fetch['room_type']?></b></h3>
							<p><?php echo $fetch['description']?></p>
							<h3 style = ""><?php echo $fetch['price'].".00€"?></h3>
							<p> per night</p>
							<br />
							<a style = "margin-left:580px; background-color: #12806a" href = "add_booking.php?room_id=<?php echo $fetch['room_id']?>" class = "btn btn-info"><i class = "glyphicon glyphicon-circle-arrow-right"></i> I'll reserve</a>
							<br /><br />
							<p style="float: right;"> Confirmation is immediate - No registration required - Free cancel</p>
						</div>
					</div>
				<?php
					}
				?>
		
	</div>
	<br />
	
	
<footer>
  <p>© 2022 Mert Aga. All rights reserved.</p>
</footer>

</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>