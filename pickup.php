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
$id = $_SESSION["id"];
$user1 = $_SESSION["mobile"];
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
	<link href="pickup.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <link href="css/pickup.css" type="text/css" rel="stylesheet">
      <script src="js/pickup.js" type="text/javascript"></script>
	  
<script type="text/javascript">	  
 function populate(s1,s2){
	 var s1 = document.getElementById(s1);
	 var s2 = document.getElementById(s2);
	  s2.innerHTML = "";
	  if(s1.value == "kolhapur"){
		var optionArray = ["|","Shivaji peth|Shivaji peth","Tarabai Park|Tarabai Park","Mali Colony|Mali Colony","Rajendra Nagar|Rajendra Nagar","Rk Nagar|Rk Nagar"];
	  }
	else if(s1.value == "sangli"){
		var optionArray = ["|","Mangalmurthi Colony|Mangalmurthi Colony","khanbag|Khanbag","anand nagar|Anand Nagar","padmavati Colony|Padmavati Colony","Hanuman Nagar|Hanuman Nagar"];
	  }else if(s1.value == "satara"){
		var optionArray = ["|","khed|Khed ","sambarvadi|Sambarvadi","Karanje Turf|Karanje Turf","khavali|Khavali","Kaloshi|Kaloshi"];
	  }
	  for (var option in optionArray){
		var pair = optionArray[option].split("|");
	    var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	  }
 }	 
</script>	  
	</head>
<body class="pickup" id="pickz">
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
<section class="pickupz">
<div class="container">
	 <div class="col-md-9 zcz">
        <div class="row">
           
             <form method="post" enctype='multipart/form-data'>
                 
<div class="Table-senders"> 
    <div class="Heading">
        <div class="head">
            <p class="headz">SENDERS INFORMATION</p>
        </div>
        <div class="Cell">
            <p> </p>
        </div>
    </div>
    <div class="Row">
                    <div class="Cell">
                        <p><b>sender name:</b></p>
                        </div>
                        <div class="Cell">
                    <p><input type="text" id="sname" disabled="disabled" name="sname" class="form-control" placeholder="Enter name" onchange="validatename();" onfocus="val();"  value="<?php echo $user;?>"required/></p>
                    </div>
    </div>
    <div class="Row">
        <div class="Cell">
            <p><b>address:</b></p>
                        </div>
         <div class="Cell">
                    <p><textarea id="add" name="add" class="form-control" placeholder="Enter Addrress" onclick="addr();" row="1" cols="20" required/></textarea></p>
                         </div>
         
    </div>
    <div class="Row">
    <div class="Cell">
        <p><b>phone:</b></p>
                        </div>
          <div class="Cell">
                    <p><input type="text" id="phn" disabled="disabled" class="form-control" name="phn" value="<?php echo $user1;?>" placeholder="Enter number" onchange="validatephn();" onclick="valph();" required/></p>
                    </div>
    </div>
    <div class="Row">
    <div class="Cell">
        <p><b>city:</b></p>
                        </div>
        <div class="Cell">
         <p><select name="city" class="form-control" id="city" onchange="populate(this.id,'area')" required>
		 <option disabled selected value>~~City~~</option>
        <option value="kolhapur">kolhapur</option>
        <option value="sangli">sangli</option>
		<option value="satara">Satara</option>
            </select></p>
        </div>
    </div>
     <div class="Row">
    <div class="Cell">
        <p><b>area:</b></p>
                        </div>
         <div class="Cell">
         <p><select name="area" class="form-control" id="area"required>
           <option disabled selected value>~~Area~~</option>
		   </select></p>
		   </select></p>
         </div>
    </div>
    <div class="Row">
    <div class="Cell">
        <p><b>agent:</b></p>
                        </div>
        <div class="Cell">
        <p><select name="agent" class="form-control" required>
		<option disabled selected value>~~Agents~~</option>
        <option value="nikhil">Nikhil</option>
        <option value="dinya">dinesh</option>
        <option value="swapnil">swapnil</option>
        <option value="vijya">vijay</option>
            </select>
            </p>
        </div>
    </div>
    </div>
	
        <div class="Table-recivers"> 
    <div class="Heading">
        <div class="head">
            <p class="headz">RECIEVERS INFORMATION</p>
        </div>
        <div class="Cell">
            <p> </p>
        </div>
    </div>
    <div class="Row">
                    <div class="Cell">
                        <p><b>reciever name:</b></p>
                        </div>
                        <div class="Cell">
                    <p><input type="text" id="rname" class="form-control" name="rname" onchange="valname();" onclick="valrnm();" placeholder="Enter name" required/></p>
                    </div>
    </div>
    <div class="Row">
        <div class="Cell">
            <p><b>address:</b></p>
                        </div>
         <div class="Cell">
                    <p><textarea id="rad" name="radd" class="form-control" placeholder="Enter Addrress" onclick="raddr();" row="1" cols="20"  required/> </textarea></p>
                         </div>   
         
    </div>
    <div class="Row">
    <div class="Cell">
        <p><b>phone:</b></p>
                        </div>
          <div class="Cell">
                    <p><input type="text" id="rphn" name="rphn" placeholder="Enter number" class="form-control" pattern="[7-9]{1}[0-9]{9}" maxlength="10" minlength="10" onchange="valphn();" onclick="valrph();" required/></p>
                    </div>
    </div>
    <div class="Row">
    <div class="Cell">
        <p><b>city:</b></p>
                        </div>
        <div class="Cell">
         <p><select name="rcity"class="form-control" id="rcity" onchange="recivercity(this.id,'rarea')" required/>
		 <option disabled selected value>~~city~~</option>
        <option value="kolhapur">kolhapur</option>
        <option value="sangli">sangli</option>
		<option value="satara">Satara</option>
            </select></p>
        </div>
    </div>
     <div class="Row">
    <div class="Cell">
        <p><b>area:</b></p>
                        </div>
         <div class="Cell">
         <p><select name="rarea" class="form-control" id="rarea">
		 <option disabled selected value>~~Area~~</option>
            </select></p>
         </div>
    </div>
    <div class="Row">
    <div class="Cell">
        <p><b>parcel weight:</b></p>
                        </div>
        <div class="Cell">
            <p> <input type="text" id="typ" oninput="weightConverter(this.value)" onchange="weightConverter(this.value)" class="form-control" name="typ" placeholder="weight in kg" required></p>

		</div>
		
        </div>
            <div class="Row">
            <div class="Cell">
                <p><b>Shipping Cost:</b></p>
                <input type="hidden" id="total_price"  name="fcost">
				</div>
				<div class="Cell">
                <span id="outputKilograms"></span>
                
				</div>
                
            </div>
    </div>
        <div class="make-it">
							<input type="submit" class="btn btn-primary" value="Submit" name="submit-btn">
						</div
 
                </form>
            </div>
        </div>
		</div>
		</div>
            
  </section> 
 <div class="overlay"></div>
    </body>
