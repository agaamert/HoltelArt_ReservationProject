<!DOCTYPE html>
<?php require_once "connect.php"?>
<html lang = "en">
	<head>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
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
</style>


<body style="background-color:#ffffe1;">
		<div class="topnav">
  			<img src="../images/LOGO/ma_logo1.png" style="float: left; margin-left: 20px;" > 
  			<p style="color: #a52a2a; margin-top: 15px;"><b> | ADMIN PANEL</b></p> 
  		</div>
  	<br /><br />
	<div class = "container">
			<center><img src="../images/admin_panel.png" style="float: top; margin-top: 100px; width: 40%; "></center> 
			<div class = "panel-body">
				<center><form method = "POST" style="width: 500px">
					<div class = "form-group">
						<label style="float: left;">Username</label>
						<input type = "text" name = "username" class = "form-control" required = "required" />
					</div>
					<div class = "form-group">
						<label style="float: left;">Password</label>
						<input type = "password" name = "password" class = "form-control" required = "required" />
					</div>
					<br />
					<div class = "form-group">
						<button style="background-color: #12806a" name = "login" class = "form-control btn btn-primary"><i class = "glyphicon glyphicon-log-in"> Login</i></button>
					</div>
				</form>
				</center>
				<?php require_once 'login.php'?>

			</div>
		<br />
		<br />
	</div>
</body>

<div class = "navbar navbar-default navbar-fixed-bottom">
		<footer>
  			<p>© 2022 Mert Aga. All rights reserved.</p>
		</footer>
	</div>

<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>	
</html>