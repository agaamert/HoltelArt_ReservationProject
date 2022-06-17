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
	<a style="float: left;" href="reserve.php">Reservations</a>
	<a style="float: left;" class="active" href="room.php">Rooms</a>
	<a style="float: left; margin-left: 50px;" href="email.php"><i class = "glyphicon glyphicon-inbox"></i> Inbox</a>
	<a style="float: right;" href="logout.php"><i class = "glyphicon glyphicon-log-out"></i> Sign out</a>
</div>
	<br />
	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Edit Room</div>
				<br />
				<div class = "col-md-4">
					<?php
						$query = $conn->query("SELECT * FROM `room` WHERE `room_id` = '$_REQUEST[room_id]'") or die(mysqli_error());
						$fetch = $query->fetch_array();
					?>
					<form method = "POST" enctype = "multipart/form-data">
						<div class = "form-group">
							<label>Room Type </label>
							<select class = "form-control" required = required name = "room_type">
								<option value = "">Choose an option</option>
								<option value = "Standard (Single)" <?php if($fetch['room_type'] == "Standard (Single)"){echo "selected";}?>>Standart (Single)</option>
								<option value = "Doublex" <?php if($fetch['room_type'] == "Doublex"){echo "selected";}?>>Doublex</option>
								<option value = "Triplex" <?php if($fetch['room_type'] == "Triplex"){echo "selected";}?>>Triplex</option>
								<option value = "VIP (Quadrublex)" <?php if($fetch['room_type'] == "Jr. Suite"){echo "selected";}?>>VIP (Quadrublex)</option>
							</select>
						</div>
						<div class = "form-group">
							<label>Description </label>
							<input type = "text"  class = "form-control" value = "<?php echo $fetch['description']?>" name = "description" />
						</div>
						<div class = "form-group">
							<label>Price </label>
							<input type = "number" min = "0" max = "999999999" value = "<?php echo $fetch['price']?>" class = "form-control" name = "price" />
						</div>
						<div class = "form-group">
							<label>Photo </label>
							<div id = "preview" style = "width:150px; height :150px; border:1px solid #000;">
								<img src = "../images/rooms/<?php echo $fetch['photo']?>" id = "lbl" width = "100%" height = "100%"/>
							</div>
							<input type = "file" required = "required" id = "photo" name = "photo"/>
						</div>
						<br />
						<div class = "form-group">
							<button name = "edit_room" class = "btn btn-warning form-control"><i class = "glyphicon glyphicon-edit"></i> Save Changes</button>
						</div>
					</form>
					<?php require_once 'edit_query_room.php'?>
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
<script type = "text/javascript">
	$(document).ready(function(){
		$pic = $('<img id = "image" width = "100%" height = "100%"/>');
		$lbl = $('<center id = "lbl">[Photo]</center>');
		$("#photo").change(function(){
			$("#lbl").remove();
			var files = !!this.files ? this.files : [];
			if(!files.length || !window.FileReader){
				$("#image").remove();
				$lbl.appendTo("#preview");
			}
			if(/^image/.test(files[0].type)){
				var reader = new FileReader();
				reader.readAsDataURL(files[0]);
				reader.onloadend = function(){
					$pic.appendTo("#preview");
					$("#image").attr("src", this.result);
				}
			}
		});
	});
</script>
</html>