<?php session_start(); ?>
<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <title>welcome</title>
      <link rel="shortcut icon" href="../img/logo.jpg" type="image/x-icon">
      <link rel="stylesheet" href="../Css/welcome.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    </head>
    <body>
      <div class="container">
        <nav>
          <ul>
              <li>
                    <a href="#" class="logo">
                        <?php 
                        include('../Backend/connection.php');
                        $pass = $_SESSION['password'];
                        $select = mysqli_query($conn, "SELECT profile FROM signup WHERE password='$pass'");
                        $row = mysqli_fetch_array($select);
                        echo '<img src="data:image/jpeg;base64,' . base64_encode($row['profile']) . '" alt="" />';
                        ?>
                        <span class="nav-item"><?php echo $_SESSION['username']; ?></span>
                    </a>
                </li>
            <li><a href="#">
              <i class="fas fa-menorah"></i>
              <span class="nav-item">Dashboard</span>
            </a></li>
            <li><a href="#">
              <i class="fas fa-comment"></i>
              <span class="nav-item">Message</span>
            </a></li>
            <li><a href="report.php">
              <i class="fas fa-database"></i>
              <span class="nav-item">Report</span>
            </a></li>
            <li><a href="department.php">
              <i class="fas fa-chart-bar"></i>
              <span class="nav-item">Attendance</span>
            </a></li>
            <li><a href="#">
              <i class="fas fa-cog"></i>
              <span class="nav-item">Setting</span>
            </a></li>
    
            <li><a href="index.php" class="logout">
              <i class="fas fa-sign-out-alt"></i>
              <span class="nav-item">Log out</span>
            </a></li>
          </ul>
        </nav>
    
    
        <section class="main">
          <div class="main-top">
            <h1>Attendance</h1>
            <i class="fas fa-user-cog"></i>
          </div>
          <div class="users">
            <div class="card">
              <?php
              echo '
              <img src="data:image/jpeg; base64,' . base64_encode($row['profile']) . '" alt="" />
              ';
              ?>
              <h4>Furah Mubarak</h4>
              <p>Ui designer</p>
              <div class="per">
                <table>
                  <tr>
                    <td><span>85%</span></td>
                    <td><span>87%</span></td>
                  </tr>
                  <tr>
                    <td>Month</td>
                    <td>Year</td>
                  </tr>
                </table>
              </div>
              <button>Profile</button>
            </div>
            <div class="card">
            <?php
              echo '
              <img src="data:image/jpeg; base64,' . base64_encode($row['profile']) . '" alt="" />
              ';
              ?>
              <h4>Furah Mubarak</h4>
              <p>Progammer</p>
              <div class="per">
                <table>
                  <tr>
                    <td><span>82%</span></td>
                    <td><span>85%</span></td>
                  </tr>
                  <tr>
                    <td>Month</td>
                    <td>Year</td>
                  </tr>
                </table>
              </div>
              <button>Profile</button>
            </div>
            <div class="card">
            <?php
              echo '
              <img src="data:image/jpeg; base64,' . base64_encode($row['profile']) . '" alt="" />
              ';
              ?>
              <h4>Furah Mubarak</h4>
              <p>tester</p>
              <div class="per">
                <table>
                  <tr>
                    <td><span>94%</span></td>
                    <td><span>92%</span></td>
                  </tr>
                  <tr>
                    <td>Month</td>
                    <td>Year</td>
                  </tr>
                </table>
              </div>
              <button>Profile</button>
            </div>
            <div class="card">
            <?php
              echo '
              <img src="data:image/jpeg; base64,' . base64_encode($row['profile']) . '" alt="" />
              ';
              ?>
              <h4>Furah Mubarak</h4>
              <p>Ui designer</p>
              <div class="per">
                <table>
                  <tr>
                    <td><span>85%</span></td>
                    <td><span>82%</span></td>
                  </tr>
                  <tr>
                    <td>Month</td>
                    <td>Year</td>
                  </tr>
                </table>
              </div>
              <button>Profile</button>
            </div>
          </div>
    
          <section class="attendance">
            <div class="attendance-list">
              <h1>Attendance List</h1>
              <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Depart</th>
                    <th>Date</th>
                    <th>Join Time</th>
                    <th>Logout Time</th>
                    <th>Details</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>01</td>
                    <td>Sam David</td>
                    <td>Design</td>
                    <td>03-24-22</td>
                    <td>8:00AM</td>
                    <td>3:00PM</td>
                    <td><button>View</button></td>
                  </tr>
                  <tr class="active">
                    <td>02</td>
                    <td>Balbina Kherr</td>
                    <td>Coding</td>
                    <td>03-24-22</td>
                    <td>9:00AM</td>
                    <td>4:00PM</td>
                    <td><button>View</button></td>
                  </tr>
                  <tr>
                    <td>03</td>
                    <td>Badan John</td>
                    <td>testing</td>
                    <td>03-24-22</td>
                    <td>8:00AM</td>
                    <td>3:00PM</td>
                    <td><button>View</button></td>
                  </tr>
                  <tr>
                    <td>04</td>
                    <td>Sara David</td>
                    <td>Design</td>
                    <td>03-24-22</td>
                    <td>8:00AM</td>
                    <td>3:00PM</td>
                    <td><button>View</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </section>
        </section>
      </div>
    
    </body>
    </html>
    </span>