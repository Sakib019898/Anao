<?php
include("connection.php");session_start();			
	
    $product=strip_tags(@$_POST["pid"]);
    $id=$_SESSION["cust_id"];
	
	$sql3 = "SELECT * FROM customer_product where cust_id=".$id." AND confirm='no' ";
       
   	$result=mysqli_query($conn,$sql3);
	$row=mysqli_fetch_assoc($result);
    $p_id=$row['id'];
	echo "product :".$product;
    echo "</br>id :".$id;
    echo "</br>con :".$p_id;
    
   
	    $sql2 = "DELETE FROM cart WHERE id=".$p_id." AND product_id=".$product;
        $result=mysqli_query($conn,$sql2);
		echo"hocche na ";
		$sql7 = "SELECT * FROM products where product_id=".$product;
        $result=mysqli_query($conn,$sql7);
	    $row=mysqli_fetch_assoc($result);
        $oldAmount=$row['amount'];
		$oldAmount=$oldAmount+1;
	    $sql8="UPDATE products set amount=".$oldAmount." where product_id=".$product;
		
		$result=mysqli_query($conn,$sql8);
		
		header("Location: showCart2.php");
		
	
	?>