<!DOCTYPE HTML>
<HTML>
<BODY>
<?php
session_start( );
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection ,"delta"); 
$name1=$_SESSION['USERNAME'];
$sql="SELECT * FROM invite WHERE recieve='$name1' and status='SENT'";
$result=mysqli_query($connection ,$sql);
$count=mysqli_num_rows($result);
if ($count>0) 
{
while($row=mysqli_fetch_assoc($result))
{
$see=$row["NUM"];
echo "<p>ROW NO:".$row["NUM"]."</p>"."SENT:".$row["SENT"]."<p>DATE:".$row["DATE"]."</p>"."<p>TITLE:".$row["TITLE"]."</p>"."<p>DESCRIPTION:".$row["DESCRIPTION"]."</p>"."<p>START TIME:".$row["START"]."</p>"."<p>END TIME:".$row["END"]."</p>"."<br>";
}
echo "<FORM ACTION='invite3.php' METHOD='POST'>";
echo '<P>ENTER ROW NO TO ONE BY ONE TO ACCEPT:<input type="name" placeholder="ENTER ROW NO TO ONE BY ONE TO ACCEPT" name="name1"/></P>';
echo "<P><INPUT TYPE='SUBMIT' VALUE='ACCEPT' NAME='SUBMIT'></P>";
echo "</FORM>";
echo "<FORM ACTION='invite4.php' METHOD='POST'>";
echo '<P>ENTER ROW NO TO ONE BY ONE TO REJECT:<input type="name" placeholder="ENTER ROW NO TO ONE BY ONE TO REJECT" name="name2" /></P>';
echo "<P><INPUT TYPE='SUBMIT' VALUE='REJECT' NAME='SUBMIT'></P>";
echo "</FORM>"; 
echo '<P><input type="button" value="GO TO INVITE" onclick="window.location=\'invite.html\' " /></P>';
 echo '<P><input type="button" value="GO TO INVITE NOTIFICATION" onclick="window.location=\'invite5.php\' " /></P>';
 echo '<P><input type="button" value="GO TO CALENDAR" onclick="window.location=\'calendar.php\' " /></P>';
}
else
{
echo "No Invites";
echo '<P><input type="button" value="GO TO CALENDAR" onclick="window.location=\'calendar.php\' " /></P>';
echo '<P><input type="button" value="GO TO INVITE" onclick="window.location=\'invite.html\' " /></P>';
echo '<P><input type="button" value="GO TO INVITE NOTIFICATION" onclick="window.location=\'invite5.php\' " /></P>';
}
mysqli_close($connection);
?>
</BODY>
</HTML>