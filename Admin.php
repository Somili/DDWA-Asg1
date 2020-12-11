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
                $admin_ID = $row["admin_id"];
                $fullName = $row["admin_name"];
                $adminOffice = $row["office"];
            }
         }
         $sql = "SELECT * FROM student s, project p, lecturer_project l where l.project_id = s.project_id and s.project_id = p.project_id and l.project_id='1'";
         $result = $connection->query($sql);
         if ($result->num_rows > 0) {
            if($row = mysqli_fetch_assoc($result)) {
               $studentID = $row["student_id"];
               $title = $row["title"];
               $description = $row["short_description"];
               $company = $row["company_name"];
               $budget = $row["budget"];
               $startDate = $row["start_date"];
               $endDate = $row["completion_date"];
               $lecturerID = $row["lecturer_id"];
            }
         }
         $sql = "SELECT * FROM student s, project p, lecturer_project l where l.project_id = s.project_id and s.project_id = p.project_id and l.project_id='2'";
         $result = $connection->query($sql);
         if ($result->num_rows > 0) {
            if($row = mysqli_fetch_assoc($result)) {
               $studentID2 = $row["student_id"];
               $title2 = $row["title"];
               $description2 = $row["short_description"];
               $company2 = $row["company_name"];
               $budget2 = $row["budget"];
               $startDate2 = $row["start_date"];
               $endDate2 = $row["completion_date"];
               $lecturerID2 = $row["lecturer_id"];
            }
         }
         $sql = "SELECT * FROM student s, project p, lecturer_project l where l.project_id = s.project_id and s.project_id = p.project_id and l.project_id='3'";
         $result = $connection->query($sql);
         if ($result->num_rows > 0) {
            if($row = mysqli_fetch_assoc($result)) {
               $studentID3 = $row["student_id"];
               $title3 = $row["title"];
               $description3 = $row["short_description"];
               $company3 = $row["company_name"];
               $budget3 = $row["budget"];
               $startDate3 = $row["start_date"];
               $endDate3 = $row["completion_date"];
               $lecturerID3 = $row["lecturer_id"];
            }
         }
         $sql = "SELECT * FROM student s, project p, lecturer_project l where l.project_id = s.project_id and s.project_id = p.project_id and l.project_id='4'";
         $result = $connection->query($sql);
         if ($result->num_rows > 0) {
            if($row = mysqli_fetch_assoc($result)) {
               $studentID4 = $row["student_id"];
               $title4 = $row["title"];
               $description4 = $row["short_description"];
               $company4 = $row["company_name"];
               $budget4 = $row["budget"];
               $startDate4 = $row["start_date"];
               $endDate4 = $row["completion_date"];
               $lecturerID4 = $row["lecturer_id"];
            }
         }
         $sql = "SELECT * FROM student s, project p, lecturer_project l where l.project_id = s.project_id and s.project_id = p.project_id and l.project_id='5'";
         $result = $connection->query($sql);
         if ($result->num_rows > 0) {
            if($row = mysqli_fetch_assoc($result)) {
               $studentID5 = $row["student_id"];
               $title5 = $row["title"];
               $description5 = $row["short_description"];
               $company5 = $row["company_name"];
               $budget5 = $row["budget"];
               $startDate5 = $row["start_date"];
               $endDate5 = $row["completion_date"];
               $lecturerID5 = $row["lecturer_id"];
            }
         }
         $sql = "SELECT * FROM student s, project p, lecturer_project l where l.project_id = s.project_id and s.project_id = p.project_id and l.project_id='6'";
         $result = $connection->query($sql);
         if ($result->num_rows > 0) {
            if($row = mysqli_fetch_assoc($result)) {
               $studentID6 = $row["student_id"];
               $title6 = $row["title"];
               $description6 = $row["short_description"];
               $company6 = $row["company_name"];
               $budget6 = $row["budget"];
               $startDate6 = $row["start_date"];
               $endDate6 = $row["completion_date"];
               $lecturerID6 = $row["lecturer_id"];
            }
         }
         $sql = "SELECT * FROM student s, project p, lecturer_project l where l.project_id = s.project_id and s.project_id = p.project_id and l.project_id='7'";
         $result = $connection->query($sql);
         if ($result->num_rows > 0) {
            if($row = mysqli_fetch_assoc($result)) {
               $studentID7 = $row["student_id"];
               $title7 = $row["title"];
               $description7 = $row["short_description"];
               $company7 = $row["company_name"];
               $budget7 = $row["budget"];
               $startDate7 = $row["start_date"];
               $endDate7 = $row["completion_date"];
               $lecturerID7 = $row["lecturer_id"];
            }
         }

         $sql = "SELECT * FROM student s, project p, lecturer_project l where l.project_id = s.project_id and s.project_id = p.project_id and l.lecturer_id='8'";
         $result = $connection->query($sql);
         if ($result->num_rows > 0) {
            if($row = mysqli_fetch_assoc($result)) {
               $studentID8 = $row["student_id"];
               $title8 = $row["title"];
               $description8 = $row["short_description"];
               $company8 = $row["company_name"];
               $budget8 = $row["budget"];
               $startDate8 = $row["start_date"];
               $endDate8 = $row["completion_date"];
               $lecturerID8 = $row["lecturer_id"];
            }
         }

         $sql = "SELECT * FROM student s, project p, lecturer_project l where l.project_id = s.project_id and s.project_id = p.project_id and l.lecturer_id='9'";
         $result = $connection->query($sql);
         if ($result->num_rows > 0) {
            if($row = mysqli_fetch_assoc($result)) {
               $studentID9 = $row["student_id"];
               $title9 = $row["title"];
               $description9 = $row["short_description"];
               $company9 = $row["company_name"];
               $budget9 = $row["budget"];
               $startDate9 = $row["start_date"];
               $endDate9 = $row["completion_date"];
               $lecturerID9 = $row["lecturer_id"];
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
                  <li class="nav-item mT-30 active"><a class="sidebar-link" href="#" default><span class="icon-holder"><i class="c-blue-500 ti-home"></i> </span><span class="title">Home</span></a></li>
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
                              <h4 class="c-grey-900 mB-20">Admin Particulars</h4>
                              <p>Your particulars</p>
                              <table class="table">
                                 <thead>
                                    <tr>
                                       <th scope="col">Admin ID</th>
                                       <th scope="col">Admin Name</th>
                                       <th scope="col">Your Office</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td><?php echo $admin_ID?></td>
                                       <td><?php echo $fullName?></td>
                                       <td><?php echo $adminOffice?></td>
                                    </tr>
                                 </tbody>
                              </table><br>
                              <p>Active Projects with Students and Lecturers</p>
                              <table class="table">
                                 <thead>
                                    <tr>
                                       <th scope="col">Project Title</th>
                                       <th scope="col">Description</th>
                                       <th scope="col">Company</th>
                                       <th scope="col">Budget</th>
                                       <th scope="col">Start Date</th>
                                       <th scope="col">End Date</th>
                                       <th scope="col">Student ID</th>
                                       <th scope="col">Lecturer ID</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td><?php echo $title?></td>
                                       <td><?php echo $description?></td>
                                       <td><?php echo $company?></td>
                                       <td><?php echo $budget?></td>
                                       <td><?php echo $startDate?></td>
                                       <td><?php echo $endDate?></td>
                                       <td><?php echo $studentID?></td>
                                       <td><?php echo $lecturerID?></td>
                                    </tr>
                                    <tr>
                                       <td><?php echo $title2?></td>
                                       <td><?php echo $description2?></td>
                                       <td><?php echo $company2?></td>
                                       <td><?php echo $budget2?></td>
                                       <td><?php echo $startDate2?></td>
                                       <td><?php echo $endDate2?></td>
                                       <td><?php echo $studentID2?></td>
                                       <td><?php echo $lecturerID2?></td>
                                    </tr>
                                    <tr>
                                       <td><?php echo $title3?></td>
                                       <td><?php echo $description3?></td>
                                       <td><?php echo $company3?></td>
                                       <td><?php echo $budget3?></td>
                                       <td><?php echo $startDate3?></td>
                                       <td><?php echo $endDate3?></td>
                                       <td><?php echo $studentID3?></td>
                                       <td><?php echo $lecturerID3?></td>
                                    </tr>
                                    <tr>
                                       <td><?php echo $title4?></td>
                                       <td><?php echo $description4?></td>
                                       <td><?php echo $company4?></td>
                                       <td><?php echo $budget4?></td>
                                       <td><?php echo $startDate4?></td>
                                       <td><?php echo $endDate4?></td>
                                       <td><?php echo $studentID4?></td>
                                       <td><?php echo $lecturerID4?></td>
                                    </tr>
                                    <tr>
                                       <td><?php echo $title5?></td>
                                       <td><?php echo $description5?></td>
                                       <td><?php echo $company5?></td>
                                       <td><?php echo $budget5?></td>
                                       <td><?php echo $startDate5?></td>
                                       <td><?php echo $endDate5?></td>
                                       <td><?php echo $studentID5?></td>
                                       <td><?php echo $lecturerID5?></td>
                                    </tr>
                                    <tr>
                                       <td><?php echo $title6?></td>
                                       <td><?php echo $description6?></td>
                                       <td><?php echo $company6?></td>
                                       <td><?php echo $budget6?></td>
                                       <td><?php echo $startDate6?></td>
                                       <td><?php echo $endDate6?></td>
                                       <td><?php echo $studentID6?></td>
                                       <td><?php echo $lecturerID6?></td>
                                    </tr>
                                    <tr>
                                       <td><?php echo $title7?></td>
                                       <td><?php echo $description7?></td>
                                       <td><?php echo $company7?></td>
                                       <td><?php echo $budget7?></td>
                                       <td><?php echo $startDate7?></td>
                                       <td><?php echo $endDate7?></td>
                                       <td><?php echo $studentID7?></td>
                                       <td><?php echo $lecturerID7?></td>
                                    </tr>
                                    <tr>
                                       <td><?php echo $title8?></td>
                                       <td><?php echo $description8?></td>
                                       <td><?php echo $company8?></td>
                                       <td><?php echo $budget8?></td>
                                       <td><?php echo $startDate8?></td>
                                       <td><?php echo $endDate8?></td>
                                       <td><?php echo $studentID8?></td>
                                       <td><?php echo $lecturerID8?></td>
                                    </tr>
                                    <tr>
                                       <td><?php echo $title9?></td>
                                       <td><?php echo $description9?></td>
                                       <td><?php echo $company9?></td>
                                       <td><?php echo $budget9?></td>
                                       <td><?php echo $startDate9?></td>
                                       <td><?php echo $endDate9?></td>
                                       <td><?php echo $studentID9?></td>
                                       <td><?php echo $lecturerID9?></td>
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