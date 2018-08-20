<?php
include("connection.php");

$id=$_POST['prod'];
$amount=@$_POST['amount'];
$price=@$_POST['price'];


if(isset($_POST['submit']) && $id && $amount && $price   ){
		          $sql = "UPDATE products
                          SET amount = $amount, price= $price 
                          WHERE product_id = $id;
                          ";

				$result=mysqli_query($conn,$sql);
				header("Location: admin.php");
		}
		else{
		   echo"Fill up all the form first !";
		}
    


?> 
