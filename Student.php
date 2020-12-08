<?php
    session_start();
    $loginUserID="1";
    $fullName = "John Doe";
    $title = "";
    $description = "";
    $company = "";
    $budget = "";
    $startDate = "";
    $endDate = "";
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
        $sql = "SELECT * FROM student s, project p where s.project_id = p.project_id and s.student_id=" . $loginUserID;

        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
            if($row = mysqli_fetch_assoc($result)) {
                $fullName = $row["full_name"];
                $title = $row["title"];
                $description = $row["short_description"];
                $company = "";
                $budget = "";
                $startDate = "";
                $endDate = "";
            }
        }
    }
?>

<!DOCTYPE html>
<html>
   <head>
      <title>Student</title>
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
                                 <h5 class="lh-1 mB-0 logo-text">DDWA</h5>
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
                     <!--<li class="search-box"><a class="search-toggle no-pdd-right" href="javascript:void(0);"><i class="search-icon ti-search pdd-right-10"></i> <i class="search-icon-close ti-close pdd-right-10"></i></a></li>
                     <li class="search-input"><input class="form-control" type="text" placeholder="Search..."></li>-->
                  </ul>
                  <ul class="nav-right">
                     <!--<li class="notifications dropdown">
                        <span class="counter bgc-red">3</span> <a href="" class="dropdown-toggle no-after" data-toggle="dropdown"><i class="ti-bell"></i></a>
                        <ul class="dropdown-menu">
                           <li class="pX-20 pY-15 bdB"><i class="ti-bell pR-10"></i> <span class="fsz-sm fw-600 c-grey-900">Notifications</span></li>
                           <li>
                              <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
                                 <li>
                                    <a href="" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                       <div class="peer mR-15"><img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/1.jpg" alt=""></div>
                                       <div class="peer peer-greed">
                                          <span><span class="fw-500">John Doe</span> <span class="c-grey-600">liked your <span class="text-dark">post</span></span></span>
                                          <p class="m-0"><small class="fsz-xs">5 mins ago</small></p>
                                       </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                       <div class="peer mR-15"><img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/2.jpg" alt=""></div>
                                       <div class="peer peer-greed">
                                          <span><span class="fw-500">Moo Doe</span> <span class="c-grey-600">liked your <span class="text-dark">cover image</span></span></span>
                                          <p class="m-0"><small class="fsz-xs">7 mins ago</small></p>
                                       </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                       <div class="peer mR-15"><img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/3.jpg" alt=""></div>
                                       <div class="peer peer-greed">
                                          <span><span class="fw-500">Lee Doe</span> <span class="c-grey-600">commented on your <span class="text-dark">video</span></span></span>
                                          <p class="m-0"><small class="fsz-xs">10 mins ago</small></p>
                                       </div>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="pX-20 pY-15 ta-c bdT"><span><a href="" class="c-grey-600 cH-blue fsz-sm td-n">View All Notifications <i class="ti-angle-right fsz-xs mL-10"></i></a></span></li>
                        </ul>
                     </li>
                     <li class="notifications dropdown">
                        <span class="counter bgc-blue">3</span> <a href="" class="dropdown-toggle no-after" data-toggle="dropdown"><i class="ti-email"></i></a>
                        <ul class="dropdown-menu">
                           <li class="pX-20 pY-15 bdB"><i class="ti-email pR-10"></i> <span class="fsz-sm fw-600 c-grey-900">Emails</span></li>
                           <li>
                              <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
                                 <li>
                                    <a href="" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                       <div class="peer mR-15"><img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/1.jpg" alt=""></div>
                                       <div class="peer peer-greed">
                                          <div>
                                             <div class="peers jc-sb fxw-nw mB-5">
                                                <div class="peer">
                                                   <p class="fw-500 mB-0">John Doe</p>
                                                </div>
                                                <div class="peer"><small class="fsz-xs">5 mins ago</small></div>
                                             </div>
                                             <span class="c-grey-600 fsz-sm">Want to create your own customized data generator for your app...</span>
                                          </div>
                                       </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                       <div class="peer mR-15"><img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/2.jpg" alt=""></div>
                                       <div class="peer peer-greed">
                                          <div>
                                             <div class="peers jc-sb fxw-nw mB-5">
                                                <div class="peer">
                                                   <p class="fw-500 mB-0">Moo Doe</p>
                                                </div>
                                                <div class="peer"><small class="fsz-xs">15 mins ago</small></div>
                                             </div>
                                             <span class="c-grey-600 fsz-sm">Want to create your own customized data generator for your app...</span>
                                          </div>
                                       </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                       <div class="peer mR-15"><img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/3.jpg" alt=""></div>
                                       <div class="peer peer-greed">
                                          <div>
                                             <div class="peers jc-sb fxw-nw mB-5">
                                                <div class="peer">
                                                   <p class="fw-500 mB-0">Lee Doe</p>
                                                </div>
                                                <div class="peer"><small class="fsz-xs">25 mins ago</small></div>
                                             </div>
                                             <span class="c-grey-600 fsz-sm">Want to create your own customized data generator for your app...</span>
                                          </div>
                                       </div>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="pX-20 pY-15 ta-c bdT"><span><a href="" class="c-grey-600 cH-blue fsz-sm td-n">View All Email <i class="fs-xs ti-angle-right mL-10"></i></a></span></li>
                        </ul>
                     </li>-->
                     <li class="dropdown">
                        <a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
                           <div class="peer mR-10"><img class="w-2r bdrs-50p" src="" alt=""></div>
                           <div class="peer"><span class="fsz-sm c-grey-900"><?php echo $fullName?></span></div>
                        </a>
                        <!--<ul class="dropdown-menu fsz-sm">
                           <li><a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-settings mR-10"></i> <span>Setting</span></a></li>
                           <li><a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-user mR-10"></i> <span>Profile</span></a></li>
                           <li><a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-email mR-10"></i> <span>Messages</span></a></li>
                           <li role="separator" class="divider"></li>
                           <li><a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-power-off mR-10"></i> <span>Logout</span></a></li>
                        </ul>-->
                     </li>
                  </ul>
               </div>
            </div>
            <main class="main-content bgc-grey-100">
               <div id="mainContent">
                  <div class="container-fluid">
                     <h4 class="c-grey-900 mT-10 mB-30">Student Details</h4>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="bgc-white bd bdrs-3 p-20 mB-20">
                              <h4 class="c-grey-900 mB-20">Active Projects</h4>
                              <p>This table displays the list of active projects that you are currently working on.</p>
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
                              </table>
                           </div>
                        </div>
                     </div>
                     <!-- Hide for time being <div class="row">
                        <div class="col-md-12">
                           <div class="bgc-white bd bdrs-3 p-20 mB-20">
                              <h4 class="c-grey-900 mB-20">Table head options</h4>
                              <p>Similar to tables and dark tables, use the modifier classes <code class="highlighter-rouge">.thead-light</code> or <code class="highlighter-rouge">.thead-dark</code> to make <code class="highlighter-rouge">&lt;thead&gt;</code>s appear light or dark gray.</p>
                              <table class="table">
                                 <thead class="thead-dark">
                                    <tr>
                                       <th scope="col">#</th>
                                       <th scope="col">First Name</th>
                                       <th scope="col">Last Name</th>
                                       <th scope="col">Username</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <th scope="row">1</th>
                                       <td>Mark</td>
                                       <td>Otto</td>
                                       <td>@mdo</td>
                                    </tr>
                                    <tr>
                                       <th scope="row">2</th>
                                       <td>Jacob</td>
                                       <td>Thornton</td>
                                       <td>@fat</td>
                                    </tr>
                                    <tr>
                                       <th scope="row">3</th>
                                       <td>Larry</td>
                                       <td>the Bird</td>
                                       <td>@twitter</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="bgc-white bd bdrs-3 p-20 mB-20">
                              <h4 class="c-grey-900 mB-20">Striped rows</h4>
                              <p>Use <code class="highlighter-rouge">.table-striped</code> to add zebra-striping to any table row within the <code class="highlighter-rouge">&lt;tbody&gt;</code>.</p>
                              <table class="table table-striped">
                                 <thead>
                                    <tr>
                                       <th scope="col">#</th>
                                       <th scope="col">First Name</th>
                                       <th scope="col">Last Name</th>
                                       <th scope="col">Username</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <th scope="row">1</th>
                                       <td>Mark</td>
                                       <td>Otto</td>
                                       <td>@mdo</td>
                                    </tr>
                                    <tr>
                                       <th scope="row">2</th>
                                       <td>Jacob</td>
                                       <td>Thornton</td>
                                       <td>@fat</td>
                                    </tr>
                                    <tr>
                                       <th scope="row">3</th>
                                       <td>Larry</td>
                                       <td>the Bird</td>
                                       <td>@twitter</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="bgc-white bd bdrs-3 p-20 mB-20">
                              <h4 class="c-grey-900 mB-20">Bordered table</h4>
                              <p>Add <code class="highlighter-rouge">.table-bordered</code> for borders on all sides of the table and cells.</p>
                              <table class="table table-bordered">
                                 <thead>
                                    <tr>
                                       <th scope="col">#</th>
                                       <th scope="col">First Name</th>
                                       <th scope="col">Last Name</th>
                                       <th scope="col">Username</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <th scope="row">1</th>
                                       <td>Mark</td>
                                       <td>Otto</td>
                                       <td>@mdo</td>
                                    </tr>
                                    <tr>
                                       <th scope="row">2</th>
                                       <td>Mark</td>
                                       <td>Otto</td>
                                       <td>@TwBootstrap</td>
                                    </tr>
                                    <tr>
                                       <th scope="row">3</th>
                                       <td>Jacob</td>
                                       <td>Thornton</td>
                                       <td>@fat</td>
                                    </tr>
                                    <tr>
                                       <th scope="row">4</th>
                                       <td colspan="2">Larry the Bird</td>
                                       <td>@twitter</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="bgc-white bd bdrs-3 p-20">
                              <h4 class="c-grey-900 mB-20">Hoverable rows</h4>
                              <p>Add <code class="highlighter-rouge">.table-hover</code> to enable a hover state on table rows within a <code class="highlighter-rouge">&lt;tbody&gt;</code>.</p>
                              <table class="table table-hover">
                                 <thead>
                                    <tr>
                                       <th scope="col">#</th>
                                       <th scope="col">First Name</th>
                                       <th scope="col">Last Name</th>
                                       <th scope="col">Username</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <th scope="row">1</th>
                                       <td>Mark</td>
                                       <td>Otto</td>
                                       <td>@mdo</td>
                                    </tr>
                                    <tr>
                                       <th scope="row">2</th>
                                       <td>Jacob</td>
                                       <td>Thornton</td>
                                       <td>@fat</td>
                                    </tr>
                                    <tr>
                                       <th scope="row">3</th>
                                       <td colspan="2">Larry the Bird</td>
                                       <td>@twitter</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>-->
               </div>
            </main>
            <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600">
               <span>Copyright © 2020 Designed by Shiyu - . All rights reserved.</span>
              
            </footer>
         </div>
      </div>
      <script type="text/javascript" src="https://colorlib.com/polygon/adminator/vendor.js"></script><script type="text/javascript" src="JS/bundle.js"></script>
   </body>
</html>