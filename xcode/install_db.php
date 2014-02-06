<?php


echo "install Xcode SQL Database..";
//commect the SQL Database
$conn=mysql_connect("localhost","hackerchai","hackchaiyisheng");
if(!$conn)
{
  die("can not connect:".mysql_error());
}
//Create new database
mysql_query("CREATE DATABASE xcode",$conn);
//table id:1 name:code description:basic-code-store
$sqlcreate="CREATE TABLE code
(
codeID int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(codeID),
Name varchar(30),
Lan varchar(20),
Info varchar(256),
Code longtext
)";
mysql_query($sqlcreate,$conn);

//table id:2 mame:  descrition:

mysql_close($conn);
?>