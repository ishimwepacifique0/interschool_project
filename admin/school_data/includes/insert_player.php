<?php
  session_start();
 include '../../includes/conn.php';
 if (isset($_SESSION['id'])) {

     if(isset($_POST['save'])){
     $player = $_POST['player_name'];
     $school_id = $_POST['school_id'];
     $competition_type = $_POST['competition_type'];
     echo $player,$school_id,$competition_type;
     $sql = "INSERT INTO `players` (`player_id`, `player_name`, `school_id`, `competition_type`) VALUES (NULL, '$player', '$school_id', '$competition_type');";
     $result = mysqli_query($conn,$sql);

     if($result){
       header('location:../../players.php');
     }else{
     echo'
     alert(invalid detail)';
     }
     }
 }else{
    echo'
    <script>
    alert(You have not yet logged in please login)
    window.location.href = ../../../login.php;
    </script>
    ';
 }

?>