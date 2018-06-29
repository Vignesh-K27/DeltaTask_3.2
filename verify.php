<!DOCTYPE HTML>
<HTML>
<BODY>
<?php
session_start( );
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection ,"delta"); 
if(isset($_POST['SUBMIT']))
{ 
$name = $_POST['DEMO1'];
$password= $_POST['DEMO2'];
$_SESSION['USERNAME']=$name;
$_SESSION['PASSWORD']=$password;
if($name!=''||$password!='')
{
$sql="SELECT * FROM registration WHERE username='$name' and password='$password'";
$result=mysqli_query($connection ,$sql);
$count=mysqli_num_rows($result);
if ($count==1) 
{
    echo "WELCOME USER";
    echo '<P><input type="button" value="CALENDAR" onclick="window.location=\'calendar.php\' " /></P>';
    echo '<P><input type="button" value="INVITE" onclick="window.location=\'invite.html\' " /></P>';
     echo '<P><input type="button" value="INVITE REQUEST" onclick="window.location=\'invite2.php\' " /></P>';
       echo '<P><input type="button" value="INVITE NOTIFICATION" onclick="window.location=\'invite5.php\' " /></P>';
 echo '<P><input type="button" value="YOUR ACCEPTED INVITE" onclick="window.location=\'invite6.php\' " /></P>';
echo '<P><input type="button" value="LOGOUT" onclick="window.location=\'DELTA TASK 3.1.HTML\' " /></P>';
} 
else 
{
    echo "INVALID DETAILS.PLEASE CHECK THE USERNAME AND PASSWORD";
    echo '<P><input type="button" value="BACK TO LOGIN PAGE" onclick="window.location=\'DELTA TASK 3.1.HTML\' " /></P>';
}
}
}
mysqli_close($connection);
?>
</BODY>
</HTML>