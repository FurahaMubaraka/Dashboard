<?php
session_start();
include('connection.php');
if(isset($_POST['adding_level'])) {
    $department_name = $_POST['deparment_name'];
    $levels = $_POST['data'];
    $sql = "INSERT INTO department VALUES('$department_name','$levels') WHERE departmen_name='$department_name'";

    if (mysqli_query($conn, $sql)) {
        header('location: ../Php/department.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
