<?php 

// $con=new mysqli("localhost","root","","blood_bank");
 $con=new mysqli("remotemysql.com","9m7dJyxRoZ",,"","9m7dJyxRoZ");

if($con->connect_error)
{
	echo "Database Connection Failed";
}

?>
