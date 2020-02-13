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
 
include "dbconfig/config.php";

$sql="select * from work where mob_no='$user1'";
$result=mysqli_query($con,$sql) or die("bad query:$sql");
$row=mysqli_fetch_assoc($result);
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
	<link rel="stylesheet" type="text/css" href="status.css">
	<!---------------------------------------------------------------------------------------------------->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-------------------------------------------------------------------------------------------------------------->
		<style>
				h3.new1 {
    color: black;
}
h3.new2 {
    color: #db0c0cd9;
    font-family: Times New Roman;
    font-weight: 800;
    text-decoration: none;
	font-style: italic;
	text-shadow: 1px 1px black;
}

		</style>
	</head>
<body class="status-page">
			 <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="">Welcome <?php echo $user;?><i class="fa fa-envelope" style="font-size:24px"></i></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="logout.php">logout <i class="fa fa-share"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="feedback.php">Submit-Feedback <i class="fa fa-commenting-o"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="contact_us.php">Contact <i class="fa fa-phone-square"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	
	<section class="cta">
	  <div class="cta-content">
		<div class="container status">
					<div class="row">
					<div class="col-md-12 status-tt">
					<h1 align="center" class="delivery">DELIVERY STATUS</h1>
					
						<content>
							
									<h1 class="titlez"> <?php echo $row['title'] ?></h1>
											<h3 class="cid">Mobile Number</h3>
									<h1 class="idd"> <?php echo $row['mob_no'] ?></h1>	
							<hr><h3 class="new1">AGENTNAME:</h3></hr>
											<h3 class="new2"> <?php echo $row['agent'] ?></h3>
							<h3 class="new1">START TIME:</h3>
											<h3 class="new2"> <?php echo $row['sdate'] ?></h3>
											<h3 class="new2"> <?php echo $row['stime'] ?></h3>
							<h3 class="new1">DELIVERY TIME:</h3>
											<h3 class="new2"> <?php echo $row['edate'] ?></h3>
											<h3 class="new2"> <?php echo $row['etime'] ?></h3>
							<h3 class="new1">WORK DISCRIPTION:</h3>
											<h3 class="new2"> <?php echo $row['work'] ?></h3>
							
					</div>
				</div>
		 	</div>	
		</div>
 </section>
				 <footer>
      <div class="container">
        <p>&copy; Your Website 2018. All Rights Reserved.</p>
        <ul class="list-inline">
          <li class="list-inline-item">
            <a href="index.php">Home</a>
          </li>
          <li class="list-inline-item">
            <a href="#">About</a>
          </li>
          <li class="list-inline-item">
            <a href="#">Contact</a>
          </li>
        </ul>
      </div>
    </footer>

</body>
</html>


