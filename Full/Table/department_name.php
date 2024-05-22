<?php
session_start();
include('connection.php');
if(isset($_POST['department_name_submit'])) {
    $department_name = $_POST['deparment_name'];
    $sql = "INSERT INTO department (id,deparment_name) VALUES ('','$department_name')";

    if (mysqli_query($conn, $sql)) {
        header('location: ../Php/department.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
