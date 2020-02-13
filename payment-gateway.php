 <!DOCTYPE html>
<html lang="en">
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
	window.location="work-assign.php";
	</script>
	<?php

}

$user = $_SESSION["user"];



$user1 = $_SESSION["mobile"];
$final_cost = $_SESSION["pay"];
error_reporting(0);
?>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>pickup request data</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="device-mockups/device-mockups.min.css">

    <!-- Custom styles for this template -->
    <link href="css/new-age.min.css" rel="stylesheet">
	<link href="payment.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <!--<link href="css/style.css" type="text/css" rel="stylesheet">-->
      <script src="js/pickup.js" type="text/javascript"></script>
	<style>
	.payment .col-sm-12 {
    display: inline-block !important;
}
.payment .col-md-9{
    float: left !important;
}
.payment .col-md-3{
    float: right !important;
}
</style>
	</head>
<body class="pay" id="pickz">
         <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">Smart Couries System <i class="fa fa-envelope" style="font-size:24px"></i></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse"  id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link js-scroll-trigger" href="status.php">check-status <i class="fa fa-file"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="about.php">About <i class="fa fa-envelope-open"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="contact.php">Contact <i class="fa fa-phone-square"></i></a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">Home <i class="fa fa-home" aria-hidden="true"></i></a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="logout.php">logout <i class="fa fa-share" aria-hidden="true"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<section class="paymentz">
    <div id="all">

        <div id="content">
            <div class="container payment">

	<div class="col-sm-12 zfc">
                <div class="col-md-9" id="checkout">

                    <div class="box">
                        <form method="post">
                            <h1>Checkout - Payment method</h1>
								
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="box payment-method">

                                            <h4>Paypal</h4>

                                            <p>We like it all.</p>

                                            <div class="box-footer text-center">

                                                <input type="radio" onClick="window.location='paypal.php';" name="payment" value="payment1" checked>
                                            </div>
                                        </div>
                                    </div>
                                    

                                    <div class="col-sm-6">
                                        <div class="box payment-method">

                                            <h4>Cash on delivery</h4>

                                            <p>You pay when you get it.</p>

                                            <div class="box-footer text-center">

                                                <input type="radio" onClick="window.location='cash.php';" name="payment" value="payment3" checked>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->

                            </div>
                            <!-- /.content -->

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="checkout3.php" class="btn btn-info"><i class="fa fa-chevron-left"></i>Back to Pickup Request</a>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->


                </div>
                <!-- /.col-md-9 -->
	
                <div class="col-md-3">
					
                    <div class="box" id="order-summary">
                        <div class="box-header">
                            <h3>Order summary</h3>
                        </div>
                        <p class="text-muted">Your order price after calculated you have to pay following amount</p>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                   
                                    
                                    <tr class="total">
                                        <td>Total</td>
                                        <th>₹<?php echo $final_cost;?></th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
                <!-- /.col-md-3 -->
	</div>
            </div>
		
            <!-- /.container -->
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