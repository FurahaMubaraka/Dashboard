<?php
session_start();
include('connection.php');
if(isset($_POST['loginsubmit'])){
    $login=mysqli_query($conn,"SELECT * FROM signup where username = '$_POST[username]' OR email = '$_POST[username]' AND password='$_POST[password]'");
    $check=mysqli_fetch_array($login);
    if($check){
        $_SESSION['password']=$_POST['password'];
        $_SESSION['username']=$_POST['username'];
        header('location: ../Php/welcome.php');
    }else{
        echo "Not login";
    }

}
?>