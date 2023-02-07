<?php
session_start();
 include '../includes/conn.php';
  
if(isset($_SESSION['id'])){
    if(isset($_POST['save'])){
       $title = $_POST['stadium_name'];
       $province = $_POST['province'];
       $destrict = $_POST['district'];

       $sql = "INSERT INTO `location` (`location_id`, `stadium_name`, `province`, `district`) VALUES (NULL, '$title', '$province', '$destrict')";       
       $result = mysqli_query($conn,$sql);

        if($result){
            header('location:../location.php');
        }else{
            header('location:../location.php?data=failure');
        }
    }
}else{
    header('location:../location.php');
}


?>