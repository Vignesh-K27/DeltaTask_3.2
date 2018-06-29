<!DOCTYPE HTML>
<HTML>
<BODY>
<?php
session_start( );
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection ,"delta"); 
$name1=$_SESSION['USERNAME'];
$sql="SELECT * FROM appointment WHERE  username='$name1' and date='2018-06-24'";
$result=mysqli_query($connection ,$sql);
$count=mysqli_num_rows($result);
if ($count>0) 
{
while($row=mysqli_fetch_assoc($result))
{
echo "TITLE:".$row["TITLE"]."</p>"."<p>DESCRIPTION:".$row["DESCRIPTION"]."</p>"."<p>START TIME:".$row["START"]."</p>"."<p>END TIME:".$row["END"]."</p>"."<br>";
}
echo '<P><input type="button" value="BACK TO CALENDAR" onclick="window.location=\'calendar.php\' " /></P>';
}
else
{
echo 'No Appointments Today';
echo '<P><input type="button" value="BACK TO CALENDAR" onclick="window.location=\'calendar.php\' " /></P>';
}
mysqli_close($connection);
?>
</BODY>
</HTML>