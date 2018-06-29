<!DOCTYPE HTML>
<HTML>
<BODY>
<?php
session_start( );
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection ,"delta"); 
if(isset($_POST['SUBMIT']))
{ 
$sent=$_SESSION['USERNAME'];
$res=$_POST['USER'];
$date=  $_POST['DATE'];
$title = $_POST['TITLE'];
$des=  $_POST['DES'];
$st=  $_POST['ST'];
$et=  $_POST['ET'];
if($sent!=''||$res!=''||$title !=''||$des !=''||$st!=''||$et!='')
{
$sql="SELECT * FROM registration WHERE username='$res'";
$result=mysqli_query($connection ,$sql);
$count=mysqli_num_rows($result);
if ($count==1) 
{
if($sent!=$res)
{
$query = mysqli_query($connection,"INSERT INTO invite(SENT,RECIEVE,DATE,TITLE,DESCRIPTION,START,END) VALUES ('$sent','$res','$date','$title','$des','$st','$et')");
echo "Your Request Has Been Sent";
echo '<P><input type="button" value="BACK TO INVITE PAGE" onclick="window.location=\'invite.html\' " /></P>';
 echo '<P><input type="button" value="GO TO INVITE REQUEST" onclick="window.location=\'invite2.php\' " /></P>';
 echo '<P><input type="button" value="GO TO CALENDAR" onclick="window.location=\'calendar.php\' " /></P>';
}
else
{
echo "Request Cannot Be Sent To Same User";
echo '<P><input type="button" value="BACK TO INVITE PAGE" onclick="window.location=\'invite.html\' " /></P>';
}
} 
else 
{
    echo "CHECK THE USERNAME";
    echo '<P><input type="button" value="BACK TO INVITE PAGE" onclick="window.location=\'invite.html\' " /></P>';
 echo '<P><input type="button" value="GO TO INVITE REQUEST" onclick="window.location=\'invite2.php\' " /></P>';
 echo '<P><input type="button" value="GO TO CALENDAR" onclick="window.location=\'calendar.php\' " /></P>';
}
}
}
mysqli_close($connection);
?>
</BODY>
</HTML>