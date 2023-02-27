
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="province" placeholder="province">
        <input type="text" name="completition_type" placeholder="type">
        <button type="submit" name = "get_data">get data</button>
    </form>
    
</body>
</html> -->

<?php
$conn = mysqli_connect("localhost","root","","interschool");

// if(isset($_POST['get_data'])){

// $province = $_POST['province'];
// $type = $_POST['completition_type'];

// echo $province.$type;

// $sql = " SELECT * FROM `school_data` where school_province like '%$province%' ";
// $result = mysqli_query($conn,$sql);
// while ($row = mysqli_fetch_array($result)) {
    ?>
    <table>
        <tr cellspacing="23" cellpadding="20">
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["school_name"] ?></td>
            <td><?php echo $row["school_province"] ?></td>
        </tr>
    </table>
    <?php
// }


<?php    
                            // $sql = " SELECT phonenumber FROM school_data";
                            // $result = mysqli_query($conn,$sql)
                            // while ($row = mysqli_fetch_arrow($result)) {
                            //     ?>
                            //     <option value="<?php echo $row['phonenumber']?>"><?php echo $row["phonenumber"]?></option>
                            //     <?php
                            // }
                            // ?>

?>