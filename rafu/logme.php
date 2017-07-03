<?php

$myuser = $_POST['uname'];
$mypass= $_POST['upass'];



$con = mysql_connect("localhost","root","");

if (!$con)
{
  die();
}

mysql_select_db("ttt",$con);

$result = mysql_query("select * from user where username = '$myuser' and password='$mypass'");


if (mysql_num_rows($result)>0)
{
   $row = mysql_fetch_array($result);

   if ($row[2]=='admin')

     echo "<script>location.href='admin.php'</script>";

 
}
else
{
  echo "<script>alert('you are not a registered user...')</script>";
  echo "<script>location.href='index.php'</script>"; 
 
}


?>