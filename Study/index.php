<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h1>QR Code Sample</h1>
    </div>
        <div class="main">
            <button onclick="add()">Add</button>
        <section class="attendance">
            <div class="attendance-list">
              <h1>Attendance List</h1>
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Sex</th>
                    <th>Details</th>
                  </tr>
                </thead>
                <?php
                $conn=mysqli_connect('localhost','root','','study');
                $select=mysqli_query($conn,"SELECT * FROM qr");
                $count=1;
                while($row=mysqli_fetch_array($select)){
                ?>
                <tbody>
                  <tr>
                    <td><?php echo $count++ ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['sex'] ?></td>
                    <td><a href="qr.php?qr=<?php echo $row['id'] ?>"><button>View</button></a></td>
                  </tr>
                </tbody>
                <?php } ?>
              </table>
            </div>
          </section>
        </div>
        <div class="onclicked hidden" id="adding">
            <div class="addition">
              <form action="insert.php" method="post">
                <h2>Adding Customer</h2><hr>
                <label for="name">name:</label>
                <input type="text" name="name"  id="">
                <label for="name">Username:</label>
                <input type="text" name="username"  id="">
                <label for="name">Email:</label>
                <input type="email" name="email"  id="">
                <label for="name">Phone number:</label>
                <input type="number" name="number"  id="">
                <select name="sex" id="">
                    <option value="">--- Sex -----</option>
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                </select>
                <label for="name">Age:</label>
                <input type="number" name="age"  id="">
                <label for="name">Password:</label>
                <input type="password" name="password"  id="">
                <div class="buttoninfo">
                    <input type="reset" onclick="cancel()" value="Cancel">
                    <input type="submit" name="submit" value="Edit">
                  </div>
            </form>
        </div>
    <script src="script.js"></script>
</body>
</html>