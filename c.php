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
$uid=$_POST["username"];
$u_name=$_POST["email"];
$address=$_POST["phone"];
$phone_no=$_POST["n4"];
$sql = "INSERT INTO con (name,mail,mobile,subject)
VALUES ('$uid','$u_name','$address','$phone_no')";
if ($conn->query($sql) == TRUE) {
echo "Your response has been submitted successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>