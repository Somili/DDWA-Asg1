<?php
    session_start();
    $loginUserID="2";
    $fullName = "";

    $studentID = "";
    $full_name = "";
    $contactNo = "";
    $schoolName = "";
    $yearEnrolled = "";
    $serialNo = "";
    $ProjectID = "";

    $studentID2 = "";
    $full_name2 = "";
    $contactNo2 = "";
    $schoolName2 = "";
    $yearEnrolled2 = "";
    $serialNo2 = "";
    $ProjectID2 = "";

    $studentID3 = "";
    $full_name3 = "";
    $contactNo3 = "";
    $schoolName3 = "";
    $yearEnrolled3 = "";
    $serialNo3 = "";
    $ProjectID3 = "";

    $studentID4 = "";
    $full_name4 = "";
    $contactNo4 = "";
    $schoolName4 = "";
    $yearEnrolled4 = "";
    $serialNo4 = "";
    $ProjectID4 = "";

    $studentID5 = "";
    $full_name5 = "";
    $contactNo5 = "";
    $schoolName5 = "";
    $yearEnrolled5 = "";
    $serialNo5 = "";
    $ProjectID5 = "";

    $studentID6 = "";
    $full_name6 = "";
    $contactNo6 = "";
    $schoolName6 = "";
    $yearEnrolled6 = "";
    $serialNo6 = "";
    $ProjectID6 = "";

    $studentID7 = "";
    $full_name7 = "";
    $contactNo7 = "";
    $schoolName7 = "";
    $yearEnrolled7 = "";
    $serialNo7 = "";
    $ProjectID7 = "";

    $make = "";
    $model = "";
    $processor = "";
    $hardDisk = "";
    $ram = "";
    $operatingSystem = "";

    $make2 = "";
    $model2 = "";
    $processor2 = "";
    $hardDisk2 = "";
    $ram2 = "";
    $operatingSystem2 = "";
    
    if(isset($_SESSION["loginUserID"])){
        $loginUserID = $_SESSION["loginUserID"];
    }

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "chenshiyu_ddwa";
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    // Test if connection occurred.
    if(mysqli_connect_errno()) {
        die("Database connection failed: " . 
            mysqli_connect_error() . 
            " (" . mysqli_connect_errno() . ")"
        );
    }
    else {
        $sql = "SELECT * FROM `student` WHERE student_id='1'";
        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
            if($row = mysqli_fetch_assoc($result)) {
               $studentID = $row["student_id"];
               $full_name = $row["full_name"];
               $contactNo = $row["contact_no"];
               $schoolName = $row["school_name"];
               $yearEnrolled = $row["year_enrolled"];
               $serialNo = $row["serial_number"];
               $ProjectID = $row["project_id"];
         //    echo "<tr><td>".$row["student_id"]."</tr><td>".$row["full_name"]."</tr><td>".$row["contact_no"]."</tr><td>".$row["school_name"]."</tr><td>".$row["year_enrolled"]."</tr><td>".$row["serial_number"]."</tr><td>".$row["project_id"]."</tr><td>".$row["'password"]."</tr></tr>";
            }
        }

        $sql = "SELECT * FROM `student` WHERE student_id='2'";
        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
            if($row = mysqli_fetch_assoc($result)) {
               $studentID2 = $row["student_id"];
               $full_name2 = $row["full_name"];
               $contactNo2 = $row["contact_no"];
               $schoolName2 = $row["school_name"];
               $yearEnrolled2 = $row["year_enrolled"];
               $serialNo2 = $row["serial_number"];
               $ProjectID2 = $row["project_id"];
            }
        }

        $sql = "SELECT * FROM `student` WHERE student_id='3'";
        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
            if($row = mysqli_fetch_assoc($result)) {
               $studentID3 = $row["student_id"];
               $full_name3 = $row["full_name"];
               $contactNo3 = $row["contact_no"];
               $schoolName3 = $row["school_name"];
               $yearEnrolled3 = $row["year_enrolled"];
               $serialNo3 = $row["serial_number"];
               $ProjectID3 = $row["project_id"];
            }
        }

        $sql = "SELECT * FROM `student` WHERE student_id='4'";
        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
            if($row = mysqli_fetch_assoc($result)) {
               $studentID4 = $row["student_id"];
               $full_name4 = $row["full_name"];
               $contactNo4 = $row["contact_no"];
               $schoolName4 = $row["school_name"];
               $yearEnrolled4 = $row["year_enrolled"];
               $serialNo4 = $row["serial_number"];
               $ProjectID4 = $row["project_id"];
            }
        }

        $sql = "SELECT * FROM `student` WHERE student_id='5'";
        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
            if($row = mysqli_fetch_assoc($result)) {
               $studentID5 = $row["student_id"];
               $full_name5 = $row["full_name"];
               $contactNo5 = $row["contact_no"];
               $schoolName5 = $row["school_name"];
               $yearEnrolled5 = $row["year_enrolled"];
               $serialNo5 = $row["serial_number"];
               $ProjectID5 = $row["project_id"];
            }
        }

        $sql = "SELECT * FROM `student` WHERE student_id='6'";
        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
            if($row = mysqli_fetch_assoc($result)) {
               $studentID6 = $row["student_id"];
               $full_name6 = $row["full_name"];
               $contactNo6 = $row["contact_no"];
               $schoolName6 = $row["school_name"];
               $yearEnrolled6 = $row["year_enrolled"];
               $serialNo6 = $row["serial_number"];
               $ProjectID6 = $row["project_id"];
            }
        }

        $sql = "SELECT * FROM `student` WHERE student_id='7'";
        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
            if($row = mysqli_fetch_assoc($result)) {
               $studentID7 = $row["student_id"];
               $full_name7 = $row["full_name"];
               $contactNo7 = $row["contact_no"];
               $schoolName7 = $row["school_name"];
               $yearEnrolled7 = $row["year_enrolled"];
               $serialNo7 = $row["serial_number"];
               $ProjectID7 = $row["project_id"];
            }
        }

        $sql = "SELECT * FROM student s, notebook n where s.serial_number = n.serial_number and s.student_id='1'";
        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
            if($row = mysqli_fetch_assoc($result)) {
                $studentID = $row["student_id"];
                $full_name = $row["full_name"];
                $make = $row["make"];
                $model = $row["model"];
                $processor = $row["processor"];
                $hardDisk = $row["hard_disk_capacity"];
                $ram = $row["amount_of_RAM"];
                $operatingSystem = $row["operating_system"];               
            }
        }

        $sql = "SELECT * FROM student s, notebook n where s.serial_number = n.serial_number and s.student_id='2'";
        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
            if($row = mysqli_fetch_assoc($result)) {
                $studentID2 = $row["student_id"];
                $full_name2 = $row["full_name"];
                $make2 = $row["make"];
                $model2 = $row["model"];
                $processor2 = $row["processor"];
                $hardDisk2 = $row["hard_disk_capacity"];
                $ram2 = $row["amount_of_RAM"];
                $operatingSystem2 = $row["operating_system"];               
            }
        }
    }
