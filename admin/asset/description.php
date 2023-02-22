<?php
session_start();
 include '../includes/conn.php';
  
if(isset($_SESSION['id'])){
    if(isset($_POST['save'])){
       $title = $_POST['title'];
       $image = $_FILES['image']['name'];
       $tmp = $_FILES['image']['tmp_name'];
       $descrption = $_POST['description'];

       $destination = 'image/'.$image;
       
       $sql = "INSERT INTO `info_data` (`id`, `title`, `image`, `decription`) VALUES (NULL, '$title', '$image', '$description')";       
       $result = mysqli_query($conn,$sql);
       $move = move_uploaded_file($tmp,$destination);

        if($result){
            header('location:../description.php');
        }else{
            header('location:../description.php?data=failure');
        }
    }
}else{
    header('location:../description.php');
}


?>