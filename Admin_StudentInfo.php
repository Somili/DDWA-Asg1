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

        $sql = "SELECT * FROM `student` WHERE student_id='2'";
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
                  <li class="nav-item mT-30 active"><a class="sidebar-link" href="#" default><span class="icon-holder"><i class="c-blue-500 ti-home"></i> </span><span class="title">My Project</span></a></li>
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
                                 </tbody>
                              </table>

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
                                       <td><?php echo $studentID2?></td>
                                       <td><?php echo $full_name2?></td>
                                       <td><?php echo $contactNo2?></td>
                                       <td><?php echo $schoolName2?></td>
                                       <td><?php echo $yearEnrolled2?></td>
                                       <td><?php echo $serialNo2?></td>
                                       <td><?php echo $ProjectID2?></td>
                                    </tr>
                                 </tbody>
                              </table>
                              
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
                                       <td><?php echo $studentID3?></td>
                                       <td><?php echo $full_name3?></td>
                                       <td><?php echo $contactNo3?></td>
                                       <td><?php echo $schoolName3?></td>
                                       <td><?php echo $yearEnrolled3?></td>
                                       <td><?php echo $serialNo3?></td>
                                       <td><?php echo $ProjectID3?></td>
                                    </tr>
                                 </tbody>
                              </table>
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