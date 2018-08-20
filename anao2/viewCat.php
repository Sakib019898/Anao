<?php
include("admin.php");
?>
<div id='data'>
<table>
 <tr>
  <th>ProductID</th>
  <th>CategoryID</th>
  <th>Product Name</th>  
  <th>Price</th> 
  <th>Amount</th>
 
 </tr>
<?php     
	$sql = "SELECT * FROM products";
       
   	$result=mysqli_query($conn,$sql);

	while($row=mysqli_fetch_assoc($result)){
		echo "<tr><td>" . $row['product_id']. "</td><td>" . $row["cat_id"] . "</td><td>". $row["product_name"] . "</td><td>". $row["price"] . "</td><td>". $row["amount"]."</td></tr>";
		
	}
	echo "</table>";
?>
	</div>
	</body>
</html>