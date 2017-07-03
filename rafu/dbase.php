<?php
	mysql_connect("localhost", "root", "") or die(mysql_error());
	mysql_query("CREATE DATABASE ttt") or die(mysql_error());
	mysql_select_db("ttt") or die(mysql_error());
	mysql_query("CREATE TABLE user(username varchar(20), password varchar(20), level varchar(20))") or die(mysql_error());
	mysql_query("INSERT INTO user(username,password,level) VALUES('ict','123','admin')") or die(mysql_error());	

	mysql_query("CREATE TABLE students(id int NOT NULL AUTO_INCREMENT PRIMARY KEY ,rollno int NOT NULL, sem int NOT NULL, cgpa int, bkl1 int , bkl2 int)") or die(mysql_error());		
	mysql_query("CREATE TABLE me(ccode varchar(20) NOT NULL PRIMARY KEY , ctitle varchar(100), credit int(11))") or die(mysql_error());		
//	mysql_query("CREATE TABLE plus(idnum int NOT NULL PRIMARY KEY , famname varchar(100), firstname varchar(100), midname varchar(100) )") or die(mysql_error());		
		header("Location: index.php");
?>