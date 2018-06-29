<!DOCTYPE HTML>
<HTML>
<BODY>
<?php
session_start( );
$name1=$_SESSION['USERNAME'];
$password1=$_SESSION['PASSWORD'];
echo 'ACCEPTED INVITES:';
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection ,"delta"); 
$sql="SELECT * FROM invite WHERE sent='$name1' and status='ACCEPT'";
$result=mysqli_query($connection ,$sql);
$count=mysqli_num_rows($result);
if ($count>0) 
{
while($row=mysqli_fetch_assoc($result))
{
$see=$row["NUM"];
echo "<p>ROW NO:".$row["NUM"]."</p>"."SENT:".$row["SENT"]."<p>DATE:".$row["DATE"]."</p>"."<p>TITLE:".$row["TITLE"]."</p>"."<p>DESCRIPTION:".$row["DESCRIPTION"]."</p>"."<p>START TIME:".$row["START"]."</p>"."<p>END TIME:".$row["END"]."</p>"."<br>";
}
echo '<P><input type="button" value="GO TO INVITE" onclick="window.location=\'invite.html\' " /></P>';
 echo '<P><input type="button" value="GO TO INVITE REQUEST" onclick="window.location=\'invite2.php\' " /></P>';
 echo '<P><input type="button" value="GO TO CALENDAR" onclick="window.location=\'calendar.php\' " /></P>';
}
else
{
echo "No Invite Notifications";
echo '<P><input type="button" value="GO TO CALENDAR" onclick="window.location=\'calendar.php\' " /></P>';
echo '<P><input type="button" value="GO TO INVITE" onclick="window.location=\'invite.html\' " /></P>';
echo '<P><input type="button" value="GO TO INVITE REQUEST" onclick="window.location=\'invite2.php\' " /></P>';
}
echo 'REJECTED INVITES:';
$sql="SELECT * FROM invite WHERE sent='$name1' and status='REJECT'";
$result=mysqli_query($connection ,$sql);
$count=mysqli_num_rows($result);
if ($count>0) 
{
while($row=mysqli_fetch_assoc($result))
{
$see=$row["NUM"];
echo "<p>ROW NO:".$row["NUM"]."</p>"."SENT:".$row["SENT"]."<p>DATE:".$row["DATE"]."</p>"."<p>TITLE:".$row["TITLE"]."</p>"."<p>DESCRIPTION:".$row["DESCRIPTION"]."</p>"."<p>START TIME:".$row["START"]."</p>"."<p>END TIME:".$row["END"]."</p>"."<br>";
}
echo '<P><input type="button" value="GO TO INVITE" onclick="window.location=\'invite.html\' " /></P>';
 echo '<P><input type="button" value="GO TO INVITE REQUEST" onclick="window.location=\'invite2.php\' " /></P>';
 echo '<P><input type="button" value="GO TO CALENDAR" onclick="window.location=\'calendar.php\' " /></P>';
}
else
{
echo "No Invite Notifications";
echo '<P><input type="button" value="GO TO CALENDAR" onclick="window.location=\'calendar.php\' " /></P>';
echo '<P><input type="button" value="GO TO INVITE" onclick="window.location=\'invite.html\' " /></P>';
echo '<P><input type="button" value="GO TO INVITE REQUEST" onclick="window.location=\'invite2.php\' " /></P>';
}
mysqli_close($connection);
?>
</BODY>
</HTML>
