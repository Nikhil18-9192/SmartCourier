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
   color: #588c7e;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     } 
  th {
    background-color: #585c8c;
    color: white;
    text-align: center;
    padding: 10px;
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
	
	background-color:#585c8c;
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
    <a  href="feedbackadmin.php"><i class="fa fa-commenting-o"></i> Feedback</a>
    <a  href="add_agent.php"><i class="fa fa-user-circle"></i> Add Agent</a>
<a  href="registeradmin.php"><i class="fa fa-address-book-o"></i> Users</a>   
 
</div>
 <table>
 <tr>
  <th> Agent Name</th> 
  <th> Agent_ID </th> 
  <th> E-mail </th>
  <th> Phone </th>
  <th> Username </th>
  <th> Password </th>
  <th> Conform Password </th>
  <th> Usertype</th>
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
  $sql = "SELECT * FROM agent";
  $result =mysqli_query ($con,$sql);
  $show=mysqli_num_rows($result);
  if ($show!=0) {
   // output data of each row
   while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>"  .  $row["Agent Name"]  .  "</td><td>"  .  $row["Agent_ID"]  .  "</td><td>"
  .  $row["email"]  .  "</td><td>"  .  $row["Phone"] . "</td><td>" . $row["username"]. "</td><td>"  .  $row["password"]  .  "</td><td>"  .  $row["cpass"]  .  "</td><td>"  .  $row["usertype"]  .  "</td> <td><a href='deleteagent.php?Agent_ID=$row[Agent_ID]' onclick='return checkdelete()'>Delete</a></td></tr>";
}
echo "</table>";
} else { echo "0 results"; }

?>
</table>
</body>
</html>