<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<html lang = "en">
	<head>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
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

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
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
	<a style="float: left;" href="account.php">Accounts</a> 
	<a style="float: left;" class="active" href="reserve.php">Reservations</a>
	<a style="float: left;" href="room.php">Rooms</a>
	<a style="float: left; margin-left: 50px;" href="email.php"><i class = "glyphicon glyphicon-inbox"></i> Inbox</a>
	<a style="float: right;" href="logout.php"><i class = "glyphicon glyphicon-log-out"></i> Sign out</a>
</div>
	<br />
	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Edit Account</div>
				<?php
					$query = $conn->query("SELECT * FROM `admin` WHERE `admin_id` = '$_REQUEST[admin_id]'") or die(mysqli_error());
					$fetch = $query->fetch_array();
				?>
				<br />
				<div class = "col-md-4">	
					<form method = "POST" action = "edit_query_account.php?admin_id=<?php echo $fetch['admin_id']?>">
						<div class = "form-group">
							<label>Name </label>
							<input type = "text" class = "form-control" value = "<?php echo $fetch['name']?>" name = "name" />
						</div>
						<div class = "form-group">
							<label>Username </label>
							<input type = "text" class = "form-control" value = "<?php echo $fetch['username']?>" name = "username" />
						</div>
						<div class = "form-group">
							<label>Password </label>
							<input type = "password" class = "form-control" value = "<?php echo $fetch['password']?>" name = "password" />
						</div>
						<br />
						<div class = "form-group">
							<button name = "edit_account" class = "btn btn-warning form-control"><i class = "glyphicon glyphicon-edit"></i> Save Changes</button>
						</div>
					</form>
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
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
</html>