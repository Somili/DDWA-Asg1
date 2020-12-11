<?php
    session_start();
    $loginUserID="2";
    $fullName = "";

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
      $sql = "SELECT * FROM `admin` WHERE admin_id=" . $loginUserID . "";
      $result = $connection->query($sql);
      if ($result->num_rows > 0) {
          if($row = mysqli_fetch_assoc($result)) {
            $fullName = $row["admin_name"];
        }
     }
        $sql = "SELECT * FROM `lecturer` WHERE lecturer_id='1'";
        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
            if($row = mysqli_fetch_assoc($result)) {
               $studentID = $row["lecturer_id"];
               $full_name = $row["full_name"];
               $contactNo = $row["contact_no"];
               $password = $row["password"];
               $officeLocation = $row["office_location"];
               $dateJoined = $row["date_joined"];
               $ProjectID = $row["project_id"];

            }
        }
        $sql = "SELECT * FROM `lecturer` WHERE lecturer_id='1'";
        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
            if($row = mysqli_fetch_assoc($result)) {
               $studentID2 = $row["lecturer_id"];
               $full_name2 = $row["full_name"];
               $contactNo2 = $row["contact_no"];
               $password2 = $row["password"];
               $officeLocation2 = $row["office_location"];
               $dateJoined2 = $row["date_joined"];
               $ProjectID2 = $row["project_id"];

            }
        }
        $sql = "SELECT * FROM `lecturer` WHERE lecturer_id='3'";
        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
            if($row = mysqli_fetch_assoc($result)) {
               $studentID3 = $row["lecturer_id"];
               $full_name3 = $row["full_name"];
               $contactNo3 = $row["contact_no"];
               $password3 = $row["password"];
               $officeLocation3 = $row["office_location"];
               $dateJoined3 = $row["date_joined"];
               $ProjectID3 = $row["project_id"];

            }
        }
        $sql = "SELECT * FROM `lecturer` WHERE lecturer_id='4'";
        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
            if($row = mysqli_fetch_assoc($result)) {
               $studentID4 = $row["lecturer_id"];
               $full_name4 = $row["full_name"];
               $contactNo4 = $row["contact_no"];
               $password4 = $row["password"];
               $officeLocation4 = $row["office_location"];
               $dateJoined4 = $row["date_joined"];
               $ProjectID4 = $row["project_id"];

            }
        }
        $sql = "SELECT * FROM `lecturer` WHERE lecturer_id='5'";
        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
            if($row = mysqli_fetch_assoc($result)) {
               $studentID5 = $row["lecturer_id"];
               $full_name5 = $row["full_name"];
               $contactNo5 = $row["contact_no"];
               $password5 = $row["password"];
               $officeLocation5 = $row["office_location"];
               $dateJoined5 = $row["date_joined"];
               $ProjectID5 = $row["project_id"];

            }
        }
        $sql = "SELECT * FROM `lecturer` WHERE lecturer_id='6'";
        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
            if($row = mysqli_fetch_assoc($result)) {
               $studentID6 = $row["lecturer_id"];
               $full_name6 = $row["full_name"];
               $contactNo6 = $row["contact_no"];
               $password6 = $row["password"];
               $officeLocation6 = $row["office_location"];
               $dateJoined6 = $row["date_joined"];
               $ProjectID6 = $row["project_id"];

            }
        }
        $sql = "SELECT * FROM `lecturer` WHERE lecturer_id='7'";
        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
            if($row = mysqli_fetch_assoc($result)) {
               $studentID7 = $row["lecturer_id"];
               $full_name7 = $row["full_name"];
               $contactNo7 = $row["contact_no"];
               $password7 = $row["password"];
               $officeLocation7 = $row["office_location"];
               $dateJoined7 = $row["date_joined"];
               $ProjectID7 = $row["project_id"];

            }
        }
        $sql = "SELECT * FROM `lecturer` WHERE lecturer_id='8'";
        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
            if($row = mysqli_fetch_assoc($result)) {
               $studentID8 = $row["lecturer_id"];
               $full_name8 = $row["full_name"];
               $contactNo8 = $row["contact_no"];
               $password8 = $row["password"];
               $officeLocation8 = $row["office_location"];
               $dateJoined8 = $row["date_joined"];
               $ProjectID8 = $row["project_id"];

            }
        }
        $sql = "SELECT * FROM `lecturer` WHERE lecturer_id='9'";
        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
            if($row = mysqli_fetch_assoc($result)) {
               $studentID9 = $row["lecturer_id"];
               $full_name9 = $row["full_name"];
               $contactNo9 = $row["contact_no"];
               $password9 = $row["password"];
               $officeLocation9 = $row["office_location"];
               $dateJoined9 = $row["date_joined"];
               $ProjectID9 = $row["project_id"];

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
                  <li class="nav-item mT-30 active"><a class="sidebar-link" href="/DDWA-Asg1/Admin.php" default><span class="icon-holder"><i class="c-blue-500 ti-home"></i> </span><span class="title">Home</span></a></li>
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
                           <li><a href="/DDWA-Asg1/Login.php" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-power-off mR-10"></i> <span>Log Out</span></a></li>
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
                              <h4 class="c-grey-900 mB-20">Lecturer Information</h4>
                              <p>Lecturer Particulars</p>                          
                              <table class="table">
                                 <thead>
                                    <tr>
                                       <th scope="col">Lecturer ID</th>
                                       <th scope="col">Lecturer Name</th>
                                       <th scope="col">Conact Number</th>
                                       <th scope="col">Password</th>
                                       <th scope="col">Office Location</th>
                                       <th scope="col">Date Joined</th>
                                       <th scope="col">Current Project ID</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td><?php echo $studentID?></td>
                                       <td><?php echo $full_name?></td>
                                       <td><?php echo $contactNo?></td>
                                       <td><?php echo $password?></td>
                                       <td><?php echo $officeLocation?></td>
                                       <td><?php echo $dateJoined?></td>
                                       <td><?php echo $ProjectID?></td>
                                    </tr>
                                    <tr>
                                       <td><?php echo $studentID2?></td>
                                       <td><?php echo $full_name2?></td>
                                       <td><?php echo $contactNo2?></td>
                                       <td><?php echo $password2?></td>
                                       <td><?php echo $officeLocation2?></td>
                                       <td><?php echo $dateJoined2?></td>
                                       <td><?php echo $ProjectID2?></td>
                                    </tr>
                                    <tr>
                                       <td><?php echo $studentID3?></td>
                                       <td><?php echo $full_name3?></td>
                                       <td><?php echo $contactNo3?></td>
                                       <td><?php echo $password3?></td>
                                       <td><?php echo $officeLocation3?></td>
                                       <td><?php echo $dateJoined3?></td>
                                       <td><?php echo $ProjectID3?></td>
                                    </tr>
                                    <tr>
                                       <td><?php echo $studentID4?></td>
                                       <td><?php echo $full_name4?></td>
                                       <td><?php echo $contactNo4?></td>
                                       <td><?php echo $password4?></td>
                                       <td><?php echo $officeLocation4?></td>
                                       <td><?php echo $dateJoined4?></td>
                                       <td><?php echo $ProjectID4?></td>
                                    </tr>
                                    <tr>
                                       <td><?php echo $studentID5?></td>
                                       <td><?php echo $full_name5?></td>
                                       <td><?php echo $contactNo5?></td>
                                       <td><?php echo $password5?></td>
                                       <td><?php echo $officeLocation5?></td>
                                       <td><?php echo $dateJoined5?></td>
                                       <td><?php echo $ProjectID5?></td>
                                    </tr>
                                    <tr>
                                       <td><?php echo $studentID6?></td>
                                       <td><?php echo $full_name6?></td>
                                       <td><?php echo $contactNo6?></td>
                                       <td><?php echo $password6?></td>
                                       <td><?php echo $officeLocation6?></td>
                                       <td><?php echo $dateJoined6?></td>
                                       <td><?php echo $ProjectID6?></td>
                                    </tr>
                                    <tr>
                                       <td><?php echo $studentID7?></td>
                                       <td><?php echo $full_name7?></td>
                                       <td><?php echo $contactNo7?></td>
                                       <td><?php echo $password7?></td>
                                       <td><?php echo $officeLocation7?></td>
                                       <td><?php echo $dateJoined7?></td>
                                       <td><?php echo $ProjectID7?></td>
                                    </tr>
                                    <tr>
                                       <td><?php echo $studentID8?></td>
                                       <td><?php echo $full_name8?></td>
                                       <td><?php echo $contactNo8?></td>
                                       <td><?php echo $password8?></td>
                                       <td><?php echo $officeLocation8?></td>
                                       <td><?php echo $dateJoined8?></td>
                                       <td><?php echo $ProjectID8?></td>
                                    </tr>
                                    <tr>
                                       <td><?php echo $studentID9?></td>
                                       <td><?php echo $full_name9?></td>
                                       <td><?php echo $contactNo9?></td>
                                       <td><?php echo $password9?></td>
                                       <td><?php echo $officeLocation9?></td>
                                       <td><?php echo $dateJoined9?></td>
                                       <td><?php echo $ProjectID9?></td>
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