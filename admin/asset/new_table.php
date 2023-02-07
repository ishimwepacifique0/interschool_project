<?php
 include '../includes/conn.php';

//  if(isset($_SESSION['id'])){
    if(isset($_POST['save'])){
        $image = $_FILES['image'];
        $tmp = $_FILES['image']['tmp_name'];
        $school_name = $_POST['school_name'];
        $played = $_POST['played'];
        $won = $_POST['won'];
        $drawn = $_POST['drawn'];
        $lost = $_POST['lost'];
        $gf = $_POST['gf'];
        $ga = $_POST['ga'];
        $gd = $_POST['gd'];
        $point = ($won*3)+($drawn*1);

        $destination = 'image/'.$image;

        $sql = "INSERT INTO `table` (`id`, `school_name`, `school_log_image`, `played`, `won`, `drawn`, `lost`, `gf`, `ga`, `gd`, `points`) VALUES (NULL, '$school_name', '$image', '$played', '$won', '$drawn', '$lost', '$gf', '$ga', '$gd', 6);";
        $result = mysqli_query($conn,$sql);
        move_uploaded_file($tmp,$destination);

        if($result){
            header('location:../table.php');
        }else{
            header('location:../table.php?data=failure');
        }
    }else{
    header('location:../table.php');
}

?>