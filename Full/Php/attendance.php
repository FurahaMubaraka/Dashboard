<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <title>Attendance Dashboard</title>
      <link rel="stylesheet" href="../Css/attendance.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    </head>
    <body>
      <div class="container">
        <nav>
          <ul>
            
            <li><a href="#" class="logo">
              <img src="img/logo.jpg">
              
              <span class="nav-item">Admin</span>
            </a></li>
            <li><a href="#">
              <i class="fas fa-menorah"></i>
              <span class="nav-item">Dashboard</span>
            </a></li>
            <li><a href="#">
              <i class="fas fa-comment"></i>
              <span class="nav-item">Message</span>
            </a></li>
            <li><a href="#">
              <i class="fas fa-database"></i>
              <span class="nav-item">Report</span>
            </a></li>
            <li><a href="#">
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
          <div class="school-contain">
            <div class="three-contain">
              <div class="main-top">
                <h1>Department</h1>
              </div>
              <div class="users">
                <div class="class">
                  <button class="adding">Adding</button>
                </div>
                <div class="class delete">
                  <button class="delete">Delete</button>
                </div>
                <div class="class update">
                  <button class="update">Update</button>
                </div>
              </div>
            </div>
            <div class="three-contain">
              <div class="main-top">
                <h1>Level</h1>
              </div>
              <div class="users">
                <div class="class">
                  <button class="adding">Adding</button>
                </div>
                <div class="class delete">
                  <button class="delete">Delete</button>
                </div>
                <div class="class update">
                  <button class="update">Update</button>
                </div>
              </div>
            </div>
            <div class="three-contain">
              <div class="main-top">
                <h1>Teacher/Student</h1>
              </div>
              <div class="users">
                <div class="class">
                  <button class="adding">Adding</button>
                </div>
                <div class="class delete">
                  <button class="delete">Delete</button>
                </div>
                <div class="class update">
                  <button class="update">Update</button>
                </div>
              </div>
            </div>
          </div>
          <div class="users" id="form" style="display:none;">

            <div class="card">
              <h1>Department</h1>
              <h4>This School has :</h4>
              <div class="animated-number">
                <h2>5</h2>
              </div>
              <h4>Department</h4>
            </div>
            <div class="card">
              <h1>Level</h1>
              <h4>This School has :</h4>
              <div class="animated-number">
                <h2>4</h2>
              </div>
              <h4>Levels</h4>
            </div>
            <div class="card">
              <h1>Student</h1>
              <h4>This School has :</h4>
              <div class="animated-number">
                <h2>500</h2>
              </div>
              <h4>student</h4>
            </div>
            <div class="card">
              <h1>Teacher</h1>
              <h4>This School has :</h4>
              <div class="animated-number">
                <h2>25</h2>
              </div>
              <h4>Teacher</h4>
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
                  <!-- <tr >
                    <td>05</td>
                    <td>Salina</td>
                    <td>Coding</td>
                    <td>03-24-22</td>
                    <td>9:00AM</td>
                    <td>4:00PM</td>
                    <td><button>View</button></td>
                  </tr>
                  <tr >
                    <td>06</td>
                    <td>Tara Smith</td>
                    <td>Testing</td>
                    <td>03-24-22</td>
                    <td>9:00AM</td>
                    <td>4:00PM</td>
                    <td><button>View</button></td>
                  </tr> -->
                </tbody>
              </table>
            </div>
          </section>
        </section>
      </div>
    <script src="adding.js"></script>
    </body>
    </html>
    </span>