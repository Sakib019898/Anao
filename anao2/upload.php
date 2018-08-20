<?php
include("connection.php");

$name=$_POST['name'];
$amount=@$_POST['amount'];
$price=@$_POST['price'];
$description =@$_POST['description'];
$cat=@$_POST['radio'];


if(isset($_POST['submit']) && $name && $amount && $price && $description && $cat  ){
$file=$_FILES['file'];
$fileName=$_FILES['file']['name'];
$fileTmpName=$_FILES['file']['tmp_name'];
$fileSize=$_FILES['file']['size'];
$fileError=$_FILES['file']['error'];
$fileType=$_FILES['file']['type'];
$fileExt=explode('.',$fileName);
$fileActualExt= strtolower(end($fileExt));
$allowed=array('jpg','jpeg','png','bmp');
if(in_array($fileActualExt,$allowed)){
    if($fileError===0){
        if($fileSize <  1000000){
		$fileNameNew=uniqid('',true).".".$fileActualExt;
		$fileDestination='images/'.$fileNameNew;
		move_uploaded_file($fileTmpName,$fileDestination); 
		          $sql = "INSERT INTO products(cat_id,product_name,amount,price,description,pic)
				VALUES ($cat,'$name',$amount,$price,'$description','$fileNameNew')";

				$result=mysqli_query($conn,$sql);
				header("Location: admin.php");
		}
		else{
		   echo"Your file is too big!";
		}
    }
	else{
     echo"There is an error in uploading file!";
    }
} 
else{

echo"you cannot upload this type of file!";

}


}
else echo"Fill up all the form First";
	





?>