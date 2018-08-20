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
    

	$sql = "select * from customer_product where trav_id<>0 and confirm='no' and cust_id=".$id;
    $result=mysqli_query($conn,$sql);
	$num_rows=mysqli_num_rows($result);
	
    ?>
    <head>
        <title>Cart</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		
		<style>
		
            
            table tr:not(:first-child):hover{background-color: #ddd;}
        </style>
    </head>
	
	
    <body>
	.</br></br></br>
	<form method='post' action='updateYes.php'  class='para'>
	   <br><br><br><br> Traveler ID:<input type="text" name="pid" id="pid" class='txtfield3'><br><br>
        ID:<input type="text" name="fname" id="fname" class='txtfield3'><br><br>
        
        <button name='confirm' >Confirm</button><br><br>
        </form>   
        <table id="table" border="1">
            
            <tr>
			<th>TravelerID</th>
			<th>CartID</th>
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
	
   if($num_rows!=0){
	
	$sql = "select customer_product.id,customer_product.trav_id,products.product_name,cart.price,cart.amount from customer_product inner join cart on cart.id=customer_product.id inner join products on cart.product_id=products.product_id where trav_id<>0 and cart.id=".$p_id;
       
   	$result=mysqli_query($conn,$sql);

	while($row=mysqli_fetch_assoc($result)){
		echo "<tr><td>" . $row['id']. "</td><td>" . $row['trav_id']. "</td><td>" . $row["product_name"] . "</td><td>" . $row["price"] . "</td><td>" . $row["amount"]. "</td></tr>";
		
	}
	echo "</table>";
?>
            
     
        
        <script> 
            
            // get selected row
            // display selected row data in text input
            
            var table = document.getElementById("table"),rIndex;
            
            for(var i = 1; i < table.rows.length; i++)
            {
                table.rows[i].onclick = function()
                {
                    rIndex = this.rowIndex;
                    console.log(rIndex);
                    
					document.getElementById("pid").value = this.cells[0].innerHTML;
                    document.getElementById("fname").value = this.cells[1].innerHTML;
                    
                };
            }
            
            
           
            
        </script>    
        <?php include("footer.php"); ?>
		
    </body>
</html>
	<?php
	} 
	
?>