<?php
include('conn.php');

if(isset($_POST['submit'])){
    $behaviour=$_POST['behaviour1'];
    $module_code=$_POST['module_code'];
    $module_name=$_POST['module_name'];
    $fcredit=$_POST['fasscredit'];
    $ccredit=$_POST['fasscredit'];
    $fass=$_POST['fass1'];
    $cass=$_POST['cass1'];
    $stid=$_POST['names'];
    $status=$_POST['status'];

    $select =mysqli_query($conn,"SELECT school_name,district,email,tel,assess_kind from `location`");
    while($row=mysqli_fetch_array($select)){
       $name=$row['school_name'];
       $district=$row['district'];
       $email=$row['email'];
       $tel=$row['tel'];
       $assess_kind=$row['assess_kind'];
    }
    $select1 =mysqli_query($conn,"SELECT stid,name_student,level,term,cert,sector,subsector,rtqf_level from student WHERE stid='$stid'");
    while($rows=mysqli_fetch_array($select1)){
       $name_student=$rows['name_student'];
       $level=$rows['level'];
       $term=$rows['term'];
       $cert=$rows['cert'];
       $sector=$rows['sector'];
       $subsector=$rows['subsector'];
       $rtqf_level=$rows['rtqf_level'];
    }


   $insert=mysqli_query($conn,"INSERT INTO report(id,school_name,district,email,tel,assess_kind,name_student,stid,level,term,cert,sector,subsector,rtqf_level,status_,behaviour1,module_code,module_name,fasscredit,casscredit,fass1,cass1) 
   VALUES('','$name','$district','$email','$tel','$assess_kind','$name_student','$stid','$level','$term','$cert','$sector','$subsector','$rtqf_level','$status','$behaviour','$module_code','$module_name','$fcredit','$ccredit','$fass','$cass') ");
     if($insert){
        echo "Inserted";
      }else{
        echo $stid;
        echo "Not inserted";
     }


}
?>