<?php
include('connection.php');
$tb=mysqli_query($conn,"CREATE TABLE report(id int not null primary key auto_increment,school_logo blob,
gov_logo blob,school_name varchar(200),district varchar(200),email varchar(200),tel int,assess_kind varchar(200),
name_student varchar(200),stid int ,level enum('l1','l2','l3','l4','l5'),Term enum('1','2','3'),
cert enum('RTQF LEVEL 1','RTQF LEVEL 2','RTQF LEVEL 3','RTQF LEVEL 4','RTQF LEVEL 5'),sector varchar(200),
subsector varchar(200),rtqf_level varchar(200),status_ varchar(200),behaviour1 int,behaviour2 int,
behaviour3 int,module_code varchar(200),module_name varchar(200),fasscredit int,casscredit int,
fass1 int,fass2 int,fass3 int,cass1 int,cass2 int,cass3 int,total1 int ,total2 int,total3 int,
percentage1 int,percentage2 int,percentage3 int,position1 int,position2 int,position3 int,totatll1 int,
totall2 int,totall3 int,annual int,re_ass int,decision enum('C','NYC'),foreign key(stid) references student(stid))");
if($tb){
    echo "Your table has been created";
}else{
    echo "check again";
}
// $tb=mysqli_query($conn,"CREATE TABLE `location`(id int not null primary key auto_increment,school_logo blob,gov_logo blob,school_name varchar(200),district varchar(200),email varchar(200),tel int,assess_kind varchar(200))");
// if($tb){
//     echo "Your table has been created";
// }else{
//     echo "check again";
// }
$tb=mysqli_query($conn,"CREATE TABLE student(stid int not null primary key auto_increment,name_student varchar(200),level enum('l1','l2','l3','l4','l5'),Term enum('1','2','3'),
cert enum('RTQF LEVEL 1','RTQF LEVEL 2','RTQF LEVEL 3','RTQF LEVEL 4','RTQF LEVEL 5'),sector varchar(200),
subsector varchar(200),rtqf_level varchar(200))");
if($tb){
    echo "Your table has been created";
}else{
    echo "check again";
}
?>