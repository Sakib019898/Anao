<?php
include("connection.php");
session_start();
if(!isset($_SESSION["email"])){
	$username="";
}
else{
	$username=$_SESSION["email"];
}
$reg=@$_POST['loginbtn1'];
			  
			  $username=@$_POST['uname'];
$password=@$_POST['password'];
echo "email:".$username;

$sql = "SELECT * FROM customer where email='$username'";
       
   	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);
    $name=$row['username'];
    $id=$row['cust_id'];
	$_SESSION["cust_id"]=$id;
echo "email:".$name;

include("header.php");
$cat = $_GET['cat'];
echo $cat;
?>

	   <div class='prod-container'>
	   		<?php     
		        
	           $sql = "SELECT * FROM products where cat_id=".$cat;
       
   	                $result=mysqli_query($conn,$sql);

	                     while($row=mysqli_fetch_assoc($result)){
							 ?>
		                         <form method= 'post' action='cart.php?id=<?php echo $row['product_id']; ?>'>
								 <div class='prod-container-part'>
								 <div class='prod-box'>
								 <img src='images/<?php echo $row['pic']; ?>'  alt='man suit'>
								 <div class='prod-trans'>
			                        <div class='prod-feature'>
								       <p><?php echo $row['product_name']; ?></p>
									   <p style='color:#fff;font-weight:bold;'>Price : $ <?php echo $row['price']; ?></p>
									   <input type='hidden' name="hidden_price" value='<?php echo $row['price']; ?>' />
									   <button type='submit' name='cart1' value='<?php echo $row['product_name']; ?>'>Add to cart</button>
						               <button type='submit' name='cart2' value='<?php echo $row['product_name']; ?>'>Buy Now</button>
									   </div>
									   </div>
									   </div>
									   <div class='info'> 
									   <p style='color:black; padding-top:2px;padding-left:3px;'>Description : <?php echo $row['description']; ?></p>
									   </div>
									   </form>
									   </div>
									   
									   <?php
		                
						 }
						
                 include("footer.php"); 
			   ?>	 
						 
						 
						 
						 
			