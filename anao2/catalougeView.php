<?php
include("admin.php");
?>
<div id='data'>
    
    <h2 class='viewline'>For extra view click the right button  > </h2>
  <form action="#">
   <input class='viewbutton' type="image" src="images/btn1.png" alt="Submit">
  </form>
  <table>
 <tr>
  <th>Cat_id</th>
  <th>Product_id</th>  
  <th>Product_name</th> 
  <th>Amount</th>
  <th>Price</th>
  <th>Picture</th>
  <th>Description</th>
 </tr>
<?php     
	$sql = "SELECT * FROM confirmation";
       
   	$result=mysqli_query($conn,$sql);
    
	while($row=mysqli_fetch_assoc($result)){
		echo "<tr><td>" . $row['cat_id']. "</td><td>" . $row["product_id"] . "</td><td>". $row["product_name"] . "</td><td>". $row["amount"] . "</td><td>". "</td><td>". $row["price"]."</td><td>".$row["pic"]."</td><td>"
             . $row["description"]. "</td></tr>";
		
	}
	echo "</table>";
?>
</div>

</body>
</html>