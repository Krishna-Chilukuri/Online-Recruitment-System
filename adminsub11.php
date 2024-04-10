<html>
<head>
<title>Admin Applicants List</title>
<style>
body
{
  background-image:url("2.jpg");
  background-position:center;
  background-size:cover;
  font-family:"Trebuchet MS";
}
#but{
  height:10%;
  width:10%;
}
#but{
  color:white;
  background-color:rgb(0,0,0,0.3);
  border-style:groove;
  border-radius:50px;
  border:none;
  outline:none;
}
#but:hover{
  background-color:rgb(255,255,255,0.2);
  color:black;
  border-radius:50%;
}
div{
  padding-left:1%;
  padding-top:1%;
}
table {
   border-collapse: collapse;
   width: 100%;
   color: rgb(255,255,255,0.2);
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     } 
  th {
   background-color: #959684;
   color: Black;
    }
td{
color:403C41;
}

</style>
</head>
<body>
  <b><font size=80px>Admin Applicants List</font></b>
  <br>
  <br>
  <div><button id='but' onclick="window.location.href='adminhome.html'">Return</button></div>
<br>

<table>
<tr>
	<th>ID</th>
	<th>Name</th>
	<th>DOB</th>
	<th>Mail</th>
	<th>Phone</th>
	<th>Qual</th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","","ors");
$sql="SELECT ID,Name,dob,mail,phone,qual,res from applicants";
$result = $conn->query($sql);
if(($result->num_rows) > 0)
{
	while($row=$result->fetch_assoc()){
		echo "<tr><td>".$row["ID"]."</td><td>".$row["Name"].
		"</td><td>".$row["dob"]."</td><td>".$row["mail"].
		"</td><td>".$row["phone"]."</td><td>".$row["qual"].
		"</td></tr>";
	}
	echo "</table>";
}
else{
	echo "0 result";
}
$conn->close();
?>
</table>
  </body>
</html>
