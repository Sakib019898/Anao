<?php
include("connection.php");
session_start();
if(!isset($_SESSION["email"])){
	$username="";
}
else{
	$username=$_SESSION["email"];
}

$sql = "SELECT * FROM customer where email='$username'";
       
   	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);
    $name=$row['username'];
    $id=$row['cust_id'];
	$_SESSION["cust_id"]=$id;

include("header.php");

echo " .</br><h1>Traveler Information</br></h1>";


$sql = "SELECT * FROM customer_product inner join traveler_advance on customer_product.trav_id=traveler_advance.trav_id inner join traveler_basic on customer_product.trav_id=traveler_basic.trav_id where cust_id=".$_SESSION["cust_id"];
       
   	$result=mysqli_query($conn,$sql);
	$num_rows=mysqli_num_rows($result);
	if($num_rows==0){
		echo"<h3>You don't get your cart or you cart hasn't chosen yet</h3>";
	}
    echo"<h3>";
	while($row=mysqli_fetch_assoc($result)){
		echo "</br></br>Traveler: ".$row["username"]."</br></br>";
		echo "Email: ".$row["email"]."</br></br>";
		echo "Phone: ".$row["phone"]."</br></br>";
		echo "Sent Time: ".$row["sent_time"]."</br></br>";
		echo "Flight: ".$row['flight']."</br></br>";
		echo "Sent Time: ".$row["sent_time"]."</br></br>";
		echo "Place: ".$row['place']."</br></br></br>";
		
		
	}
      echo"</h3>";
include("footer.php");

?>