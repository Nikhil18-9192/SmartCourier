<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet"  href="addagent.css">
	</head>
<body id="AGENTS" class="Agents">

<h1 class="agent1" align="center">AGENTS INFO</h1>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      
        
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="logout.php">Logout</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="registeradmin.php">Users</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="agentadmin.php">Agents</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="pickupadmin.php">Pick-up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="feedbackadmin.php">Feedback</a>
            </li>        
          </ul>
        </div>
     
    </nav>
	<div class="container Agents">
			
		<div class="row zzz">
				<div class="col-md-12">
				
				<form action="" method="post">
				<div class="row submit-form">
					<div class="col-md-6">
							<div class="form-group">
									<label for="AGENT">Agent Name</label>
										<input type="text" class="form-control" id="AGENT" name="agentname" placeholder="Enter Agent Name" required/>
							</div>
						
				
							<div class="form-group">
									<label for="STATE">Agent_ID</label>
										<input type="number_format" minlength="5" maxlength="5"  class="form-control" id="number" name="agentid" placeholder="Enter Agent Id" required/>
							</div>
							
							<div class="form-group">
									<label for="EMAIL">e-mail</label>
										<input type="email" class="form-control" pattern="[^ @]*@[^ @]*" placeholder="Enter your email" id="EMAIL" name="email"required/>
										
							</div>
						
							<div class="form-group">
									<label for="PHONE">Phone</label>
										<input type="number_format" class="form-control" pattern=[7-9]{1}[0-9]{9} minlength="10" maxlength="10" id="number" name="phoneno" placeholder="Enter your phone number"required/>
							</div>
							<div class="form-group">
									<label for="username">username</label>
										<input type="text" class="form-control"  id="number" name="username" placeholder="Enter your username"required/>
							</div>
							<div class="form-group">
									<label for="password">password</label>
										<input type="password" class="form-control"  id="number" name="pass" placeholder="Enter your password"required/>
							</div>
							
							<div class="form-group">
									<label for="conform password">Conform Password</label>
										<input type="password" class="form-control"  id="number" name="cpass" placeholder="Conform your password"required/>
							</div>
							
							<div class="row button">
									<div class="col-xm-6">
											<div class="make-it">
							<input type="submit" class="btn btn-primary" value="Submit" name="submit-btn">
											</div>
									</div>
							<div class="col-xm-6">
									<div class="done">
							<input type="reset" class="btn btn-warning" value="reset" name="submit-btn">
									</div>
							</div>
					</div>	
					
							
			</div>	
			<div class="col-md-6 image-right">
										<div class="col-md-12 done">
									<img src="img/fast.jpg" alt="" class="center"/>
										</div>
								</div>
				</div>
	</div>	
</div>	
</div>
				</form>
<div class="footer">
  <p>&copy; Your Website 2018. All Rights Reserved.</p>
  <ul class="list-inline">
          <li class="list-inline-item">
            <a href="admin.php">Home</a>
          </li>
          <li class="list-inline-item">
            <a href="registeradmin.php">Users</a>
          </li>
		  <li class="list-inline-item">
            <a href="agentadmin.php">Agents</a>
          </li>
		   <li class="list-inline-item">
            <a href="pickupadmin.php">Pick-up</a>
          </li>
          <li class="list-inline-item">
            <a href="feedbackadmin.php">Feedback</a>
          </li>
		  <li class="list-inline-item">
            <a href="logout.php">Logout</a>
          </li>
        </ul>
</div>				
				
</body>
</html>

	<?php 
	include "dbconfig/config.php";
	
	if(isset($_POST['submit-btn']))
	{
			$name=$_POST['agentname'];
			$agentid=$_POST['agentid'];
			$email=$_POST['email'];
			$phoneno=$_POST['phoneno'];
			$username=$_POST['username'];
			$pass=$_POST['pass'];
			$cpass=$_POST['cpass'];
		
			

			$query="SELECT * from agent WHERE Agent_ID=$agentid && usertype='Agent'";
				$query_run=mysqli_query($con,$query);
				
				$rows=mysqli_num_rows($query_run);
				
				if($rows>0)
				{
					echo'<script type="text/javascript">alert("This ID already Belongs to Agent")</script>';
				}
				else
				{
		


		$sql="INSERT into agent values('$name','$agentid','$email','$phoneno','$username','$pass','$cpass','Agent')";
		$res=mysqli_query($con,$sql);

		if($res)
		{
			echo"<script>alert('Add emplyee  sucessfully');window.location='add_agent.php'</script>";
		}
		else
		{
			echo"<script>alert('emplyee insert error');window.location='add_agent.php'</script>";

		}
				}

	}
	?>


