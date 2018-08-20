<?php
include("admin.php");
?>
<form  action='update.php' method='post' enctype='multipart/form-data'>
			   
              
			   </br><label>Product_ID</label>
               <input type='text' name='prod' id='amount' class='txtfield' placeholder='Product_ID' tabindex='1' autocomplete='off'>
              
			  
			   </br><label>Amount</label>
               <input type='text' name='amount' id='amount' class='txtfield3' placeholder='AMOUNT' tabindex='2' autocomplete='off'>
               
			   </br><label>Price</label>
			   <input type='text' name='price' id='price' class='txtfield3' placeholder='PRICE' tabindex='3' autocomplete='off'>
              
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