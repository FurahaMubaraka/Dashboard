<?php
session_start();
?>
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
            <li><a href="../Php/welcome.php">
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
            <li><a href="../Department/insert.php">
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
                  <button class="adding" onclick="adding()">Adding</button>
                </div>
                <div class="class delete">
                  <button class="delete" onclick="delet()">Delete</button>
                </div>
                <div class="class update">
                  <button class="update" onclick="update()">Update</button>
                </div>
              </div>
            </div>
            <div class="three-contain">
              <div class="main-top">
                <h1>Level</h1>
              </div>
              <div class="users">
                <div class="class">
                  <button class="adding" onclick="addingl()">Adding</button>
                </div>
                <div class="class delete">
                  <button class="delete" onclick="deletl()">Delete</button>
                </div>
                <div class="class update">
                  <button class="update" onclick="updatel()">Update</button>
                </div>
              </div>
            </div>
            <div class="three-contain">
              <div class="main-top">
                <h1>Teacher/Student</h1>
              </div>
              <div class="users">
                <div class="class">
                  <button class="adding" onclick="addingt()">Adding</button>
                </div>
                <div class="class delete">
                  <button class="delete" onclick="delett()">Delete</button>
                </div>
                <div class="class update">
                  <button class="update" onclick="updatet()">Update</button>
                </div>
              </div>
            </div>
          </div>

          <div class="users">
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
              <h1>Department Management</h1>
              <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Department Name</th>
                    <th>Levels</th>
                    <th>Owner</th>
                    <th>Details</th>
                  </tr>
                </thead>
                <?php
                include('../Table/connection.php');
                $sql="SELECT * FROM department";
                $query=mysqli_query($conn,$sql);
                $count=1;
                while($row=mysqli_fetch_array($query)){
                ?>
                <tbody>
                  <tr class="">
                    <td><?php echo $count++ ?></td>
                    <td><?php echo $row['deparment_name'] ?></td>
                    <td><?php echo $row['levels'] ?></td>
                    <td><?php echo $row['owner'] ?></td>
                    <td><button onclick="view()">View</button></td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
          </section>
        </section>
      </div>
      
      <div class="department">
        <div class="onclicked hidden" id="onclickedd">
          <div class="addition">
            <form action="../Table/department_name.php" method="post">
              <h2>Adding Department</h2><hr>
              <select name="deparment_name" id="" style="width: 100%;height: 7vh;background: whitesmoke; margin: 1vh 0vh;font-weight: bold;">
                <option value="">-- Adding Level --</option>
                <option value="Software Development">Software Development</option>
                <option value="Masonary">Masonary</option>
                <option value="Electricity">Electricity</option>
              </select>
            <input type="submit" value="Adding" name="department_name_submit">
          </form>
          <div class="button">
            <input type="button" onclick="cancel()" value="X">
          </div>
        </div>
      </div>
      <div class="onclicked hidden" id="onclickeddlt">
        <div class="addition">
          <form action="">
            <h2>Delete Department</h2><hr>
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Depart</th>
                  <th>Date</th>
                  <th>Join Time</th>
                  <th>Logout Time</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input type="checkbox" name="" id=""></td>
                  <td>01</td>
                  <td>Sam David</td>
                  <td>Design</td>
                  <td>03-24-22</td>
                  <td>8:00AM</td>
                  <td>3:00PM</td>
                </tr>
                <tr>
                  <td><input type="checkbox" name="" id=""></td>
                  <td>02</td>
                  <td>Sam David</td>
                  <td>Design</td>
                  <td>03-24-22</td>
                  <td>8:00AM</td>
                  <td>3:00PM</td>
                </tr>
              </tbody>
            </thead>
            </table>
            <input type="submit" value="Save" name="submit">
          </form>
          <div class="button">
            <input type="button" onclick="canceldlt()" value="X">
          </div>
        </div>
      </div>
      <div class="onclicked hidden" id="onclickedupd">
        <div class="addition">
          <form action="" id="update1">
            <h2>Update Department</h2><hr>
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Department</th>
                  <th>To</th>
                  <th>Updated Department</th>
                  <th>Year</th>
                  <th>Department Owner</th>
                  <th>Details</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>01</td>
                  <td>Sam David</td>
                  <td></td>
                  <td><input type="text"></td>
                  <td>
                    <select name="" id="">
                      <option value="">--- Years ------</option>
                      <option value="">L1</option>
                      <option value="">L1 , L2</option>
                      <option value="">L3</option>
                      <option value="">L3 , l4</option>
                      <option value="">L4 , l5</option>
                      <option value="">L3 , L4 , L5</option>
                    </select>
                  </td>
                  <td>Sam David</td>
                  <td><button>View</button></td>
                </tr>
              </tbody>
            </thead>
            </table>
            <input type="submit" value="Save" name="submit">
          </form>
          <form action="" id="view" class="hidden">
            <h2>Weeee</h2>
            <input type="submit" value="Cancel" onclick="update1()">
            <input type="submit" value="Submit">
          </form>
          <div class="button">
            <input type="button" onclick="cancelupd()" value="X">
          </div>
        </div>
      </div>
    </div>
      <div class="level">
        <div class="onclicked hidden" id="onclickedl">
          <div class="addition">
            <form action="../Table/addinglevel.php" style="width:35%">
              <h2>Adding Level</h2><hr>
              <select name="deparment_name" id="" style="width: 100%;height: 7vh;background: whitesmoke; margin: 1vh 0vh;font-weight: bold;">
                <option value="">--- In this Department ----</option>
                <?php
            include('Table/connection.php');
            $sql=mysqli_query($conn,"SELECT deparment_name FROM department");
            while($row=mysqli_fetch_array($sql)){
            ?>
            <option value="<?php echo $row['deparment_name'] ?>"><?php echo $row['deparment_name'] ?></option>
            <?php } ?>
              </select>
              <div for="" style="margin: 2vh;font-weight: bold;font-size: 1.3rem;">
                <input type="checkbox"  name="data" value="l1" id="" style="margin-right: 5px"> l1
              </div>
              <div for="" style="margin: 2vh;font-weight: bold;font-size: 1.3rem;">
                <input type="checkbox"  name="data" value="l2" id="" style="margin-right: 5px"> l2
              </div>
              <div for="" style="margin: 2vh;font-weight: bold;font-size: 1.3rem;">
                <input type="checkbox"  name="data" value="l3" id="" style="margin-right: 5px"> l3
              </div>
              <div for="" style="margin: 2vh;font-weight: bold;font-size: 1.3rem;">
                <input type="checkbox"  name="data" value="l4" id="" style="margin-right: 5px"> l4
              </div>
              <div for="" style="margin: 2vh;font-weight: bold;font-size: 1.3rem;">
                <input type="checkbox"  name="data" value="l5" id="" style="margin-right: 5px"> l5
              </div>
            <input type="submit" value="Adding" name="adding_level">
          </form>
          <div class="button">
            <input type="button" onclick="cancell()" value="X">
          </div>
        </div>
      </div>
      <div class="onclicked hidden" id="onclickeddltl">
        <div class="addition">
          <form action="">
            <h2>Delete Level</h2><hr>
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Depart</th>
                  <th>Date</th>
                  <th>Join Time</th>
                  <th>Logout Time</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input type="checkbox" name="" id=""></td>
                  <td>01</td>
                  <td>Sam David</td>
                  <td>Design</td>
                  <td>03-24-22</td>
                  <td>8:00AM</td>
                  <td>3:00PM</td>
                </tr>
                <tr>
                  <td><input type="checkbox" name="" id=""></td>
                  <td>02</td>
                  <td>Sam David</td>
                  <td>Design</td>
                  <td>03-24-22</td>
                  <td>8:00AM</td>
                  <td>3:00PM</td>
                </tr>
              </tbody>
            </thead>
            </table>
            <input type="submit" value="Save" name="submit">
          </form>
          <div class="button">
            <input type="button" onclick="canceldltl()" value="X">
          </div>
        </div>
      </div>
      <div class="onclicked hidden" id="onclickedupdl">
        <div class="addition">
          <form action="" id="update1">
            <h2>Update Level</h2><hr>
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Department</th>
                  <th>To</th>
                  <th>Updated Department</th>
                  <th>Year</th>
                  <th>Department Owner</th>
                  <th>Details</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>01</td>
                  <td>Sam David</td>
                  <td></td>
                  <td><input type="text"></td>
                  <td>
                    <select name="" id="">
                      <option value="">--- Years ------</option>
                      <option value="">L1</option>
                      <option value="">L1 , L2</option>
                      <option value="">L3</option>
                      <option value="">L3 , l4</option>
                      <option value="">L4 , l5</option>
                      <option value="">L3 , L4 , L5</option>
                    </select>
                  </td>
                  <td>Sam David</td>
                  <td><button>View</button></td>
                </tr>
              </tbody>
            </thead>
            </table>
            <input type="submit" value="Save" name="submit">
          </form>
          <div class="button">
            <input type="button" onclick="cancelupdl()" value="X">
          </div>
        </div>
      </div>
    </div>
      <div class="Teacher/student">
        <div class="onclicked hidden" id="onclickedt">
          <div class="addition">
            <form action="">
              <h2>Adding Teacher</h2><hr>
              <select name="" id="" style="width: 100%;height: 7vh;background: whitesmoke; margin: 1vh 0vh;font-weight: bold;">
                <option value="">-- Teacher/Student --</option>
                <option value="">Teacher</option>
                <option value="">Student</option>
              </select>
              <label for="level_name">Teacher/Student name:</label>
              <input type="text" name="" id="">
              
            <input type="submit" value="Adding" name="submit">
          </form>
          <div class="button">
            <input type="button" onclick="cancelt()" value="X">
          </div>
        </div>
      </div>
      <div class="onclicked hidden" id="onclickeddltt">
        <div class="addition">
          <form action="">
            <h2>Delete Teacher</h2><hr>
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Depart</th>
                  <th>Date</th>
                  <th>Join Time</th>
                  <th>Logout Time</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input type="checkbox" name="" id=""></td>
                  <td>01</td>
                  <td>Sam David</td>
                  <td>Design</td>
                  <td>03-24-22</td>
                  <td>8:00AM</td>
                  <td>3:00PM</td>
                </tr>
                <tr>
                  <td><input type="checkbox" name="" id=""></td>
                  <td>02</td>
                  <td>Sam David</td>
                  <td>Design</td>
                  <td>03-24-22</td>
                  <td>8:00AM</td>
                  <td>3:00PM</td>
                </tr>
              </tbody>
            </thead>
            </table>
            <input type="submit" value="Save" name="submit">
          </form>
          <div class="button">
            <input type="button" onclick="canceldltt()" value="X">
          </div>
        </div>
      </div>
      <div class="onclicked hidden" id="onclickedupdt">
        <div class="addition">
          <form action="" id="update1">
            <h2>Update Teacher</h2><hr>
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Department</th>
                  <th>To</th>
                  <th>Updated Department</th>
                  <th>Year</th>
                  <th>Department Owner</th>
                  <th>Details</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>01</td>
                  <td>Sam David</td>
                  <td></td>
                  <td><input type="text"></td>
                  <td>
                    <select name="" id="">
                      <option value="">--- Years ------</option>
                      <option value="">L1</option>
                      <option value="">L1 , L2</option>
                      <option value="">L3</option>
                      <option value="">L3 , l4</option>
                      <option value="">L4 , l5</option>
                      <option value="">L3 , L4 , L5</option>
                    </select>
                  </td>
                  <td>Sam David</td>
                  <td><button>View</button></td>
                </tr>
              </tbody>
            </thead>
            </table>
            <input type="submit" value="Save" name="submit">
          </form>
          <form action="" id="view" class="hidden">
            <h2>Weeee</h2>
            <input type="submit" value="Cancel" onclick="update1()">
            <input type="submit" value="Submit">
          </form>
          <div class="button">
            <input type="button" onclick="cancelupdt()" value="X">
          </div>
        </div>
      </div>
    </div>
    <div class="View">
      <div class="onclicked hidden" id="onclicked">
        <div class="addition">
          <div class="viewform">
            <div class="profile">
              <img src="../Img/logo.jpg" alt="">
            </div>
            <div class="information">
              <h2>Details</h2>
              <h4>Names: </h4>
              <h4>Age:</h4>
              <h4>Sex:</h4>
              <h4>Date of birth:</h4>
              <h4>Tel:</h4>
              <h4>Email:</h4>
              <h4>Department:</h4>
              <h4>Location:</h4>
              <h4>Address:</h4>
              <h4>Phone number:</h4>
              <h4>status:</h4>
              <div class="buttoninfo">
                <input type="reset" onclick="reset()" value="Cancel">
                <input type="submit" value="Edit">
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
    <script src="../Js/main.js"></script>
    <script src="../Js/department.js"></script>
    <script src="../Js/level.js"></script>
    <script src="../Js/student.js"></script>
    <script src="../Js/view.js"></script>
    </body>
    </html>
  </span>