<HTML>
<BODY>
<?php
session_start( );
$name1=$_SESSION['USERNAME'];
$password1=$_SESSION['PASSWORD'];
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection ,"delta"); 
$see=$_POST['name1'];
$go="UPDATE invite SET STATUS='ACCEPT' WHERE NUM=$see";
mysqli_query($connection,$go);
echo 'ACCEPT';
echo '<P><input type="button" value="GO TO INVITE REQUEST" onclick="window.location=\'invite2.php\' " /></P>';
?>
</BODY>
</HTML>