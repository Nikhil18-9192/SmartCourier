<?php

session_start();
if(isset($_POST['login']))
{
	
$username =$_POST['username'];
$pass=$_POST['pass'];


	if($username&&$pass)
	{
		
		$con = mysqli_connect("localhost","root","") or die("Could not connect!");
		mysqli_select_db($con,"smart_courier") or die("Could not find Database!");
		
		$query = mysqli_query($con,"SELECT * FROM register WHERE username ='$username' AND pass='$pass'");
		
		
		$rows = mysqli_num_rows($query);
	
		if($rows!=0)
		{
			//code to login
			
			while ($row = mysqli_fetch_assoc($query))
			{	
				
				
				$_SESSION["user"]=$row["username"];
				$_SESSION['mobile'] = $row["mob_no"];
				?>
				<script type="text/javascript">
				window.location="work-assign.php";
				</script>
				<?php
				$dbusername = $row['username']; 
				$dbpassword = $row['pass']; 
		
			}
		
			//check to see if they match!
			if($username==$dbusername&&$pass==$dbpassword)
			{
				//echo "You're in! <a href='login.php'>Click</a> here to enter the post page";
				$_SESSION['username']=$dbusername;
				$_SESSION['pass']=$dbpassword;
				//header('Location:Home.php');
			}
			else
				echo "User not Exist";		
		}
		else
		
			die("User not Exist");
	
	}
	else
		die("Please Enter username and password ");
		
}
?> 