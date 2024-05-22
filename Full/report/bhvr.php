<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="student.php"><button>Add New student</button></a>
    <form action="../report_db/bhvr.php" method="post">
        <select name="names" id="">
            <option value="">-- Choose Student ---</option>
            <?php
            include('conn.php');
            $sql=mysqli_query($conn,"SELECT stid, name_student from student");
            while($row=mysqli_fetch_array($sql)){
            ?>
            <option value="<?php echo $row['stid'] ?>"><?php echo $row['name_student'] ?></option>
            <?php } ?>
        </select><br><br>
        <input type="text" name="status" placeholder="Enter status of Report" id="" required><br><br>
        <input type="number" name="behaviour1" placeholder="Enter Behaviour of student" id="" required><br><br>
        <input type="text" name="module_code" placeholder="Enter Module Code" id="" required><br><br>
        <input type="text" name="module_name" placeholder="Enter Module name" id="" required><br><br>
        <input type="number" name="fasscredit" placeholder="Enter Module Credit" id="" required><br><br>
        <input type="number" name="fass1" placeholder="Enter Marks of formative assessment" id="" required><br><br>
        <input type="number" name="cass1" placeholder="Enter Marks of Comprehensve assessment" id="" required></br><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>