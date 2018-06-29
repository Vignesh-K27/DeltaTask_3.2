<HTML>
<BODY>
<?php
session_start( );
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection ,"delta"); 
$see=$_POST['name2'];
$go="UPDATE invite SET STATUS='REJECT' WHERE NUM=$see";
mysqli_query($connection,$go);
echo 'REJECTED';
echo '<P><input type="button" value="GO TO INVITE REQUEST" onclick="window.location=\'invite2.php\' " /></P>';
?>
</BODY>
</HTML>