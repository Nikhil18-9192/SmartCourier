<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Log-In</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="device-mockups/device-mockups.min.css">

    <!-- Custom styles for this template -->
    <link href="css/new-age.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</head>

  <body id="page-top" class="register-page">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">Smart Couries System</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="register.php">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="contact_us.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="cta">
      <div class="cta-content">
        
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p> Please login correctly to access</p>
                        
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">user login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">agent login</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Log-in</h3>
                                <div class="row register-form">
									<form method="post" action="user-log.php">
										<div class="col-sm-6">
                                        <div class="form-group">
                                            <input name="username"  type="text" class="form-control" placeholder="username *" value="" required/>
                                        </div>
                                        </div>
                                        <div class="col-sm-6">
                                        <div class="form-group">
                                            <input name="pass" type="password" class="form-control" placeholder="password *" value="" required/>
                                        </div>
                                            <div class="form-group">
                                            <input type="submit" name="login1" class="btnRegister"  value="Log"/>
                                            </div>
                                        </div>
										 </form>
                                                                   </div>
                            </div>
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Log-In</h3>
                                <div class="row register-form">
								<form action="agent-log.php" method="post">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="Ausername"class="form-control" placeholder="agent id *" value="" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" name="Apass" class="form-control" placeholder="Password *" value="" required/>
                                        </div>
                                        
                                        <input type="submit" name="login"class="btnRegister"  value="Log-In"/>
                                    </div>
									</form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
      </div>
      <div class="overlay"></div>
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

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/new-age.min.js"></script>

  </body>

</html>
