<!DOCTYPE html>
<html>
<head>
 <title>Table with database</title>
 <style>
 body{
	 
	 margin:0px;
 }
 
  table {
    border-collapse: collapse;
    width: 100%;
    color: #e70202;
    font-family: Times New Romain;
    font-size: 12px;
    text-align: center;
}
  th {
   background-color: #588c7e;
   color: white;
    }
  
.topnav {
    overflow: hidden;
    background-color: #333;
	
}
.topnav a{
 float:right;
 text-align: center;
 padding: 12px 16px;
 color: #fff;
 text-decoration: none;
 font-size: 18px;
}
.topnav a:hover{
	
	background-color:#4CAF50;
	 color:black;
}
.search-user{
    margin-top: 10px;
    margin-left: 10px;
    height: 30px;
    border-radius: 6px;
    width: 15%;
}
td {
  padding: 20px;
   
    }
	th {
    text-align: center;
}

 </style>
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
<body>
<div class="topnav">
 <a  href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
  <a  href="agentadmin.php"><i class="fa fa-user"></i> Agent-Table</a>
  <a  href="feedbackadmin.php"><i class="fa fa-commenting-o"></i> Feedback</a>
    <a  href="add_agent.php"><i class="fa fa-user-circle"></i> Add Agent</a>
   <form action="picksearch.php" method="POST">
   <div class="search">
	<input type="text" name="phn"  placeholder="Search..." class="search-user" required/>
	<input type="submit" class="btn btn-primary" value="Search" name="sub-btn" style="padding:3px 5px;">
 </div>
 </form>
</div>
 <table>
 <tr>
  <th> Id </th> 
  <th> Sender Name</th> 
  <th> Address</th>
  <th> Phone </th>
  <th> City </th>
  <th>Area</th>
  <th>Agent</th>
  <th>Reciver Name</th>
   <th> Address</th>
   <th> Phone </th>
   <th> City </th>
   <th>Area</th>
   <th> Parcel Weight</th>
	<th>Cost</th>
	<th>PAyment Success</th>
  <th colspan="2"> Operations</th>
  
 </tr>
 <script>
	function checkdelete()
	{
		return confirm('Are You sure you want to Delete This Record');
	}
</script>
 <?php
	include "dbconfig/config.php";
  $sql = "SELECT * FROM pickup";
  $result =mysqli_query ($con,$sql);
  $show=mysqli_num_rows($result);
  if ($show!=0) {
   // output data of each row
   while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>"  .  $row["id"]  .  "</td><td>"  .  $row["sname"]  .  "</td><td>"
  .  $row["add"]  .  "</td><td>"  .  $row["phn"] . "</td><td>" . $row["city"]. "</td><td>"  .  $row["area"]  .  "</td><td>"  .  $row["agent"]  .  "</td><td>" . $row["rname"]  .  "</td><td>" . $row["radd"]  .  "</td><td>" . $row["rphn"]  .  "</td><td>" . $row["rcity"] . "</td><td>" . $row["rarea"]  .  "</td><td>"  .  $row["weight"]  .  "</td><td>" .  $row["fcost"]  .  "</td><td>" .  $row["Payment_success"]  .  "</td> <td><a href='deletepickup.php?id=$row[id]' onclick='return checkdelete()'>Delete</a></td></tr>";
}
echo "</table>";
} else { echo "0 results"; }

?>

</table>
</body>
</html>