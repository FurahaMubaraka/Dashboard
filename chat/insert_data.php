<?php
// Database connection
$conn = mysqli_connect('localhost', 'root', '', 'your_database');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data
$email = $_POST['email'];
$name = $_POST['name'];
$password = $_POST['password'];
$date = $_POST['date'];
$username = $_POST['username'];

// File upload
$image = $_FILES['image']['tmp_name'];
$imageContent = addslashes(file_get_contents($image));

// Insert data into the database
$sql = "INSERT INTO your_table (email, name, password, date, username, image) 
        VALUES ('$email', '$name', '$password', '$date', '$username', '$imageContent')";

if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
