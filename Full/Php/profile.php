<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../Css/profile.css">
    <title>Input Image With Preview Image</title>
</head>
<body>
    <form action="../Backend/profile.php" method="post" enctype="multipart/form-data">
    <?php
      $pass=$_SESSION['password'];
      echo "<input type='text' value='$pass' name='pass' hidden>";
    ?>

    <div class="container">
        <input type="file" id="file" name="image" accept="image/*" hidden>
        
        <div class="img-area" data-img="">
            <i class='bx bxs-cloud-upload icon'></i>
            <h3>Upload Image</h3>
            <p>Image size must be less than <span>2MB</span></p>
        </div>

        <div class="input-area">
            <input type="date" name="dob" style="width: 100%;padding: 10px;margin-bottom: 10px;border: 1px solid #ccc;border-radius: 5px;" placeholder="Enter your Date">
            <input type="text" name="username" style="width: 100%;padding: 10px;margin-bottom: 10px;border: 1px solid #ccc;border-radius: 5px;" placeholder="Enter your Username">
            <input type="number" name="phonenumber" style="width: 100%;padding: 10px;margin-bottom: 10px;border: 1px solid #ccc;border-radius: 5px;" placeholder="Enter your Phone Number">
        </div>
        <span class="select-image">Select Image</span>
        <input type="submit" name="submit" style="width: 100%;padding: 13px;margin-bottom: 10px;background: green;border: 1px solid #ccc;font-size: 1.2em;font-weight:bolder;border-radius: 10px;" value="Submit">
    </div>
    
    </form>
    <script src="../Js/profile.js"></script>
</body>
</html>