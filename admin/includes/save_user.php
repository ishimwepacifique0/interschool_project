<?php
 include 'conn.php';
 if(ISSET($_POST['save'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $type_user = $_POST['type_user'];
    $conn->query("INSERT INTO `user` VALUES('', '$name','$username', '$email', '$password', '$type_user')");
        echo '
            <script type = "text/javascript">
                alert("Saved Record");
                window.location = "../users.php";
            </script>
        ';
}


?>