<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="viewform">
      <div class="profile">
              <?php
                // Include the PHP QR Code library
                include('qrlib.php');
                
                // Function to generate QR code
                function generateQRCode($data) {
                    $tempDir = 'temp/'; // Make sure this directory exists and is writable
                    $fileName = $tempDir . 'qr_code.png';
                    QRcode::png($data, $fileName, QR_ECLEVEL_H, 10);
                    return $fileName;
                }

                // Database connection and data retrieval
                $conn = mysqli_connect('localhost', 'root', '', 'study');
                $select = mysqli_query($conn, "SELECT * FROM qr WHERE id='{$_GET['qr']}'");
                $row = mysqli_fetch_array($select);

                // Generate QR code
                $qrData = "Name: " . $row['name'] . "\n";
                $qrData .= "Username: " . $row['username'] . "\n";
                // Add more data fields as needed
                $qrCodePath = generateQRCode($qrData);
              ?>
              <img src="<?php echo $qrCodePath; ?>" alt="QR Code">
      </div>
      <div class="information">
          <h2>Details</h2>
          <h4><span style="font-size: 1.5rem;">Names:</span> <?php echo $row['name']; ?></h4>
          <h4><span style="font-size: 1.5rem;">Username:</span> <?php echo $row['username']; ?></h4>
          <h4><span style="font-size: 1.5rem;">Email:</span> <?php echo $row['email']; ?></h4>
          <h4><span style="font-size: 1.5rem;">Phone number:</span> <?php echo $row['phonenumber']; ?></h4>
          <h4><span style="font-size: 1.5rem;">Sex:</span> <?php echo $row['sex']; ?></h4>
          <h4><span style="font-size: 1.5rem;">Age:</span> <?php echo $row['age']; ?></h4>
          <h4><span style="font-size: 1.5rem;">Password:</span> <?php echo $row['password']; ?></h4>
          <div class="buttoninfo">
            <a href="index.php"><input type="reset" value="Cancel"></a>
          </div>
      </div>
    </div>
</body>
</html>
