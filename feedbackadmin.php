<!DOCTYPE html>
<html lang="en">
<head>
 <title>Table with database</title>
 <style>
 body{
	 
	 margin:0px;
 }
 
  table {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     } 
  th {
    background-color: #e559ba;
    color: white;
    text-align: center;
}
  tr:nth-child(even) {background-color: #f2f2f2}
  td {
    padding-top: .5em;
    padding-bottom: .5em;
	padding: 15px;
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
	
	background-color:#e559ba;
	 color:black;
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
  <a  href="registeradmin.php"><i class="fa fa-address-book-o"></i> Users</a>
   <a  href="add_agent.php"><i class="fa fa-user-circle"></i> Add Agent</a>
 
</div>
 <table>
 <tr>
  <th> Id </th> 
  <th> FullName </th> 
  <th> E-mail </th>
  <th> Phone </th>
  <th> Your Experience </th>
  <th> Rate Website </th>
  <th> Website UserFriendly </th>
  <th> Enough Information </th>
  
 </tr>
 <?php
$conn = mysqli_connect("localhost", "root", "", "smart_courier");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT * FROM feedback";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>"  .  $row["id"]  .  "</td><td>"  .  $row["fullname"]  .  "</td><td>"
  .  $row["email"]  .  "</td><td>"  .  $row["phone"] . "</td><td>" . $row["optradio"]. "</td><td>"  .  $row["radio2"]  .  "</td><td>"  .  $row["radio3"]  .  "</td><td>"  .  $row["radio4"]  .  "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>