<?php
$con = mysqli_connect("localhost","root","","pharmacy");
if(! $con ) {
	die('Could not connect: ' . mysqli_error());
 }
    
mysqli_select_db($con,"pharmacy") 
    or die("database not found");


?>