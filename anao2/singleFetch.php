<?php

include("connection.php");

$sql = "SELECT * FROM admin where email='skb@gmail.com' ";
       
   	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);
    $id=$row['name'];

echo $id;

?>