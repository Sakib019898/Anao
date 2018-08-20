<?php
include("admin.php");
?>
<form  action='upload.php' method='post' enctype='multipart/form-data'>
			   
			   
			   <input type="radio" name="radio" value="1" checked>Electronics
               <input type="radio" name="radio" value="2">Watches
               <input type="radio" name="radio" value="3">Books
			   <input type="radio" name="radio" value="4">Video games
               <input type="radio" name="radio" value="5">Cosmetics
              
			  
			  </br> <label>Product Name</label>
			   <input type='text' name='name' id='name' class='txtfield' placeholder='PRODUCT_NAME' tabindex='1' autocomplete='off'>
               
			   </br><label>Amount</label>
               <input type='text' name='amount' id='amount' class='txtfield' placeholder='AMOUNT' tabindex='2' autocomplete='off'>
               
			   </br><label>Price</label>
			   <input type='text' name='price' id='price' class='txtfield' placeholder='PRICE' tabindex='3' autocomplete='off'>
               
			   </br><label>Description</label>
			   <input type='text' name='description' id='description' class='txtfield2' placeholder='DESCRIPTION' tabindex='4' autocomplete='off'>
			   
			  </br>
			  <div id='diff'>
              <input type='file' name='file'>
			  
			  </div>
			 
			 <input type='submit' name='submit' id='submitlogin' class='btn' tabindex='5'>
			 
</form>


</body>






</html>