<?php
session_start();
include "dbconfig/config.php";
$user=$_SESSION["user"];
$pay=$_SESSION["pay"];
//this is for getting record from temp table to permanant table
$query="SELECT * from pickup WHERE sname='$user'";
if($query_run=mysqli_query($con,$query))
	
	{
//this is for getting record from temp table to permanant table
$query="UPDATE pickup SET Payment_success='Cash at Pickup Time' WHERE fcost='$pay'";
if($query_run=mysqli_query($con,$query))
{
	echo '<script type="text/javascript">alert("Please Pay The Requested Amount To Our Agent!! At Pickup Time")</script>';
	
}
else{
	
	echo '<script type="text/javascript">alert("Error!!")</script>';
}


	}
//now need to get permanant table order id

?>

<script type ="text/javascript">setTimeout(function(){window.location="final.php";},2000);</script>