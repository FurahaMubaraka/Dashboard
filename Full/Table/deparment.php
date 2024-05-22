<?php
$conn=mysqli_connect('localhost','root','','management');
$Table=mysqli_query($conn,"CREATE TABLE department (id int not null primary key auto_increment,deparment_name enum('software development','electricity','masonary')unique,levels enum('l1','l2','l3','l4','l5'),owner varchar(200))");
if($Table){echo "Table Connected Successfully";}else{echo "Table Not Connected";}
?>