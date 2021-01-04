<html>
<head>
</head>
<body bgcolor="#F2F3F4">

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gym";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
//echo " CONNECTION ESTABLISHED \r\n";
//echo " INSERTION IN PROCESS";
$id=$_POST["id1"];
$passwd=$_POST["pswd1"];

$sql = "select * from admin where id='$id' and passwd='$passwd'";
$result = $conn->query($sql);
$numrows = mysqli_num_rows($result);
$sql1 = "select * from con";
$res = $conn->query($sql1);

if($numrows > 0)
   {
    	echo "<table align='center' border='1px' style='width:800px; line-height:45px;bottom:100px; margin-top:10%;'>";
	echo "<th style='color:green;'>NAME</th><th style='color:green ;'>E-MAIL</th><th style='color:green;'>MOBILE</th><th style='color:green;'>QUERIES</th>";
	while($row = mysqli_fetch_array($res))
	{
		echo "<tr><td>" . $row['name'] . "</td><td>" . $row['mail'] . "</td><td>" . $row['mobile'] . "</td><td>" . $row['subject'] ."</td></tr>";
	}
	echo "</table>";
   }
else
   {
    echo "Wrong password or username!";
   }
$conn->close();
?>
</body>
</html>