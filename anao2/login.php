<?php
include("connection.php");
session_start();
$login=@$_POST['loginbtn'];
$radioVal =@$_POST['radio'];

if($login){
	echo"you selected :$radioVal";
if(isset($_POST["email"]) && isset($_POST["password"])){
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$sql="SELECT * FROM $radioVal WHERE email='$email' AND password='$password'";
	
       $result=mysqli_query($conn,$sql);
	   
	if(!$row=mysqli_fetch_assoc($result)){
		echo "Your email or password is incorrect!";
	}
	else{
		
		$_SESSION["email"]=$email;
		if($radioVal=='customer'){
		
		header("Location: customer.php");
		exit();
		}
		else if($radioVal=='traveler_basic'){
			
		header("Location: travelerProfile.php");
		exit();
		}
		else if($radioVal=='admin'){
			header("Location: admin.php");
			exit();
		}
		
	}
  }
  else{
	  echo"Fill up first";
  }
}


?>

<html>
<head>
<title>Login</title>
<link rel='stylesheet' href='css/signLogin.css'>
</head>
<body background="images/b.gif">
     <header id='header'>
       <h1>Anao Login Panel</h1>
	 </header>
	 <div id='navigation'>
		<nav>
		
		<a href='index.php'>Home</a>
		<a href='index.php'>Electronics</a>
		<a href='index.php'>Watches</a>
		<a href='index.php'>Books</a>
		<a href='index.php'>Video games</a>
		<a href='index.php'>Cosmetics</a>
		</nav>
		
	   </div>
     <section id='maincontent'>
	   
	   
	   <div id='container'>
	     
		  <div  id='formpanel'>
		     <div  id='customerbox'>
		       <form action='#' id='customerform' method='post'>
			   <div id='combo'>
			   <input type="radio" name="radio" value="customer" checked>Customer
               <input type="radio" name="radio" value="traveler_basic">Traveler
               <input type="radio" name="radio" value="admin">Admin</br>
               </div>
			   <label></label>
			   <input type='email' name='email' id='email' class='txtfield' placeholder='EMAIL' tabindex='2' autocomplete='off'>
               <input type='Password' name='password' id='Password' class='txtfield' placeholder='PASSWORD' tabindex='5' autocomplete='off'>
               
			  
			  <input type='submit' name='loginbtn' id='submitlogin' class='btn' tabindex='7'>
                  </form>
			   </div>
			   </div>
			   </div>
			   </section>
			   <?php include("footer.php"); ?>
			   </body>
</html>
			   