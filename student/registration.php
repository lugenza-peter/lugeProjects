<html>
<head>
<title></title>
<link rel="stylesheet" href="assignment.css" type="text/css">
<style type="text/css">
h1{
text-align:center;
background:#0B3A67;
color:white;
font-family:calibri;
}
li{
display:inline-block;

}
ul{
list-style-type:none;
}
a{
margin:5px 20px;
text-decoration:none;
color:#0B3A67;
}
ul{
text-align:center;
background:white;
padding:7px;
color: rgba(0,0,0,0.6);
text-shadow: 2px 8px 6px rgba(0,0,0,0.2),
                 0px -5px 35px rgba(255,255,255,0.3);
}
td{
color: white;
}
</style>
</head>
<body>
<img src = "logo.jpg">
<h1>Student Data Upload</h1>
<ul >
<li><a href="main.html" title="Home Page">REGISTERATION</a></li>
<li><a href="female.php" title="All Female">FEMALE STUDENTS</a></li>
</ul>

</body>
</html>
<?php
$connect=mysqli_connect("localhost","root","") //or die(mysql_error());
$conn=mysqli_select_db($connect,"udsm") or die(mysql_error());
$select = "SELECT * FROM `coict`";
if($run = mysql_query($select)){

print '
      <table cellpadding="6" cellspacing="6" border="1">
	  <tr bgcolor="yellow">
	  <th>Id</th>
	  <th>Firstname</th>
	  <th>Lastname</th>
	  <th>Year of Study</th>
	  <th>Program</th>
	  <th>Department</th>
	  <th>State</th>
	  <th>Nationality</th>
	  <th>Date of Birth (YYYY-MM-DD)</th>
	  <th>Place Of Birth</th>
	  <th>Gender</th>
	  <th>Email</th>
	  <th>Marrital Status</th>
	  <th>Religion</th>
	  <th>Contact Address</th>

';
while($row = mysqli_fetch_array($run)){
echo "<tr>";
echo "<td>".$row['ID']."</td>";
echo "<td>".$row['Firstname']."</td>";
echo "<td>".$row['Lastname']."</td>";
echo "<td>".$row['Year']."</td>";
echo "<td>".$row['Program']."</td>";
echo "<td>".$row['Department']."</td>";
echo "<td>".$row['State']."</td>";
echo "<td>".$row['Nationality']."</td>";
echo "<td>".$row['Date_of_Birth']."</td>";
echo "<td>".$row['Place_of_Birth']."</td>";
echo "<td>".$row['Gender']."</td>";
echo "<td>".$row['Email']."</td>";
echo "<td>".$row['Marrital_Status']."</td>";
echo "<td>".$row['Religion']."</td>";
echo "<td>".$row['Contact_Address']."</td>";
}
echo "</table>";
}

?>
