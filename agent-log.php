<?php
include "dbconfig/config.php";

session_start();
if(isset($_POST['login']))
{
	
	
$username =$_POST['Ausername'];
$pass=$_POST['Apass'];



	if($username&&$pass)
	{
		
		$con = mysqli_connect("localhost","root","") or die("Could not connect!");
		mysqli_select_db($con,"smart_courier") or die("Could not find Database!");
		
		$query = mysqli_query($con,"SELECT * FROM agent WHERE username ='$username' AND password='$pass' AND usertype='Agent'");
		
		
		$rows = mysqli_num_rows($query);
	
		if($rows!=0)
		{
			//code to login
			
			while ($row = mysqli_fetch_assoc($query))
			{	
				
				
				$_SESSION["user"]=$row["username"];
				$_SESSION["mobile"]=$row["phone"];
				$_SESSION["usertype"]=$row["usertype"];
				?>
				<script type="text/javascript">
				window.location="work-assign.php";
				</script>
				<?php
				$dbusername = $row['username']; 
				$dbpassword = $row['pass']; 
				$_SESSION["usertype"]=$row["usertype"];
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
				echo "admin not Exist";		
		}
		else
		
			die("admin not Exist");
	
	}
	else
		die("Please Enter valid username and password ");
		
}
?> 