<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$db='anao';
$conn=new mysqli($dbhost,$dbuser,$dbpass,$db);
//check connection 
if($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
}



?>