<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Part 2</title>
</head>
<body>
    <h2>Enter Image, Date, and Username</h2>
    <form action="insert_data.php" method="post" enctype="multipart/form-data">
        <label for="image">Image:</label>
        <input type="file" id="image" name="image" accept="image/*" required><br><br>
        
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required><br><br>
        
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <input type="hidden" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
        <input type="hidden" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>">
        <input type="hidden" name="password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ?>">
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
