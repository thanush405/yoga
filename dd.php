<?php
error_reporting(E_PARSE | E_ERROR);
include_once('connection.php');
$query="select*from jobs_offered";
$result=mysql_query($query);
?>
<!DOCTYPE html>
<html>
<head>
<style>
body {
background-image:linear-gradient(90deg,gray,white);
}
</style>
</head>
<body>
<font size="4px">
<table align="center" border="1px"style="width:800px; line-height:45px;">
<tr>
<th colspan="4"><h2><font color=red>LIST OF AVAILABLE JOBS </h2></th>
</tr>
<t>
<th><h3><font color="black">JOB ID</h3></th>
<th><h3><font color="black">JOB NAME</h3></th>
<th><h3><font color="black">NO OF VACANCIES</h3></th>

</t>
<?php
while($rows=mysql_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $rows['j_id']; ?> </td>
<td><?php echo $rows['job_name']; ?> </td>
<td><?php echo $rows['no_of_vacancies']; ?> </td>
</tr>
<?php
}
?>
</table>
<br>
<hr color="blACK">
<font color="red">If you are intereseted in the above jobs then <a href="registrations.html">CLICK HERE </a>to Register
<hr color="black">
</body>