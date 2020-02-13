<?php

session_start();

if ($_SESSION["user"]=="")
	{
	?>
	<script type="text/javascript">
	window.location="index.php";
	</script>
	<?php
}
else if($_SESSION["usertype"]!='user')
{
	?>
	<script type="text/javascript">
	window.location="pickup.php";
	</script>
	<?php
}
$user = $_SESSION["user"];
$user1 = $_SESSION["mobile"];
 
 
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>CASH PAYMENT</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<!--<link rel="stylesheet" type="text/css" href="style.css">-->
	<!---------------------------------------------------------------------------------------------------->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-------------------------------------------------------------------------------------------------------------->
	<style>
	
.final{
    padding: 3%;
    margin-top: 3%;
    font-family: Times New Roman;
    font-weight: bold;
    text-align: center;
}
	*{
    background: #f3f1f1;
}
.description{
    background: #f3f1f1;
}
	</style>	
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
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="pickup.php">Back To Pickup</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	<div class="container final">
	<h1>ThankYou For Using Our Smart-Courier System</h1>
		<h2> Our Courier Boy Will Get To Your Address Soon</h2>
			<h2>For Further Work.</h2>
			</div>