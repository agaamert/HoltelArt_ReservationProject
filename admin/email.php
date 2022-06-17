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
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
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
	<a style="float: left;" href="room.php">Rooms</a>
  <a style="float: left; margin-left: 50px;" class="active" href="email.php"><i class = "glyphicon glyphicon-inbox"></i> Inbox</a>
	<a style="float: right;" href="logout.php" return false;" ><i class = "glyphicon glyphicon-log-out"></i> Sign out</a>
</div>

<br />
  <div class = "container-fluid">
    <div class = "panel panel-default">
      <div class = "panel-body">
        <div class = "alert alert-info">Inbox</div>
        <table id = "table" class = "table table-bordered">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Title</th>
              <th>e-mail</th>
              <th>Message</th>
            </tr>
          </thead>
          <tbody>
            <?php  
              $query = $conn->query("SELECT * FROM `email`") or die(mysqli_error());
              while($fetch = $query->fetch_array()){
            ?>
            <tr>
              <td><?php echo $fetch['email_ID']?></td>
              <td><?php echo $fetch['name']?></td>
              <td><?php echo $fetch['title']?></td>
              <td><?php echo $fetch['email_addr']?></td>
              <td><?php echo $fetch['message']?></td>
              <td><center><a class = "btn btn-success" href = "mailto:<?php echo $fetch['email_addr']?>"><i class = "glyphicon glyphicon-edit"></i> Reply</a> <a class = "btn btn-danger" onclick = "confirmationDelete(this); return false;" href = "delete_email.php?email_ID=<?php echo $fetch['email_ID']?>"><i class = "glyphicon glyphicon-remove"></i> Delete</a></center></td>
            </tr>
            <?php
              }
            ?>
          </tbody>
        </table>
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
<script src = "../js/jquery.dataTables.js"></script>
<script src = "../js/dataTables.bootstrap.js"></script> 
<script type = "text/javascript">
  function confirmationDelete(anchor){
    var conf = confirm("Are you sure you want to delete this record?");
    if(conf){
      window.location = anchor.attr("href");
    }
  } 
</script>

<script type = "text/javascript">
  $(document).ready(function(){
    $("#table").DataTable();
  });
</script>
</html>