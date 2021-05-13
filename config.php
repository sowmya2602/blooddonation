<?php 

// $con=new mysqli("localhost","root","","blood_bank");
 $con=new mysqli("remotemysql.com","4ubnYsQI4i","hueZrhbQ4L","4ubnYsQI4i");

if($con->connect_error)
{
	echo "Database Connection Failed";
}

?>
