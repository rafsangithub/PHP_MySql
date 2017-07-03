<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>vvvv.php</title>
</head>

<body bgcolor="#E6E6FA">
<div align="center">
            <?php

                 $con=mysql_connect("localhost","root","");
                 if(!$con)
                    {
                      die('could not connect.'.mysql_error());
                    }
           


                 mysql_select_db("ttt",$con);

                 $result=mysql_query("SELECT * FROM me");

                 echo"<table border='1'>
                 <tr>
                      <th>Course Code.</th>
				      <th>Course Title.</th>
				      <th>Credit.</th>
				      
					  
                 </tr>";

                 while($row=mysql_fetch_array($result))
                   {
                      echo "<tr>";
                      echo "<td>" .$row['ccode']. "</td>";
                      echo "<td>" .$row['ctitle']. "</td>";
                      echo "<td>" .$row['credit']. "</td>";
					  
                     
                      
                      echo "</tr>";
                   }
                 echo "</table>";

                 mysql_close($con);
            ?>
         </div>

          







</body>
</html>
