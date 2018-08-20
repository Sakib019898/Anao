<?php
include("travelerProfile.php");
$flight=@$_POST['flight'];
$sent=@$_POST['sent'];
$place=@$_POST['place'];


if(isset($_POST['submit']) && $flight && $sent && $place  ){
		          $sql = "UPDATE traveler_advance
                          SET flight = $flight, sent_time= $sent, place=$place; 
                          WHERE trav_id = $id;
                          ";

				$result=mysqli_query($conn,$sql);
				header("Location: travelerProfile.php");
		}
		else{
		   echo"Fill up all the form first !";
		}

?> 
