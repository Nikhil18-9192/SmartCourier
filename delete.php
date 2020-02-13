<?php 
include "dbconfig/config.php";
	$mob_no=$_GET['mob_no'];
	$query="DELETE FROM register WHERE mob_no='$mob_no'";
	$data=mysqli_query($con,$query);
		if($data)
		{
			
			echo'<script type="text/javascript">alert("Your data has been deleted Sucessfully")</script>';
		
		?>
		<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/smart-courier/registeradmin.php">
	<?php
		}
		else
		{
			echo'<script type="text/javascript">alert("Sorry could not Delete data")</script>';
		}
?>