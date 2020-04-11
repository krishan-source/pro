<?php
$servername="localhost";
$username="root";
$password ="1234";
$database="INFORMATION";
$conn= new mysqli($servername,$username,$password,$database);
if ($conn->connect_error)
{
die ("connection failed".$conn->connect_error);
}
else
{
if ($conn->query("CREATE TABLE users (
  id int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  username varchar(75) NOT NULL,
  email varchar(75) NOT NULL,
  password varchar(75) NOT NULL
) ;"))
{
echo "Table users is created";
}
else
echo "error caught";
}























