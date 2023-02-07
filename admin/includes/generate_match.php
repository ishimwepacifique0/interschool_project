<?php
include 'conn.php';
$sql = "SELECT school_name FROM school_data ";
$result = mysqli_query($conn,$sql);

if($result){
$array =  [];
$data = [];
// $date = '';

while($row = mysqli_fetch_array($result)){
   $array[] = $row['school_name'];
}
for ($i=0; $i < count($array) ; $i++) { 
     $count[] = $array[$i];
   for ($j=0; $j < count($count) ; $j++) { 
     if ($array[$i] != $count[$j]) {
          
        
            $team1=$array[$i];
            $team2=$count[$j];
            $date = date('M d, Y', strtotime("+7 days"));
            echo $team1."Vs".$team2."<br>";
              //  for ($date=0; $date < count($team1) ; $date++) { 
              //      if ($i%7 == 0) {
              //        $date = date('M d, Y', strtotime("+$i days"));
              //      }
              //  }

                $sql = "INSERT INTO matches(team_one,team_two,match_date) VALUES('$team1','$team2',NOW())";
                $result = mysqli_query($conn,$sql);

          
    
     }
   }
}
  header('location:../fixture.php');

}
?>