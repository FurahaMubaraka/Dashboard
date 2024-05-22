<?php
$conn=mysqli_connect('localhost','root','','study');
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $sex = $_POST['sex'];
    $age = $_POST['age'];
    $password = $_POST['password'];
    $sql = "INSERT INTO qr (id,name,username,email,phonenumber,sex,age, password) VALUES ('','$name','$username', '$email','$number','$sex','$age', '$password')";

    if (mysqli_query($conn, $sql)) {
        header('location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
