<?php
include("travelerProfile.php");
?>

        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		
		<style>
		    
            table tr:not(:first-child):hover{background-color: #ddd;}
        </style>
    </head>
	
	
    <body>
	<form method='post' action='chooseCart.php' class='para'>
	   <br><br><br><br> Product ID:<input type="text" name="pid" id="pid" class='txtfield3'><br><br>
        <button name='choose'  id="choose" class='btn'>Choose</button><br><br>
        </form>   
        <table id="table" border="1">
            
            <tr>
			<th>CustomerID</th>
                <th>Product</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
            
            <?php  
	
	$sql = "select * from customer_product inner JOIN cart on cart.id=customer_product.id inner join products on cart.product_id=products.product_id where trav_id=0 AND confirm='no'";
       
   	$result=mysqli_query($conn,$sql);

	while($row=mysqli_fetch_assoc($result)){
		echo "<tr><td>" . $row['id']. "</td><td>" . $row["product_name"] . "</td><td>" . $row["description"] . "</td><td>" . $row["price"]. "</td></tr>";
		
	}
	echo "</table>";
?>
            
     
        <br><br><br><br>
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
                    
                };
            }
            
            
           
            
        </script>    
    </body>
</html>