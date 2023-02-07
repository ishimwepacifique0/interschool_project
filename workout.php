
<?php
include 'includes/conn.php';

// $sql = "SELECT * FROM school_data";
// $result = mysqli_query($conn,$sql);
// $arr = array();
// $data = array();
// while ($row = mysqli_fetch_array($result)) {
//     $arr[] = $row['id'];
//     // echo var_dump($arr);
// for ($i=0; $i < count($arr) ; $i++) { 
//     for ($j = 0; $j < count($arr[$i]) ; $j++) { 
//         if ($arr[$j] != $arr[$i]) {
//             echo $arr[$i] . ":". $arr[$j]."<br>";
//          array_push($data,['team1'=>$arr[$i],'team2'=>$arr[$j]]);
//         }
//     }
// }
//  }
 


// echo "<hr>";

//  foreach($data as $dt){
//      echo $dt['team1'].":".$dt['team2']."<br>";
//  }
$sql = "SELECT school_name FROM school_data ";
$result = mysqli_query($conn,$sql);
$array =  [];
$data = [];

while($row = mysqli_fetch_array($result)){
   $array[] = $row['school_name'];
}
for ($i=0; $i < count($array) ; $i++) { 
     $count[] = $array[$i];
   for ($j=0; $j < count($count) ; $j++) { 
     if ($array[$i] != $count[$j]) {
          
        
            $team1=$array[$i];
            $team2=$count[$j];
            $date = date('M d, Y', strtotime("+7 days") );
            echo $team1."Vs".$team2."<br>";


                $sql = "INSERT INTO matches(team_one,team_two,match_date) VALUES('$team1','$team2',NOW())";
                $result = mysqli_query($conn,$sql);

          
    
     }
   }
}

print_r($data)


?>