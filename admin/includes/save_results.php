<?php
 include 'conn.php';
 if(isset($_POST['save'])){
    $school_name_one = $_POST['school_name_one'];
    $school_name_two = $_POST['school_name_two'];
    $score_school_one = $_POST['score_school_one'];
    $score_school_two = $_POST['score_school_two'];
    $conn->query("INSERT INTO `results` VALUES('', '$school_name_one','$school_name_two', '$score_school_one', '$score_school_two')");
        echo '
            <script type = "text/javascript">
                alert("Saved Record");
                window.location = "../result.php";
            </script>
        ';
}
