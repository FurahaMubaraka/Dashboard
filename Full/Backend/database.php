<?php
$conn=mysqli_connect('localhost','root','','management');
// $database=mysqli_query($conn,"CREATE DATABASE management");
// if($database){echo "Connected Successfully";}else{echo "Not Connected";}
$Table=mysqli_query($conn,"CREATE TABLE signup (id int not null primary key auto_increment,fullname varchar(200),email varchar(200),password varchar(200) unique,dob date,phonenumber int,profile blob,username varchar(200))");
if($Table){echo "Table Connected Successfully";}else{echo "Table Not Connected";}
?>