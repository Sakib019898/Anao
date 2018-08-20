<?php
include("admin.php");
?>
<div id='data'>
<table>
 <tr>
  <th>Ordered_Id</th>
  <th>Total Cost</th>  
  <th>Date</th> 
  <th>Time</th>
  <th>Place</th>
  <th>Traveler Earn</th>
 </tr>
<?php     
	$sql = "SELECT * FROM confirmation";
       
   	$result=mysqli_query($conn,$sql);

	while($row=mysqli_fetch_assoc($result)){
		echo "<tr><td>" . $row['id']. "</td><td>" . $row["total_cost"] . "</td><td>". $row["date"] . "</td><td>". $row["time"] . "</td><td>". "</td><td>". $row["place"]
             . $row["traveler_earn"]. "</td></tr>";
		
	}
	echo "</table>";
?>
	</div>
	</body>
</html>