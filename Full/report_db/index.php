<?php
include('conn.php');

if(isset($_POST['submit'])){
    $name=$_POST['school_name'];
    $district=$_POST['district'];
    $email=$_POST['email'];
    $tel=$_POST['tel'];
    $assess_kind=$_POST['assess_kind'];

    $insert=mysqli_query($conn,"INSERT INTO `location`(id,school_name,district,email,tel,assess_kind)
     VALUES('','$name','$district','$email','$tel','$assess_kind')");

     if($insert){
        header('location: ../report/student.php');
     }else{
        echo "Not inserted";
     }


}
?>