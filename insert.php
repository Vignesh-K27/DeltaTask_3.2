<!DOCTYPE HTML>
<HTML>
<BODY>
<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection ,"delta"); 
if($_POST['PASSWORD']==$_POST['PASSWORD1'])
{
if(isset($_POST['SUBMIT'])){ 
$name = $_POST['USERNAME'];
$password= $_POST['PASSWORD'];
$email = $_POST['EMAIL'];
if($name !=''||$email !=''){
$sql="SELECT * FROM registration WHERE username='$name'";
$result=mysqli_query($connection ,$sql);
$count=mysqli_num_rows($result);
if($count>0)
{
echo "UserName Is Already Taken";
echo '<P><input type="button" value="BACK TO SIGN UP PAGE" onclick="window.location=\'DELTA TASK 3.2.HTML\' " /></P>';
}
else
{
$query = mysqli_query($connection,"INSERT INTO registration(USERNAME,PASSWORD,EMAIL ) VALUES ('$name', '$password', '$email')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
echo '<P><input type="button" value="BACK TO LOGIN PAGE" onclick="window.location=\'DELTA TASK 3.1.HTML\' " /></P>';
}
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
echo '<P><input type="button" value="BACK TO LOGIN PAGE" onclick="window.location=\'DELTA TASK 3.1.HTML\' " /></P>';
}
}
mysqli_close($connection);
}
else
{
echo "<p>PASSWORD IS MISMATCHED</p>";
}
?>
</BODY>
</HTML>