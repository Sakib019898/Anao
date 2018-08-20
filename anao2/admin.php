<?php
include ("connection.php");
session_start();
if(!isset($_SESSION["email"])){
	$username="";
}
else{
	$username=$_SESSION["email"];
}

echo "email:".$username;

$sql = "SELECT * FROM admin where email='$username'";
       
   	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);
    $id=$row['name'];

echo "email:".$id;


?>
<html>
<head>
<title>Admin panel</title>
<link href='css/admin.css' rel='stylesheet' type='text/css'>
</head>
<body>
<div id='header'>
<center><img src='images/admin.png' id='adminLogo' ></br>Welcome <?php echo $id ?> to the Admin Panel</center>
</div>
<div id='slider'>
  <ul>
	     <li><a href='orderView.php'>View Orders</a></li>
		 <li><a href='travelerAView.php'>View Confirmations</a></li>
	     <li><a href='travelerBView.php'>Traveler Information</a></li>
		 <li><a href='confirmationView.php'>Traveler Recent States</a></li>
	     <li><a href='viewCat.php'>View Catalogue</a></li>
		 <li><a href='addingCat.php'>Add Catalogue Data</a></li>
	     <li><a href='delCat.php'>Delete Catalogue Data</a></li>
         <li><a href='updateCat.php'>Update Catalogue Data</a></li>
	     <li><a href='logout.php'>Log out</a></li>
  </ul>
</div>

</body>
</html>