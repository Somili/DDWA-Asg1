<?php
    session_start();
    $loginUserID="1";
    $fullName = "";
    $title = "";
    $description = "";
    $company = "";
    $budget = "";
    $startDate = "";
    $endDate = "";
    $full_L_name = "";
    $dateJoined = "";
    $officeLocation = "";
    $contactNumber = "";
    $lecturer_ID = "";
    $projectID = "";
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
        $sql = "SELECT * FROM lecturer l, project p where l.project_id = p.project_id and l.lecturer_id=" . $loginUserID;
        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
            if($row = mysqli_fetch_assoc($result)) {
                $fullName = $row["full_name"];
                $title = $row["title"];
                $description = $row["short_description"];
                $company = $row["company_name"];
                $budget = $row["budget"];
                $startDate = $row["start_date"];
                $endDate = $row["completion_date"];
            }
        }

        $sql = "SELECT * FROM lecturer WHERE lecturer_id=" . $loginUserID;
        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
            if($row = mysqli_fetch_assoc($result)) {
                $lecturer_ID = $row["lecturer_id"];
                $full_L_name = $row["full_name"];
                $dateJoined = $row["date_joined"];
                $officeLocation = $row["office_location"];
                $contactNumber = $row["contact_no"];
                $projectID = $row["project_id"];
            }
        }
    }
?>

<!DOCTYPE html>
<html>
   <head>
      <title>Lecturer</title>
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
                  <li class="nav-item"><a class="sidebar-link" href="#"><span class="icon-holder"><i class="c-brown-500 ti-email"></i> </span><span class="title">My Notebook</span></a></li>
                  <li class="nav-item"><a class="sidebar-link" href="#"><span class="icon-holder"><i class="c-blue-500 ti-share"></i> </span><span class="title">My Particulars</span></a></li>
                  <li class="nav-item"><a class="sidebar-link" href="#"><span class="icon-holder"><i class="c-deep-orange-500 ti-calendar"></i> </span><span class="title">My Settings</span></a></li>
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
                     <h4 class="c-grey-900 mT-10 mB-30">Lecturer Details</h4>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="bgc-white bd bdrs-3 p-20 mB-20">
                              <h4 class="c-grey-900 mB-20">Active Projects</h4>
                              <p>This table displays the list of active projects that you are currently supervising.</p>
                              <table class="table">
                                 <thead>
                                    <tr>
                                       <th scope="col">Project Title</th>
                                       <th scope="col">Short Description</th>
                                       <th scope="col">Company</th>
                                       <th scope="col">Budget</th>
                                       <th scope="col">Start Date</th>
                                       <th scope="col">Completion Date</th>
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
                                    </tr>
                                 </tbody>
                              </table><br>
                              <p>Your particulars</p>
                              <table class="table">
                                 <thead>
                                    <tr>
                                       <th scope="col">Lecturer ID</th>
                                       <th scope="col">Your Name</th>
                                       <th scope="col">Date Joined</th>
                                       <th scope="col">Office Location</th>
                                       <th scope="col">Contact Number</th>
                                       <th scope="col">Project ID</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td><?php echo $lecturer_ID?></td>
                                       <td><?php echo $full_L_name?></td>
                                       <td><?php echo $dateJoined?></td>
                                       <td><?php echo $officeLocation?></td>
                                       <td><?php echo $contactNumber?></td>
                                       <td><?php echo $projectID?></td>
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