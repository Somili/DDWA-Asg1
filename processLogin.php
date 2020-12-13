<?php
  // 1. Create a database connection
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
  else{ //continued within body tag

    $loginID = $_POST["login"];
    $password = $_POST["password"];
    $userType = $_POST["userType"];


    if($userType == "1"){
        $sql = "SELECT * FROM student WHERE student_id=" . $loginID ." and password='" . $password ."'";

        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
            //login successfully
            session_start();
            $_SESSION["loginUserID"] = $loginID;
            header("Location: Student.php");
        } else {
          echo '<script language="javascript">alert("Wrong UserID/Password");location.href="index.php";</script>';
        }
    }
    else if($userType == "2"){
        //lectuerer login
        $sql = "SELECT * FROM lecturer WHERE lecturer_id=" . $loginID ." and password='" . $password ."'";

        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
            //login successfully
            session_start();
            $_SESSION["loginUserID"] = $loginID;
            header("Location: Lecturer.php");
        } else {
          echo '<script language="javascript">alert("Wrong UserID/Password");location.href="index.php";</script>';
        }


    } else {
      
      //   //admin login
      $sql = "SELECT * FROM `admin` WHERE admin_id=".$loginID." and password='".$password."'";
      $result = $connection->query($sql);
        if ($result->num_rows > 0) {
          session_start();
          $_SESSION["loginUserID"] = $loginID;
      header("Location: Admin.php");
        }
      else {
        echo '<script language="javascript">alert("Wrong UserID/Password");location.href="index.php";</script>';
      }
    }

  }

?>
