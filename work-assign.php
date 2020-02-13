<?php
error_reporting(0);
session_start();

if ($_SESSION["user"]=="")
	{
	?>
	<script type="text/javascript">
	window.location="index.php";
	</script>
	<?php
}
else if($_SESSION["usertype"]!='Agent')
{
	?>
	<script type="text/javascript">
	window.location="pickup.php";
	</script>
	<?php
}
$user = $_SESSION["user"];
//$user1 = $_SESSION["mobile"];
 

?>
<?php
include "dbconfig/config.php";
		if(isset($_POST['submit-btn']))
		
			{
			//echo '<script type="text/javascript">alert("Sign Up successful")</script>';
			
			//database variables
			
			$Title = $_POST['Title'];
			$mob_no = $_POST['mob_no'];
			$Agentname = $_POST['Agentname'];
			$SDATE = $_POST['SDATE'];
			$STIME =$_POST['STIME'];
			$EDATE=$_POST['EDATE'];
			$ETIME=$_POST['ETIME'];
			$WORK=$_POST['WORK'];
			
							$query="INSERT into work values('','$Title','$mob_no','$Agentname','$SDATE','$STIME','$EDATE','$ETIME','$WORK')";
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
			

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>DELIVERY STATUS</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!---------------------------------------------------------------------------------------------------->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-------------------------------------------------------------------------------------------------------------->
		
	</head>
	
	<body class="description">

<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">Smart Couries System<i class="fa fa-envelope" style="font-size:24px"></i></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<section class="cta">
      <div class="cta-content">
<div class="container assignment">
	<div class="row">
					<div class="col-md-12 status-tt">
					<h1 align="center" class="hed">CREATE WORK ASSIGNMENT</h1>
<form name="work-assignment" action="" method="post" class="work-form">
<div class="row submit-form">
		<div class="col-md-5 ">
					<div class="form-group">
									<label for="Title">Title</label>
										<input type="text" class="form-control" id="Title" name="Title" placeholder="Please Enter A Title" required/>
							</div>
					<div class="form-group">
									<label for="Title">Mobile Number</label>
                                            <input name="mob_no" pattern="[7-9]{1}[0-9]{9}" type="text" minlength="10" maxlength="10"  class="form-control" placeholder="Your Phone *" value="" required/>
                                        </div>
				
						<div class="row zzz">
							<div class="col-md-12">
									<div class="form-group">
										<label for="sel1">Select Agent:</label>
											<select class="form-control" id="sel1" name="Agentname" required/>
													<option disabled selected value>~~Agents~~</option>
													<option>Vijay</option>
													<option>Swapnil</option>
													<option>Dinesh</option>
													<option>Nikhil</option>
											</select>
								</div>
							</div>
						</div>
						
						<h4> PICKUP TIME</h4>
					<div class="row datz">
						<div class="col-md-6">
							<div class="form-group">
									<label for="DATE">DATE:</label>
										<input type="DATE" class="form-control" id="DATE"  name="SDATE" placeholder="DD/MM/YYYY" required/>
							</div>
						</div>
					
					

					<div class="col-md-6">
							<div class="form-group">
							
									<label for="TIME">TIME:</label>
										<input type="TIME" class="form-control" id="TIME"  name="STIME" placeholder="00:00"required/>
							</div>			
					</div>	
				</div>
				<h4> DELIVERED TIME</h4>
					<div class="row yyy">
						<div class="col-md-6">
		
							<div class="form-group">
									<label for="DATE">DATE:</label>
										<input type="DATE" class="form-control" id="DATE"  name="EDATE" placeholder="DD/MM/YYYY" required/>
							</div>
						</div>
					
					
						<div class="col-md-6">
							<div class="form-group">
									<label for="TIME">TIME:</label>
										<input type="TIME" class="form-control" id="TIME"  name="ETIME" placeholder="00:00" required/>
							</div>			
						</div>
					</div>	
				
				
					
								
										<div class="col-md-12>
													<div class="form-group">
														<label for="comment">WORK DISCRIPTION</label>
															<textarea class="form-control" rows="5" id="DISCRIPTION" name="WORK"></textarea>
													</div>
										
									
						<div class="col-md-7">
						<div class="make-it">
							<input type="submit" class="btn btn-danger" value="Save" name="submit-btn">
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
			</form>
		</div>
	</div>
	 <div class="overlay"></div>
    </section>
<footer>
      <div class="container">
        <p class="footer1">&copy; Your Website 2018. All Rights Reserved.</p>
        <ul class="list-inline">
          <li class="list-inline-item">
            <a class="footer1" href="index.php">Home</a>
          </li>
          <li class="list-inline-item">
            <a class="footer1"href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </footer>

</body>
</html>

