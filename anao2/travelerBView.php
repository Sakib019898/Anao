<?php
include("admin.php");
?>
<div id='data'>
<table>
 <tr>
  <th>Traveler_Id</th>
  <th>Traveler_name</th>  
  <th>Email</th> 
  <th>Phone</th>
  <th>Passport</th>
 </tr>
<?php     
	$sql = "SELECT * FROM traveler_basic";
       
   	$result=mysqli_query($conn,$sql);

	while($row=mysqli_fetch_assoc($result)){
		echo "<tr><td>" . $row['trav_id']. "</td><td>" . $row["username"] . "</td><td>". $row["email"] . "</td><td>". $row["phone"] . "</td><td>"
             . $row["passport"]. "</td></tr>";
		
	}
	echo "</table>";
?>
	</div>
	</body>
</html>