<?php
 session_start();

  include 'conn.php';
  

  if (isset($_POST['login'])) {

     $email = $_POST['email'];
     $password = $_POST['password'];

     $sql = "SELECT * FROM school_data WHERE email = '$email' AND password = '$password'";
     $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    
     if (is_array($row)) {
        $_SESSION['email'] = $row['email'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['school_name'];
        header('location:../admin/dashboard.php');
     }else{
        header('location:../login.php?login=invaliddetail');
     }
    }
?>