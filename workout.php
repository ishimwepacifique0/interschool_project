
<?php
 $list = ["kigali","southern","western","northern","eastern"];

// for ($z=0; $z < count($list) ; $z++) {

// echo "............$list[$z]...................<br>";
include 'includes/conn.php';
$sql = "SELECT school_name FROM school_data where completion__type like '%football%'";
$result = mysqli_query($conn,$sql);
$array =  [];
$data = [];

while($row = mysqli_fetch_array($result)){
   $array[] = $row['school_name'];
}
for ($i=0; $i < count($array); $i++) { 
     $count[] = $array[$i];
   for ($j=0; $j < count($count) ; $j++) { 
     if ($array[$i] != $count[$j]) {

            $team1=$array[$i];
            $team2=$count[$j];
            $date = date('M d, Y', strtotime("+7 days") );
            echo $team1." Vs ".$team2."<br>";


                // $sql = "INSERT INTO matches(team_one,team_two,match_date) VALUES('$team1','$team2',NOW())";
                // $result = mysqli_query($conn,$sql);

          
    
     }
   }
}
echo"..................................................................<br>";
// }

?>