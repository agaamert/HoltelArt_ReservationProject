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
  <div class="row">
  	<div class = "well" style = "background-color: #f8e5cf; height:620px; width:100%;">
      <div class="col-lg-6 col-lg-offset-3">
        <center>
        <div class = "well" style = "background-color: #ffff; height:570px; width:450px;">
                  <br />
      						<center><p style="font-size: 30px"><b>RESERVATION COMPLETED!</b></p></center>
      						<br />
                  <center><img src="images/green_tick.png" style="width: 15%" /></center>
                  <br />
      						<center><p style="font-size: 25px">Order No.: <b>#<?php echo rand(10000, 99999)?> </b></p></center>
                  <br />
                  <center><p style="font-size: 27px">You will receive a booking confirmation and an invoice to your contact number.</p></center>
      						<br />
      						<center><a onclick="window.print()" class = "btn btn-success"><i class = "glyphicon glyphicon-download-alt"></i> Download Invoice as PDF</a>
                  </center>
                  <br />
                  <center><a style="color: blue;" href="index.php">Return to main page</a></center>
        </center>
          </div>           
        </div>            
  	</div>
  </div>    
</div>
	<br />
	<br />

  <div class = "navbar navbar-default navbar-fixed-bottom">
    <footer>
        <p>© 2022 Mert Aga. All rights reserved.</p>
    </footer>
  </div>

</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>