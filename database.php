<?php
$servername="localhost";
$username="root";
$password ="1234";
$conn= new mysqli($servername,$username,$password);
if ($conn->connect_error)
{
die ("connection failed".$conn->connect_error);
}
else
{
echo "Connection built";
if ($conn->query("create database INFORMATION;"))
{
echo "database is created";
}
else
echo "error caught";
}























