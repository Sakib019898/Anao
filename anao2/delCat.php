<?php
include("admin.php");
?>
<form  action='delete.php' method='post' >
<h2>Select which product id you want to delete ?</h2>
<input type='text' name='prod_id' id='name' class='txtfield3' placeholder='product_ID' tabindex='1' autocomplete='off'>
<input type='submit' name='submit' id='submitlogin' class='btn' tabindex='5'>
</form>
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