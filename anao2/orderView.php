<?php
include("admin.php");
?>
<div id='data'>
<table>
 <tr>
  <th>Ordered_Id</th>
  <th>Customer_Id</th>  
  <th>Traveler_Id</th> 
  <th>Confirm</th>
  <th>Place</th>
 </tr>
<?php     
	$sql = "SELECT * FROM customer_product";
       
   	$result=mysqli_query($conn,$sql);

	while($row=mysqli_fetch_assoc($result)){
		echo "<tr><td>" . $row['id']. "</td><td>" . $row["cust_id"] . "</td><td>". $row["trav_id"] . "</td><td>". $row["confirm"] . "</td><td>"
             . $row["place"]. "</td></tr>";
		
	}
	echo "</table>";
?>
	</div>
	</body>
</html>