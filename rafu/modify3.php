<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Control Panel ::</title>
<style type="text/css">
<!--
.heading {
	color: #F90;
	font-family: "Comic Sans MS", cursive;
}
.options {
	font-family: "Comic Sans MS", cursive;
	font-size: 16px;
	font-style: oblique;
	color: #F93;
}
-->
</style>
</head>

<body background="images/robot.jpg">

<br />
<br />
<br />
<table align="center" cellpadding="0" bgcolor="#FFFFFF" width="800" border="0">
  <tr>
    <td><h1 align="center" class="heading"><img src="" width="747" height="58" alt="" /></h1>
  <p align="center">
    <?php 
	 $id=$_REQUEST['id'];
	 $myroll=$_REQUEST['rollno'];
	 $mysem=$_REQUEST['psem'];
	 $mycgpa=$_REQUEST['pcgpa'];
     $mybkl1=$_REQUEST['pbkl1'];
     $mybkl2=$_REQUEST['pbkl2'];
	
	 
	 $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
	 mysql_select_db("ttt",$link) or die ("Cannot select the database!");
	 $query="UPDATE students SET rollno='".$myroll."', sem='".$mysem."', cgpa='".$mycgpa."', bkl1='".$mybkl1."', bkl2='".$mybkl2."' WHERE id='".$id."'";
		
		  if(!mysql_query($query,$link))
		  {die ("An unexpected error occured while saving the record, Please try again!");}
		  else
		 {
		  echo "Record updated successfully!";}
	 ?>

      </p>
      <p align="center"><a href="modify.php"><img border="0" src="images/cooltext457951462.png" onmouseover="this.src='images/cooltext457951462MouseOver.png';" onmouseout="this.src='images/cooltext457951462.png';" /></a><a href="index.php"><img border="0" src="images/cooltext457951615.png" onmouseover="this.src='images/cooltext457951615MouseOver.png';" onmouseout="this.src='images/cooltext457951615.png';" /></a></p>
      <p align="left">&nbsp;</p>
    <p align="left">&nbsp;</p></td>
  </tr>
</table>
<h1 align="center" class="heading">&nbsp;</h1>
</body>
</html>