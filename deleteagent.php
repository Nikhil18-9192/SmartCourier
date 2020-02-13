<?php 
include "dbconfig/config.php";
	$Agent_ID=$_GET['Agent_ID'];
	$query="DELETE FROM agent WHERE Agent_ID='$Agent_ID'";
	$data=mysqli_query($con,$query);
		if($data)
		{
			
			echo'<script type="text/javascript">alert("Your data has been deleted Sucessfully")</script>';
		
		?>
		<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/smart-courier/agentadmin.php">
	<?php
		}
		else
		{
			echo'<script type="text/javascript">alert("Sorry could not Delete data")</script>';
		}
?>