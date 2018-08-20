<?php
include("connection.php");
$id=$_POST['prod_id'];
if(isset($_POST['submit'])){
	
	$sql = "Delete from products where product_id= $id";

				$result=mysqli_query($conn,$sql);
	            header("Location: admin.php");
	
	
	
	
}


?>
