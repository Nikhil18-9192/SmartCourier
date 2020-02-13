<?php

include "dbconfig/config.php";
		if(isset($_POST['reg-but']))
		{
			//echo '<script type="text/javascript">alert("Sign Up successful")</script>';
			
			//database variables
			
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$mob_no = $_POST['mob_no'];
			$username =$_POST['username'];
			$pass=$_POST['pass'];
			$cpass=$_POST['cpass'];
			
			
			if($pass==$cpass)
			{
				$query="SELECT * from register WHERE username='$username' && usertype='user' ";
				$query_run=mysqli_query($con,$query);
				
				$rows=mysqli_num_rows($query_run);
				
				if($rows>0)
				{
					echo'<script type="text/javascript">alert("You are already registed please log in")</script>';
				}
				else
				{
					$query="INSERT into register values('','$fname','$lname','$mob_no','$username','$pass','$cpass','user')";
					$query_run=mysqli_query($con,$query);
					
					if($query_run==1)
					{
						//echo'<script type="text/javascript">alert("You are successful registered")</script>';
						header("location: qrtest.php?username=$username");
					}
					
					else
					{
						//echo '<script type="text/javascript">alert("Error!!")</script>';
					}
					
				}
				
			}
			
			else
			{
				echo'<script type="text/javascript">alert("Incorrect password")</script>';
			}
				
			
			
		}
?>
