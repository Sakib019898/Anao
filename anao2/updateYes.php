<?php
include("connection.php");
session_start();
$id=@$_POST['pid'];
echo"$id";
$sql = "update customer_product set confirm='yes' where id=".$id;
       
   	$result=mysqli_query($conn,$sql);
    header("Location:confirCart.php");

?>