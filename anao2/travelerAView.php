<?php
include("admin.php");
?>
<div id='data'>
<table>
 <tr>
  <th>Traveler_Id</th>
  <th>Free</th>  
  <th>Flight</th> 
  <th>Sending Time</th>
  <th>Place</th>
  <th>Earn</th>
 </tr>
<?php     
	$sql = "SELECT * FROM traveler_advance";
       
   	$result=mysqli_query($conn,$sql);

	while($row=mysqli_fetch_assoc($result)){
		echo "<tr><td>" . $row['trav_id']. "</td><td>" . $row["free"] . "</td><td>". $row["flight"] . "</td><td>". $row["sent_time"] . "</td><td>". "</td><td>". $row["place"]
             . $row["earn"]. "</td></tr>";
		
	}
	echo "</table>";
?>
	</div>
	</body>
</html>