<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../report_db/student.php" method="post">
        <input type="text" name="name_student" placeholder="Enter school name" id=""><br><br>
        <select name="level" id="">
            <option value="">--- Level -----</option>
            <option value="l1">L1</option>
            <option value="l2">L2</option>
            <option value="l3">L3</option>
            <option value="l4">L4</option>
            <option value="l5">L5</option>
        </select><br><br>
        <select name="term" id="">
            <option value="">--- Term -----</option>
            <option value="1">Term 1</option>
            <option value="2">Term 2</option>
            <option value="3">Term 3</option>
        </select><br><br>
        <select name="cert" id="">
            <option value="">--- Certificate -----</option>
            <option value="RTQF LEVEL 1">RTQF LEVEL 1</option>
            <option value="RTQF LEVEL 2">RTQF LEVEL 2</option>
            <option value="RTQF LEVEL 3">RTQF LEVEL 3</option>
            <option value="RTQF LEVEL 4">RTQF LEVEL 4</option>
            <option value="RTQF LEVEL 5">RTQF LEVEL 5</option>
        </select><br><br>
        <input type="text" name="sector" placeholder="Enter Sector" id=""><br><br>
        <input type="text" name="subsector" placeholder="Enter Subsector" id=""><br><br>
        <input type="text" name="rtqf_level" placeholder="Enter rtqf_level" id=""><br><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>