</html>

<?php

include "dbconfig/config.php";
		if(isset($_POST['submit-btn']))
		{
			//echo '<script type="text/javascript">alert("Sign Up successful")</script>';
			
			//database variables
			
			$add = $_POST['add'];

			$city = $_POST['city'];
			$area = $_POST['area'];
			$agent = $_POST['agent'];
			$rname = $_POST['rname'];
			$radd = $_POST['radd'];
			$rphn = $_POST['rphn'];
			$rcity = $_POST['rcity'];
			$rarea = $_POST['rarea'];
			$weight = $_POST['typ'];
            $fcost = $_POST['fcost'];
			
$query="INSERT into pickup values('','$_SESSION[user]','$add','$_SESSION[mobile]','$city','$area','$agent','$rname','$radd','$rphn','$rcity','$rarea','$weight','$fcost','')";
$query_run=mysqli_query($con,$query);
        if($query_run==1)
					{
						echo"<script>alert('your data saved succesfully');window.location='payment-gateway.php'</script>";
						$_SESSION["pay"]=$fcost;

						
					}
					
					else
					{
						echo '<script type="text/javascript">alert("Error!!")</script>';
					}
        
        }

?>
<script>
function weightConverter(valNum) {
  var price = document.getElementById("outputKilograms").innerHTML=valNum*10;
  $("#total_price").val(price);
}
</script>

<script type="text/javascript">	  
 function recivercity(s1,s2){
	 var s1 = document.getElementById(s1);
	 var s2 = document.getElementById(s2);
	  s2.innerHTML = "";
	  if(s1.value == "kolhapur"){
		var optionArray = ["|","Shivaji peth|Shivaji peth","Tarabai Park|Tarabai Park","Mali Colony|Mali Colony","Rajendra Nagar|Rajendra Nagar","Rk Nagar|Rk Nagar"];
	  }
	else if(s1.value == "sangli"){
		var optionArray = ["|","Mangalmurthi Colony|Mangalmurthi Colony","khanbag|Khanbag","anand nagar|Anand Nagar","padmavati Colony|Padmavati Colony","Hanuman Nagar|Hanuman Nagar"];
	  }else if(s1.value == "satara"){
		var optionArray = ["|","khed|Khed ","sambarvadi|Sambarvadi","Karanje Turf|Karanje Turf","khavali|Khavali","Kaloshi|Kaloshi"];
	  }
	  for (var option in optionArray){
		var pair = optionArray[option].split("|");
	    var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	  }
 }	 
</script>	