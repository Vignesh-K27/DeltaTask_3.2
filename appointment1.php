<!DOCTYPE HTML>
<HTML>
<BODY>
<?php
session_start( );
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection ,"delta"); 
if(isset($_POST['SUBMIT']))
{ 
$date=  $_POST['DATE'];
$title = $_POST['TITLE'];
$des=  $_POST['DES'];
$st=  $_POST['ST'];
$et=  $_POST['ET'];
$name1=$_SESSION['USERNAME'];
$password1=$_SESSION['PASSWORD'];
if($title !=''||$des !=''||$st!=''||$et!=''){
$query = mysqli_query($connection,"INSERT INTO appointment(DATE,USERNAME,TITLE,DESCRIPTION,START,END,PASSWORD) VALUES ('$date','$name1','$title','$des','$st','$et','$password1')");
echo "<br/><br/><span>Appointment Created successfully...!!</span>";
echo '<P><input type="button" value="BACK TO CALENDAR" onclick="window.location=\'calendar.php\' " /></P>';
}
else
{
echo "<p>Appointment Failed <br/> Some Fields are Blank....!!</p>";
echo '<P><input type="button" value="BACK TO CALENDAR" onclick="window.location=\'calendar.php\' " /></P>';
}
mysqli_close($connection);
}
?>
</BODY>
</HTML>