<?php
include('conn.php');

if(isset($_POST['submit'])){
    $name_student=$_POST['name_student'];
    $level=$_POST['level'];
    $term=$_POST['term'];
    $cert=$_POST['cert'];
    $sector=$_POST['sector'];
    $subsector=$_POST['subsector'];
    $rtqf_level=$_POST['rtqf_level'];
    $status=$_POST['status'];



    $select =mysqli_query($conn,"SELECT school_name,district,email,tel,assess_kind from `location`");
    while($row=mysqli_fetch_array($select)){
       $name=$row['school_name'];
       $district=$row['district'];
       $email=$row['email'];
       $tel=$row['tel'];
       $assess_kind=$row['assess_kind'];
    }
    
    $insert=mysqli_query($conn,"INSERT INTO student(stid,name_student,level,term,cert,sector,subsector,rtqf_level)
     VALUES('','$name_student','$level','$term','$cert','$sector','$subsector','$rtqf_level')");

     if($insert){
      header('location: ../report/bhvr.php');
   }else{
        echo "Not inserted";
     }


}
?>