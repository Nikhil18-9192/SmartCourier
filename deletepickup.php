<?php 
include "dbconfig/config.php";
	$id=$_GET['id'];
	$query="DELETE FROM pickup WHERE id='$id'";
	$data=mysqli_query($con,$query);
		if($data)
		{
			
			echo'<script type="text/javascript">alert("Your data has been deleted Sucessfully")</script>';
		
		?>
		<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/smart-courier/pickupadmin.php">
	<?php
		}
		else
		{
			echo'<script type="text/javascript">alert("Sorry could not Delete data")</script>';
		}
?>