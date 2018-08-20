<?php
include("travelerProfile.php");
?>

        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		
		
    </head>
	
	
    <body>
	  
        <table id="table" border="1">
            
            <tr>
			    <th>ID</th>
                <th>Product</th>
                <th>Amount</th>
				<th>Username</th>
                <th>Mobile</th>
				<th>Email</th>
            </tr>
            
            <?php  
	
	$sql = "select cart.id,products.product_name,cart.amount,customer.username,customer.mobile,customer.email from customer_product inner join cart on customer_product.id=cart.id inner join customer on customer_product.cust_id=customer.cust_id inner join products on cart.product_id=products.product_id where trav_id=".$_SESSION["trav_id"]." AND confirm='no'";
       
   	$result=mysqli_query($conn,$sql);

	while($row=mysqli_fetch_assoc($result)){
		echo "<tr><td>" . $row['id']. "</td><td>" . $row["product_name"] . "</td><td>" . $row["amount"] . "</td><td>" . $row["username"] . "</td><td>" . $row["mobile"] . "</td><td>" . $row["email"]. "</td></tr>";
		
	}
	echo "</table>";
?>
            
     
        <br><br><br><br>
            
    </body>
</html>