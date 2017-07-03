

<html><style type="text/css">
<!--
body,td,th {
	color: #003366;
}
body {
	background-color:#FFFF66;
}
.style1 {font-size: 36px}
-->
</style>

<center>

<p align="center" class="style1">Welcome </p>
<p align="center" class="style1"></p>
<p align="center" class="style1"></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>
  <?php


include("dbconnect.php");
$db_found = mysql_select_db('ttt');
if ($db_found){
	
		

echo "<form action='logme.php' method='POST'>";
echo "<center><table><tr>";
echo "<tr><td>Username</td><td><input type='text' name='uname'></td></tr>";
echo "<tr><td>Password</td><td><input type='password' name='upass'></td></tr>";

echo "<td><input type='submit' value='ok' name='log'></td><td><input type='reset' name='cancel'></td>";
echo "</tr></table>";
echo "</form>";
?>
  
  
  <?php

}

else{
	include("dbase.php");
	
}

?>
  
  
</p>
</html>