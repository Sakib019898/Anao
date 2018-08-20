
<?php
include("travelerProfile.php");
$flight=@$_POST['flight'];
$sent=@$_POST['sent'];
$place=@$_POST['place'];
if(isset($_POST['submit']) && $flight && $sent && $place  ){
		          $sql = "UPDATE traveler_advance
                          SET flight = '$flight', sent_time= '$sent', place='$place' 
                          WHERE trav_id = $id ";

				$result=mysqli_query($conn,$sql);
				header("Location: travelerProfile.php");
		}
		else{
		   echo"Fill up all the form first !</br></br>";
		}

?>
<div class='state'>
<?php     
	$sql = "SELECT * FROM traveler_advance where trav_id=$id";
       
   	$result=mysqli_query($conn,$sql);

	while($row=mysqli_fetch_assoc($result)){
		echo "Flight: ".$row['flight']."</br></br>";
		echo "Sent Time: ".$row["sent_time"]."</br></br>";
		echo "Place: ".$row['place']."</br></br></br>";
		
		
	}
	echo "</table>";
?>
<form method='post' >
			   
			   
			   </br> <label>flight</label>
			   <input type='text' name='flight' id='flight' class='txtfield5' placeholder='FLIGHT' tabindex='1' autocomplete='off'>
               
			   </br><label>Sent Time</label>
               <input type='text' name='sent' id='amount' class='txtfield5' placeholder='SENT_TIME' tabindex='2' autocomplete='off'>
               
			   </br><label>Place</label>
			   <input type='text' name='place' id='price' class='txtfield5' placeholder='Place' tabindex='3' autocomplete='off'>
              
			 <input type='submit' name='submit' id='submitlogin' class='btn' tabindex='5'>
			 
</form>
</div>
	</body>
</html>
