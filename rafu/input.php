<style type="text/css">
<!--
.style1 {
	color: #000000;
	font-size: xx-large;
	font-family: "Comic Sans MS";
}
body {
	background-color: 'White';
}
-->
</style>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p align="center" class="style1">Search results::</p>
<div align="center">
  <?php
	$name=$_POST["rollno"];
	$con = mysql_connect("localhost","root","") or die('Could not connect: ' . mysql_error());
	mysql_select_db("ttt", $con);
	$result=mysql_query("SELECT * FROM students where rollno=$name");
    
	 
	while($row = mysql_fetch_array($result))
	{
	        
			echo"<table border='2'>
                 <tr>
                 <th> Id Number </th>
                 <th> Semester </th>
                 <th>CGPA</th>
				 <th>Backlog1#</th>
				 <th>Backlog2#</th>
				 
                
                 </tr>";
			 
		 echo "<tr>";
                      echo "<td>" .$row['rollno']. "</td>";
                      echo "<td>" .$row['psem']. "</td>";
                      echo "<td>" .$row['pcgpa']. "</td>";
					  echo "<td>" .$row['pbkl1']. "</td>";
                      echo "<td>" .$row['pbkl2']. "</td>";
                     
                      
                      echo "</tr>";
	}
	   echo "</table>";
	   
	 mysql_close($con);
?>
</div>
