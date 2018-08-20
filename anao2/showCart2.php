
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
    

?>
<html>
    <head>
        <title>Cart</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
    </head>
	
	
    <body>
	 .<h2>Your Cart</br></br></h2>
	  <table id="table" border="1">
            
            <tr>
			<th>ProductID</th>
                <th>Product</th>
                <th>Cost</th>
                <th>Amount</th>
            </tr>
            
            <?php  
	$id=$_SESSION["cust_id"];
	
	$sql3 = "SELECT * FROM customer_product where cust_id=".$id." AND confirm='no' ";
       
   	$result=mysqli_query($conn,$sql3);
	$row=mysqli_fetch_assoc($result);
    $p_id=$row['id'];
	

	
	$sql = "SELECT id,cart.product_id,product_name,cart.price,cart.amount FROM cart inner join products on cart.product_id=products.product_id where id=".$p_id;
       
   	$result=mysqli_query($conn,$sql);
    $total=0;
	while($row=mysqli_fetch_assoc($result)){
	    $total=$total+($row["price"]*$row["amount"]);	
		echo "<tr><td>" . $row['product_id']. "</td><td>" . $row["product_name"] . "</td><td>" . $row["price"] . "</td><td>" . $row["amount"]. "</td></tr>";
		
	}
	echo "</table>";
	echo"</br><h2>Your Total cost is : ".$total." taka </h2>"; 
?>
            
     
        
          
        <?php include("footer.php"); ?>
    </body>
</html>