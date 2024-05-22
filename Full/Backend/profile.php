<?php
session_start();
include('../Backend/connection.php');

if(isset($_POST['submit'])) {
    $dob = $_POST['dob'];
    $username = $_POST['username'];
    $phonenumber = $_POST['phonenumber'];
    $password = $_POST['pass'];

    if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {

        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
        
        $updateQuery = "UPDATE signup SET dob='$dob', username='$username', phonenumber='$phonenumber', profile='$imgContent' WHERE password='$password'";
    } else {
        $updateQuery = "UPDATE signup SET dob='$dob', username='$username', phonenumber='$phonenumber' WHERE password='$password'";
    }

    $result = mysqli_query($conn, $updateQuery);

    if($result) {
        $_SESSION['password'] = $password;
        $_SESSION['username'] = $username;
        header('Location: ../Php/Welcome.php');
        exit();
    } else {
        echo "<script>alert('Error updating profile'); window.location.href='../Php/profile.php';</script>";
        exit();
    }
} else {
    header('Location: ../Php/profile.php');
    exit();
}
?>
