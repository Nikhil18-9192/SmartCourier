<?php
session_start();
if($_SESSION["user"]=="")
{
	?>
	<script type="text/javascript">
	window.location="index.php";
	</script>
	<?php
}
$user = $_SESSION["user"];
$user1 = $_SESSION["mobile"];
 
 
?>
<?php
include "dbconfig/config.php";
		if(isset($_POST['submit-btn']))
		
			{
			//echo '<script type="text/javascript">alert("Sign Up successful")</script>';
			
			//database variables
			
			$name = $_POST['name'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$optradio = $_POST['optradio'];
			$radio2 =$_POST['radio2'];
			$radio3=$_POST['radio3'];
			$radio4=$_POST['radio4'];
			
			$query="SELECT * from feedback WHERE email='$email'";
				$query_run=mysqli_query($con,$query);
				
				$rows=mysqli_num_rows($query_run);
				
				if($rows>0)
				{
					echo'<script type="text/javascript">alert("This email is already Taken")</script>';
				}
				else
				{
			
							$query="INSERT into feedback values('','$name','$email','$phone','$optradio','$radio2','$radio3','$radio4')";
					$query_run=mysqli_query($con,$query);
					
					 if ($query_run==1)
					{
						
						
						echo'<script type="text/javascript">alert("Data Entered Successfully")</script>';
					}
					
					else
					{
						echo '<script type="text/javascript">alert("Error!!")</script>';
					}
				}	
			}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>FEEDBACK</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="feedback.css">
<!--===============================================================================================-->
</head>
<body>
		<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      
        
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="logout.php">Logout <i class="fa fa-share" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="contact_us.php">Contact</a>
            </li>
          </ul>
        </div>
     
    </nav>

	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="post">
				<span class="contact100-form-title">
					FEEDBACK
				</span>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">FULL NAME *</span>
					<input class="input100" type="text" name="name" placeholder="Enter Your Name">
				</div>

				<div class="wrap-input100 validate-input bg1" data-validate = "Enter Your Email (e@a.x)">
					<span class="label-input100">Email *</span>
					<input class="input100" type="text" name="email" placeholder="Enter Your Email ">
				</div>

				<div class="wrap-input100 validate-input bg1" data-validate= "Enter your Number">
					<span class="label-input100">phone NO.</span>
					<input class="input100" type="text" name="phone" placeholder="Enter Number Phone">
				</div>
				
				
	<div class="form-group">	
		<span class="label-input101">how was your experience?</span>
			<label class="radio-inline">
				<input type="radio" name="optradio" id="optradio" value="Bad" required/>bad
			</label>
			<label class="radio-inline">
				<input type="radio" name="optradio" id="optradio" value="Average" required/>average
			</label>
			<label class="radio-inline">
				<input type="radio" name="optradio" id="optradio" value="Good" required/>Good
			</label>
			<label class="radio-inline">
				<input type="radio" name="optradio" id="optradio" value="Very Good"required/>very Good
			</label>
			<label class="radio-inline">
				<input type="radio" name="optradio" id="optradio" value="Excellent" required/>Excellent
			</label>
	</div>
		
	<div class="form-group">		
		<span class="label-input101">How do you rate our website overall?</span>
			<label class="radio-inline">
				<input type="radio" name="radio2" id="hello" value="Bad">bad
			</label>
			<label class="radio-inline">
				<input type="radio" name="radio2" id="hello" value="Average">average
			</label>
			<label class="radio-inline">
				<input type="radio" name="radio2" id="hello" value="Good">Good
			</label>
			<label class="radio-inline">
				<input type="radio" name="radio2" id="hello" value="Very Good">very Good
			</label>
			<label class="radio-inline">
				<input type="radio" name="radio2" id="hello" value="Excellent">Excellent
			</label>
	</div>	
	<div class="form-group">
		<span class="label-input101">is our website user friedly?</span>
			<label class="radio-inline">
				<input type="radio" name="radio3" id="hey" value="Yes">Yes
			</label>
			<label class="radio-inline">
				<input type="radio" name="radio3" id="hey" value="NO">NO
			</label>
	</div>
	<div class="form-group">
		<span class="label-input101">is information provide on our website enough?</span>
			<label class="radio-inline">
				<input type="radio" name="radio4" id="zzz" value="Yes">Yes
			</label>
			<label class="radio-inline">
				<input type="radio" name="radio4" id="zzz" value="NO">NO
			</label>
	</div>
			     <div class="container-contact100-form-btn">
					<button class="contact100-form-btn" name= "submit-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>



<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->


	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->

	
<!--===============================================================================================-->
	<script src="js/main.js"></script>


</body>
</html>

