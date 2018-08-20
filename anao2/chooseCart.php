<?php
include ("connection.php");
session_start();
$trav_id=$_SESSION["trav_id"];
$id=$_POST["pid"];
$sql8="UPDATE customer_product set trav_id=".$trav_id." where confirm='no' AND id=".$id;
		$result=mysqli_query($conn,$sql8); 
        header("Location:showCart.php");





?>