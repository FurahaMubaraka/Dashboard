<?php
session_start();
include('connection.php');
if(isset($_POST['signupsubmit'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO signup (id,fullname, email, password) VALUES ('','$fullname', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        header('location: ../Php/profile.php');
        $_SESSION['password']=$password;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