?>

<!DOCTYPE html>
<html>
   <head>
      <title>Admin</title>
      <style>#loader{transition:all .3s ease-in-out;opacity:1;visibility:visible;position:fixed;height:100vh;width:100%;background:#fff;z-index:90000}#loader.fadeOut{opacity:0;visibility:hidden}.spinner{width:40px;height:40px;position:absolute;top:calc(50% - 20px);left:calc(50% - 20px);background-color:#333;border-radius:100%;-webkit-animation:sk-scaleout 1s infinite ease-in-out;animation:sk-scaleout 1s infinite ease-in-out}@-webkit-keyframes sk-scaleout{0%{-webkit-transform:scale(0)}100%{-webkit-transform:scale(1);opacity:0}}@keyframes sk-scaleout{0%{-webkit-transform:scale(0);transform:scale(0)}100%{-webkit-transform:scale(1);transform:scale(1);opacity:0}}</style>
      <link href="https://colorlib.com/polygon/adminator/style.css" rel="stylesheet">
   </head>
   <body class="app">
      <div id="loader">
         <div class="spinner"></div>
      </div>
      <script type="text/javascript">window.addEventListener('load', () => {
         const loader = document.getElementById('loader');
         setTimeout(() => {
           loader.classList.add('fadeOut');
         }, 300);
         });
      </script>
      <div>
         <div class="sidebar">
            <div class="sidebar-inner">
               <div class="sidebar-logo">
                  <div class="peers ai-c fxw-nw">
                     <div class="peer peer-greed">
                        <a class="sidebar-link td-n" href="#" class="td-n">
                           <div class="peers ai-c fxw-nw">
                              <div class="peer">
                                 <div class="logo"></div>
                              </div>
                              <div class="peer peer-greed">
                                 <h5 class="lh-1 mB-0 logo-text">IRL</h5>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="peer">
                        <div class="mobile-toggle sidebar-toggle"><a href="" class="td-n"><i class="ti-arrow-circle-left"></i></a></div>
                     </div>
                  </div>
               </div>
               <ul class="sidebar-menu scrollable pos-r">
                  <li class="nav-item mT-30 active"><a class="sidebar-link" href="/DDWA-Asg1/Admin.php" default><span class="icon-holder"><i class="c-blue-500 ti-home"></i> </span><span class="title">My Project</span></a></li>
                  <li class="nav-item"><a class="sidebar-link" href="/DDWA-Asg1/Admin_StudentInfo.php"><span class="icon-holder"><i class="c-brown-500 ti-email"></i> </span><span class="title">Student Info</span></a></li>
                  <li class="nav-item"><a class="sidebar-link" href="/DDWA-Asg1/AdminLecturerInfo.php"><span class="icon-holder"><i class="c-blue-500 ti-share"></i> </span><span class="title">Lecturer Info</span></a></li>
               </ul>
            </div>
         </div>
         <div class="page-container">
            <div class="header navbar">
               <div class="header-container">
                  <ul class="nav-left">
                     <li><a id="sidebar-toggle" class="sidebar-toggle" href="javascript:void(0);"><i class="ti-menu"></i></a></li>

                  </ul>
                  <ul class="nav-right">
                   
                     <li class="dropdown">
                        <a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
                           <div class="peer mR-10"><img class="w-2r bdrs-50p" src="" alt=""></div>
                           <div class="peer"><span class="fsz-sm c-grey-900"><?php echo $fullName?></span></div>
                        </a>
                        <ul class="dropdown-menu fsz-sm">
                           <li><a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-settings mR-10"></i> <span>Setting</span></a></li>
                           <li><a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-user mR-10"></i> <span>Profile</span></a></li>
                           <li><a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-email mR-10"></i> <span>Messages</span></a></li>
                           <li role="separator" class="divider"></li>
                           <li><a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-power-off mR-10"></i> <span>Logout</span></a></li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </div>
            <main class="main-content bgc-grey-100">
               <div id="mainContent">
                  <div class="container-fluid">
                     <h4 class="c-grey-900 mT-10 mB-30">Admin Page</h4>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="bgc-white bd bdrs-3 p-20 mB-20">
                              <h4 class="c-grey-900 mB-20">Student Information</h4>
                              <p>Students</p>
                              <table class="table">
                                 <thead>
                                    <tr>
                                       <th scope="col">Student ID</th>
                                       <th scope="col">Student Name</th>
                                       <th scope="col">Conact Number</th>
                                       <th scope="col">School Name</th>
                                       <th scope="col">Year Enrolled</th>
                                       <th scope="col">Notebook Serial Number</th>
                                       <th scope="col">Current Project ID</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td><?php echo $studentID?></td>
                                       <td><?php echo $full_name?></td>
                                       <td><?php echo $contactNo?></td>
                                       <td><?php echo $schoolName?></td>
                                       <td><?php echo $yearEnrolled?></td>
                                       <td><?php echo $serialNo?></td>
                                       <td><?php echo $ProjectID?></td>
                                    </tr>

                                    <tr>
                                       <td><?php echo $studentID2?></td>
                                       <td><?php echo $full_name2?></td>
                                       <td><?php echo $contactNo2?></td>
                                       <td><?php echo $schoolName2?></td>
                                       <td><?php echo $yearEnrolled2?></td>
                                       <td><?php echo $serialNo2?></td>
                                       <td><?php echo $ProjectID2?></td>
                                    </tr>

                                    <tr>
                                       <td><?php echo $studentID3?></td>
                                       <td><?php echo $full_name3?></td>
                                       <td><?php echo $contactNo3?></td>
                                       <td><?php echo $schoolName3?></td>
                                       <td><?php echo $yearEnrolled3?></td>
                                       <td><?php echo $serialNo3?></td>
                                       <td><?php echo $ProjectID3?></td>
                                    </tr>

                                    <tr>
                                       <td><?php echo $studentID4?></td>
                                       <td><?php echo $full_name4?></td>
                                       <td><?php echo $contactNo4?></td>
                                       <td><?php echo $schoolName4?></td>
                                       <td><?php echo $yearEnrolled4?></td>
                                       <td><?php echo $serialNo4?></td>
                                       <td><?php echo $ProjectID4?></td>
                                    </tr>

                                    <tr>
                                       <td><?php echo $studentID5?></td>
                                       <td><?php echo $full_name5?></td>
                                       <td><?php echo $contactNo5?></td>
                                       <td><?php echo $schoolName5?></td>
                                       <td><?php echo $yearEnrolled5?></td>
                                       <td><?php echo $serialNo5?></td>
                                       <td><?php echo $ProjectID5?></td>
                                    </tr>

                                    <tr>
                                       <td><?php echo $studentID6?></td>
                                       <td><?php echo $full_name6?></td>
                                       <td><?php echo $contactNo6?></td>
                                       <td><?php echo $schoolName6?></td>
                                       <td><?php echo $yearEnrolled6?></td>
                                       <td><?php echo $serialNo6?></td>
                                       <td><?php echo $ProjectID6?></td>
                                    </tr>

                                    <tr>
                                       <td><?php echo $studentID7?></td>
                                       <td><?php echo $full_name7?></td>
                                       <td><?php echo $contactNo7?></td>
                                       <td><?php echo $schoolName7?></td>
                                       <td><?php echo $yearEnrolled7?></td>
                                       <td><?php echo $serialNo7?></td>
                                       <td><?php echo $ProjectID7?></td>
                                    </tr>
                                 </tbody>
                              </table><br>
                              <p>Student Notebooks</p>
                              <table class="table">
                                 <thead>
                                    <tr>
                                       <th scope="col">Make</th>
                                       <th scope="col">Model</th>
                                       <th scope="col">Processor</th>
                                       <th scope="col">Hard Disk</th>
                                       <th scope="col">Amount of Ram</th>
                                       <th scope="col">Operating System</th>
                                       <th scope="col">Student ID</th>
                                       <th scope="col">Student Name</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td><?php echo $make?></td>
                                       <td><?php echo $model?></td>
                                       <td><?php echo $processor?></td>
                                       <td><?php echo $hardDisk?></td>
                                       <td><?php echo $ram?></td>
                                       <td><?php echo $operatingSystem?></td>
                                       <td><?php echo $studentID?></td>
                                       <td><?php echo $full_name?></td>
                                    </tr>

                                    <tr>
                                       <td><?php echo $make2?></td>
                                       <td><?php echo $model2?></td>
                                       <td><?php echo $processor2?></td>
                                       <td><?php echo $hardDisk2?></td>
                                       <td><?php echo $ram2?></td>
                                       <td><?php echo $operatingSystem2?></td>
                                       <td><?php echo $studentID2?></td>
                                       <td><?php echo $full_name2?></td>
                                    </tr>
                                 </tbody>
                              </table><br>
                           </div>
                        </div>
                     </div>
                    
               </div>
            </main>
            <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600">
               <span>No Copyright © 2020 DDWA Chen Shiyu S10196930</span>
              
            </footer>
         </div>
      </div>
      <script type="text/javascript" src="JS/vendor.js"></script><script type="text/javascript" src="JS/bundle.js"></script>
   </body>
</html>