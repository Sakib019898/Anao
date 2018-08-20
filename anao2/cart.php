<?php
include("connection.php");
     session_start();         
$prop_name = $_GET["id"];
$prop_price=$_POST["hidden_price"];

$id=$_SESSION["cust_id"];
echo "</br>product name is :".$id ;

if($prop_name)
{
echo "product name is :".$prop_name ;
echo "</br>product name is :".$prop_price ;
 	
	} 
else { 
echo "product nai";
}
$sql = "SELECT * FROM customer_product where cust_id=".$id." AND confirm='no' ";
       
   	$result=mysqli_query($conn,$sql);
	$num_rows=mysqli_num_rows($result);
	
   if($num_rows==0){
	   
	   $sql2 = "INSERT INTO customer_product (cust_id,trav_id,confirm,place)
				VALUES ( $id,0,'no','dhaka')";

				$result=mysqli_query($conn,$sql2);
	   
   }
   $sql3 = "SELECT * FROM customer_product where cust_id=".$id." AND confirm='no' ";
       
   	$result=mysqli_query($conn,$sql3);
	$row=mysqli_fetch_assoc($result);
    $p_id=$row['id'];
	
    $sql4 = "SELECT * FROM cart where id=".$p_id."  AND product_id=".$prop_name;
       
   	$result=mysqli_query($conn,$sql4);
	$num_rows2=mysqli_num_rows($result);
	
	
	if($num_rows2==0){
	           $sql4 = "INSERT INTO cart (id,product_id,price,amount)
				VALUES ( $p_id,".$prop_name.",$prop_price,1)";

				$result=mysqli_query($conn,$sql4);
	}
	else{
		
		$sql5 = "SELECT * FROM cart where id=".$p_id."  AND product_id=".$prop_name;
        $result=mysqli_query($conn,$sql5);
	    $row=mysqli_fetch_assoc($result);
        $newAmount=$row['amount'];
       
	   echo "product amount is :".$newAmount ;
		$newAmount=$newAmount+1;
	    $sql6="UPDATE cart set amount=".$newAmount." where id=".$p_id."  AND product_id=".$prop_name;
		
		$result=mysqli_query($conn,$sql6);
		
	}
      $sql7 = "SELECT * FROM products where product_id=".$prop_name;
        $result=mysqli_query($conn,$sql7);
	    $row=mysqli_fetch_assoc($result);
        $oldAmount=$row['amount'];
		$oldAmount=$oldAmount-1;
	    $sql8="UPDATE products set amount=".$oldAmount." where product_id=".$prop_name;
		
		$result=mysqli_query($conn,$sql8); 
       header("Location: customer.php");   		
?>