<?php
include 'header.php';
?>
<?php
 $sql = "SELECT school_name,school_log_image FROM school_data where school_province  = 'kigali city'";
 $result = mysqli_query($conn,$sql);
 $arr = array();
//  $num_field =  mysqli_num_fields($result);
//  $num_rows = mysqli_num_rows($result);
 while($row = mysqli_fetch_array($result)){
   $arr[] = $row;
   echo $arr;
}
?>
<?php
include 'footer.php';
?>