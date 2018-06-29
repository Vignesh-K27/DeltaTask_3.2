<!DOCTYPE HTML>
<HTML>
<BODY>
<?php
$rows = 10; 
$cols = 10;
function drawTable($rows, $cols){
echo "<table border='1'>"; 
echo "<tr>";
echo "<th colspan='7'>";
echo "<LABEL FOR='MONTH'>";
echo "<SPAN><B>MONTH:JUNE 2018</B></SPAN>";
echo "</LABEL>";
echo "</tr>"; 
echo "<tr>";
echo "<th><B>SUNDAY</B></th>";
echo "<th><B>MONDAY</B></th>";
echo "<th><B>TUESDAY</B></th>";
echo "<th><B>WEDNESDAY</B></th>";
echo "<th><B>THURSDAY</B></th>";
echo "<th><B>FRIDAY</B></th>";
echo "<th><B>SATURDAY</B></th>";
echo "</tr>"; 
echo "<tr>";
echo "<th><B></B></th>";
echo "<th><B></B></th>";
echo "<th><B></B></th>";
echo "<th><B></B></th>";
echo "<th><B></B></th>";
echo '<th><B><input type="button" value="1"  onclick="window.location=\'date1.php\' " /></B></th>';
echo '<th><B><input type="button" value="2"  onclick="window.location=\'date2.php\' " /></B></th>';
echo "</tr>"; 
echo "<tr>";
echo '<th><B><input type="button" value="3"  onclick="window.location=\'date3.php\' " /></B></th>';
echo '<th><B><input type="button" value="4"  onclick="window.location=\'date4.php\' " /></B></th>';
echo '<th><B><input type="button" value="5"  onclick="window.location=\'date5.php\' " /></B></th>';
echo '<th><B><input type="button" value="6"  onclick="window.location=\'date6.php\' " /></B></th>';
echo '<th><B><input type="button" value="7"  onclick="window.location=\'date7.php\' " /></B></th>';
echo '<th><B><input type="button" value="8"  onclick="window.location=\'date8.php\' " /></B></th>';
echo '<th><B><input type="button" value="9"  onclick="window.location=\'date9.php\' " /></B></th>';
echo "</tr>"; 
echo "<tr>";
echo '<th><B><input type="button" value="10"  onclick="window.location=\'date10.php\' " /></B></th>';
echo '<th><B><input type="button" value="11"  onclick="window.location=\'date11.php\' " /></B></th>';
echo '<th><B><input type="button" value="12"  onclick="window.location=\'date12.php\' " /></B></th>';
echo '<th><B><input type="button" value="13"  onclick="window.location=\'date13.php\' " /></B></th>';
echo '<th><B><input type="button" value="14"  onclick="window.location=\'date14.php\' " /></B></th>';
echo '<th><B><input type="button" value="15"  onclick="window.location=\'date15.php\' " /></B></th>';
echo '<th><B><input type="button" value="16"  onclick="window.location=\'date16.php\' " /></B></th>';
echo "</tr>"; 
echo "<tr>";
echo '<th><B><input type="button" value="17"  onclick="window.location=\'date17.php\' " /></B></th>';
echo '<th><B><input type="button" value="18"  onclick="window.location=\'date18.php\' " /></B></th>';
echo '<th><B><input type="button" value="19"  onclick="window.location=\'date19.php\' " /></B></th>';
echo '<th><B><input type="button" value="20"  onclick="window.location=\'date20.php\' " /></B></th>';
echo '<th><B><input type="button" value="21"  onclick="window.location=\'date21.php\' " /></B></th>';
echo '<th><B><input type="button" value="22"  onclick="window.location=\'date22.php\' " /></B></th>';
echo '<th><B><input type="button" value="23"  onclick="window.location=\'date23.php\' " /></B></th>';
echo "</tr>"; 
echo "<tr>";
echo '<th><B><input type="button" value="24"  onclick="window.location=\'date24.php\' " /></B></th>';
echo '<th><B><input type="button" value="25"  onclick="window.location=\'date25.php\' " /></B></th>';
echo '<th><B><input type="button" value="26"  onclick="window.location=\'date26.php\' " /></B></th>';
echo '<th><B><input type="button" value="27"  onclick="window.location=\'date27.php\' " /></B></th>';
echo '<th><B><input type="button" value="28"  onclick="window.location=\'date28.php\' " /></B></th>';
echo '<th><B><input type="button" value="29"  onclick="window.location=\'date29.php\' " /></B></th>';
echo '<th><B><input type="button" value="30"  onclick="window.location=\'date30.php\' " /></B></th>';
echo "</tr>"; 
}
drawTable(5,7);
echo "<FORM ACTION='appointment.html' METHOD='POST'>";
echo "<P><INPUT TYPE='SUBMIT' VALUE='CREATE APPOINTMENT' NAME='SUBMIT'></P>";
echo "</FORM>";
echo '<P><input type="button" value="GO TO INVITE" onclick="window.location=\'invite.html\' " /></P>';
 echo '<P><input type="button" value="GO TO INVITE REQUEST" onclick="window.location=\'invite2.php\' " /></P>';
   echo '<P><input type="button" value="INVITE NOTIFICATION" onclick="window.location=\'invite5.php\' " /></P>';
   echo '<P><input type="button" value="YOUR ACCEPTED INVITE" onclick="window.location=\'invite6.php\' " /></P>';
echo '<P><input type="button" value="LOGOUT" onclick="window.location=\'DELTA TASK 3.1.HTML\' " /></P>';
?>
</BODY>
</HTML>