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
   background-color: #588c7e;
   color: white;
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
	
	background-color:#4CAF50;
	font-size:27px;
	 color:black;
}
.search-user{
    margin-top: 10px;
    margin-left: 10px;
    height: 20px;
    border-radius: 6px;
    width: 10%;
}
 </style>
</head>
<body>
<div class="topnav">
  <a  href="logout.php">Logout</a>
  <a  href="agentadmin.php">Agent-Table</a>
  <a  href="feedbackadmin.php">Feedback</a>
   <a  href="add_agent.php">Add Agent </a>
   <form action="search.php" method="POST">
   <div class="search">
	<input type="text" name="mob_no"  placeholder="Search..." class="search-user" required/>
	<input type="submit" name="sub-btn" value="Search">
 </div>
 </form>
</div>
 <table>
 <tr>
  <th> Id </th> 
  <th> FirstName</th> 
  <th> LastName</th>
  <th> Phone </th>
  <th> Username </th>
  <th> Password </th>
  <th> Conform Password</th>
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
		if(isset($_POST['sub-btn']))
			$mob_no=$_POST['mob_no'];
		
		{
			$query="select * from register WHERE mob_no='$mob_no'";
			$result=mysqli_query($con,$query);
			$row=mysqli_fetch_assoc($result);
			echo "<tr><td>"  .  $row['id']  .  "</td><td>"  .  $row['fname']  .  "</td><td>"
  .  $row['lname']  .  "</td><td>"  .  $row['mob_no'] . "</td><td>" . $row['username']. "</td><td>"  .  $row['pass']  .  "</td><td>"  .  $row['cpass']  .  "</td><td>"  .  $row['usertype']  .  "</td> <td><a href='delete.php?mob_no=$row[mob_no]' onclick='return checkdelete()'>Delete</a></td></tr>";
			
		}
			
	?>	
	
</table>
</body>
</html>