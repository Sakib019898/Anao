<?php
include("connection.php");
?>
<html>



<head>
<title>Sign Up</title>
<link rel='stylesheet' href='css/signLogin.css'>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js'></script>
<script type='text/javascript' src='js/signup.js'></script>

</head>
<body background="images/b.gif">
     <header id='header'>
       <h1>Anao Sign Up Panel</h1>
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
	     <div id='tabbox'>
          <a href='#' id='customer' class='tab select'>Customer</a>
		  <a href='#' id='traveler' class='tab traveler'>Traveler</a>
		  </div>
		  <div  id='formpanel'>
		     <div  id='customerbox'>
		       <form action='#' id='customerform' method='post'>
			   
			   <input type='text' name='uname' id='uname' class='txtfield' placeholder='USERNAME' tabindex='1' autocomplete='off'>
               
			   <input type='email' name='email' id='email' class='txtfield' placeholder='EMAIL' tabindex='2' autocomplete='off'>
               <input type='email' name='email2' id='email' class='txtfield' placeholder='EMAIL(again)' tabindex='3' autocomplete='off'>
              
               <input type='text' name='contact' id='contact' class='txtfield' placeholder='CONTACT NUMBER' tabindex='4' autocomplete='off'>
              
			   <input type='Password' name='password' id='Password' class='txtfield' placeholder='PASSWORD' tabindex='5' autocomplete='off'>
               <input type='Password' name='password2' id='Password' class='txtfield' placeholder='PASSWORD(again)' tabindex='6' autocomplete='off'>
              
			  
			  <input type='submit' name='loginbtn1' id='submitlogin' class='btn' tabindex='7'>
			  
			  <?php
			  
			  
			  $reg=@$_POST['loginbtn1'];
			  
			  $username=@$_POST['uname'];
$password=@$_POST['password'];
$password2=@$_POST['password2'];
$email =@$_POST['email'];
$email2=@$_POST['email2'];
$contact=@$_POST['contact'];
			  
			  if($reg){
	
	if($email==$email2){

		if($username && $email && $email2 && $password && $password2 && $contact){

			if($password==$password2){

				$sql = "INSERT INTO customer(username,mobile,email,password)
				VALUES ('$username','$contact','$email','$password')";

				$result=mysqli_query($conn,$sql);

				die("<h2> Welcome to anao</h2>Login to your account to get started....");

			}
			else{
				echo "Password Doesn't Match2!";
			}
		}

		else{
			echo "<h2><p style=' color:black; padding-left:10px; font-weight:bold;'>Fill Up The Form First2!</p></h2>";
		}
	}
			
	else{
		echo "Your Email Doesn't Match2!";
	}
}
			  
			  ?>
              </form>
			   </div>
			   <div  id='travelerbox'>
		       <form action='#' id='travelerform' method='post'>
			   <input type='text' name='uname3' id='uname' class='txtfield' placeholder='USERNAME' tabindex='1' autocomplete='off'>
               
			   <input type='email' name='email3' id='email' class='txtfield' placeholder='EMAIL' tabindex='2' autocomplete='off'>
               <input type='email' name='email4' id='email' class='txtfield' placeholder='EMAIL(again)' tabindex='3' autocomplete='off'>
              
			  
               <input type='text' name='contact3' id='contact' class='txtfield' placeholder='CONTACT NUMBER' tabindex='4' autocomplete='off'>
              
			   <input type='text' name='passport3' id='passport' class='txtfield' placeholder='PASSPORT' tabindex='5' autocomplete='off'>
              
			   <input type='Password' name='password3' id='Password' class='txtfield' placeholder='PASSWORD' tabindex='6' autocomplete='off'>
               <input type='Password' name='password4' id='Password' class='txtfield' placeholder='PASSWORD(again)' tabindex='7' autocomplete='off'>
              
			   <input type='submit' name='loginbtn2' id='submitlogin' class='btn' tabindex='8'>
			   <?php

$reg2=@$_POST['loginbtn2'];



$username3=strip_tags(@$_POST['uname3']);
$password3=strip_tags(@$_POST['password3']);
$password4=strip_tags(@$_POST['password4']);
$email3 =strip_tags(@$_POST['email3']);
$email4=strip_tags(@$_POST['email4']);
$contact3=strip_tags(@$_POST['contact3']);
$passport3=strip_tags(@$_POST['passport3']);


if($reg2){
	if($email3==$email4){

		if($username3 && $email3 && $email4 && $password3 && $password4 && $contact3 && $passport3){

			if($password3==$password4){

				$sql = "INSERT INTO traveler_basic(username,phone,email,password,passport)
				VALUES ('$username3','$contact3','$email3','$password3','$passport3')";

				$result=mysqli_query($conn,$sql);
				
				die("<h2> Welcome to anao</h2>Login to your account to get started....");

			}
			else{
				echo "Password Doesn't Match1!";
			}
		}

		else{
			echo "Fill Up The Form First1!";
		}
	}
			
	else{
		echo "Your Email Doesn't Match2!";
	}
}

?>
               </form>
			   </div>
			   
			   
               </div>
              
			   </div>
			   </section>
			  <?php include("footer.php"); ?>			   </body>
</html>