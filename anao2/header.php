
<html>
<head>
<title>Anao.com</title>
<link href='css/header.css' rel='stylesheet' type='text/css'>

</head>
<body>
      <div id='wrapper'>
	  <div id='header'>
	  <div id='subheader'>
      <div class='container'>
	        <p><marquee direction="right"> welcome <?php echo $name; ?></marquee></p>
       	   <a href='confirCart.php'>Confirm Products</a>
		   <a href='showTraveler.php'>Show traveler</a>
		  
		   
       </div>
	   </div>
	   <!--mainheader-->
	   <div id='main-header'>
	       <!--logo-->
	   <div id='logo'>
	       <span id='ist'>Anao</span><span id='iist'>.com</span>
	   </div>
	   <div id='search'>
	   <form method='post' action='search.php' >
	       <input class='search-area' type='text' name='searchText' placeholder='Product_Name'>
            <input class='search-btn' type='submit' name='submit'	value='SEARCH'>	   
	   </form>
	   </div>
	   <div id='user-menu'>
	     <li><a href='showCart2.php'>Cart</a></li>
		  <li><a href='logout.php'>Log out</a></li>
          		 
		   </div>
		</div>
		</div>
		<div id='navigation'>
		<nav>
		
		<a href='customer.php'>Home</a>
		<a href='showCategory.php?cat=1'>Electronics</a>
		<a href='showCategory.php?cat=2'>Watches</a>
		<a href='showCategory.php?cat=3'>Books</a>
		<a href='showCategory.php?cat=4'>Video games</a>
		<a href='showCategory.php?cat=5'>Cosmetics</a>
		</nav>
		
	   </div>
	   </div>