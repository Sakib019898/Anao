<?php
include("connection.php");
session_start();
            



?>
<html>
<head>
<title>Anao.com</title>
<link href='css/jquery.bxslider.css' rel='stylesheet' type='text/css'>
<link href='css/style.css' rel='stylesheet' type='text/css'>

</head>
<body>
      <div id='wrapper'>
	  <div id='header'>
	  <div id='subheader'>
      <div class='container'>
	        <p><marquee direction="right"> Welcome to Anao</marquee></p>
       	   <a href='#'>About us</a>
		   <a href='#'>About traveler</a>
		   <a href='#'>About products</a>
		   
       </div>
	   </div>
	   <!--mainheader-->
	   <div id='main-header'>
	       <!--logo-->
	   <div id='logo'>
	       <span id='ist'>Anao</span><span id='iist'>.com</span>
	   </div>
	   <div id='search'>
	   <form method='post' action='login.php' >
	       <input class='search-area' type='text' name='text' placeholder='Search here'>
            <input class='search-btn' type='submit' name='submit'	value='SEARCH'>	   
	   </form>
	   </div>
	   <div id='user-menu'>
	     <li><a href='sign_up.php'>Sign up</a></li>
		 <li><a href='login.php'>Login</a></li>
          		 
		   </div>
		</div>
		</div>
		<div id='navigation'>
		<nav>
		
		<a href='login.php'>Home</a>
		<a href='login.php'>Electronics</a>
		<a href='login.php'>Watches</a>
		<a href='login.php'>Books</a>
		<a href='login.php'>Video games</a>
		<a href='login.php'>Cosmetics</a>
		</nav>
		
	   </div>
	   <!---slider--->
	   <div id='slider'>
	   <ul class='bxslider'>
	      <li><img src='images/img1.png'</li>
		  <li><img src='images/img2.png'</li>
		  <li><img src='images/img3.png'</li>
		  <li><img src='images/img4.png'</li>
		  <li><img src='images/img5.png'</li>
	   </ul>
	   </div>
	   </div>
	   <div class='prod-container'>
	   	<?php     
		        
	           $sql = "SELECT * FROM products";
       
   	                $result=mysqli_query($conn,$sql);

	                     while($row=mysqli_fetch_assoc($result)){
							 ?>
		                         <form action='sign_up.php?'>
								 <div class='prod-container-part'>
								 <div class='prod-box'>
								 <img src='images/<?php echo $row['pic']; ?>'  alt='man suit'>
								 <div class='prod-trans'>
			                        <div class='prod-feature'>
								       <p><?php echo $row['product_name']; ?></p>
									   <p style='color:#fff;font-weight:bold;'>Price : $ <?php echo $row['price']; ?></p>
									   <button type='submit' name=
									   '<?php echo $cart[$i++] ?>' value='<?php echo $row['product_name']; ?>'>Add to cart</button>
						               <button type='submit' name='<?php echo $cart[$i++] ?>' value='<?php echo $row['product_name']; ?>'>Buy Now</button>
									   </div>
									   </div>
									   </div>
									   <div class='info'> 
									   <p style='color:black; padding-top:2px;padding-left:3px;'>Description : <?php echo $row['description']; ?></p>
									   </div>
									   </form>
									   </div><?php
		                
						 }
						
            
			   ?>
			
						 
						 
						 
						 
						 
			<div id='footer'>
			  <div class='footerSub1'>
			       <img class='footer-image' src='images/anao.png'>
				   <p style='color:black; font-size:25px; padding-top:2px; font-weight:bolder;'>Hot Line: THU-FRI, 10AM - 10PM</p>
            	  <p style='color:black; font-size:25px; padding-top:-10px; '>+880 1665989562476</br>+880 1732184542135</p>
			  </div>
			  <div class='footerSub2'>
			    
				<h1>Developers</h1>
				<p style='font-size:20px;'>Sakib Ahmed</br>Shamit Ahmed</br>Sofia Neherin</br>Humayra Alam Nuha</br>Dhaka,Bangladesh-1219</br>Bangladesh</p>
				<p  style='font-size:20px;'><a href='https://www.facebook.com/sawkyieb.khan'>Or click here</a>
				
			  </div>
			  <div class='footerSub2'>
			    
				<h1>Contact us</h1>
				<p style='font-size:20px;'>Sakib019898@gmail.com</br>01989863922</br>shamit@yahoo.com</br>0173859541256</br>Neherin@outlook.com</br>01989365742</br>RoboAlam@cloud.com</br>01875412987453</p>
				
			  </div>
			  
			</div>
			
	   <script
      src="http://code.jquery.com/jquery-2.2.4.js"
      integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
      crossorigin="anonymous"></script>
		   <script src='js/jquery.bxslider.min.js'></script>
		   <script src='js/my.js'></script>
</body>
</html> 