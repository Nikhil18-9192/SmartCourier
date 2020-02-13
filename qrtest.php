<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>QR Code Generation</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="courier.css" rel="stylesheet" type="text/css">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">Smart Couries System <i class="fa fa-envelope" style="font-size:24px"></i></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="login1.php">Log-In</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="about.php">About us</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="contact_us.php">Contact us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	<section class="cta">
<div class="container qrcode">
		<div class="row">
			<div class="col-md-12">
				<h2 class="heading" align="center">You Are Sucessfully Register</h2>
				<h3 class="heading" align="center"> Please Log-In To Get Advantages Of Our System</h2>

<?php
//include("header.php");
include('libs/phpqrcode/qrlib.php'); 
//$codeContents=$name." ".$phone;
$codeContents="http://foodfairy.cf/index.php";
$filename=$_GET["username"];
$tempDir = 'temp/'; 
	QRcode::png($codeContents, $tempDir.''.$filename.'.png', QR_ECLEVEL_L, 5);
	echo " <center><img src=temp/".$filename.'.png'.">"."</center>";

?>
	<center><a  href="download.php?file=<?php echo $filename; ?>.png ">Download QR Code</a></center>
</div>	

<div class="overlay"></div>
</section>

<div class="footer">
      <div class="container">
        <p class="footer1">&copy; Your Website 2018. All Rights Reserved.</p>
        <ul class="list-inline">
          <li class="list-inline-item">
            <a class="footer1" href="index.php">Home</a>
          </li>
          <li class="list-inline-item">
            <a class="footer1"href="login1.php">Log-In</a>
          </li>
        </ul>
      </div>
    </div>
	
</body>

</html>

