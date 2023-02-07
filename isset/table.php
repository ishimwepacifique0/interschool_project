<?php
include '../isset/header.php';
?>
<style>
          .list-image{
            padding:1rem;
            display:flex;
          }
          .img-radius1{
            border-radius:50%;
          }
          </style>

 <div class="panel-body p-30">
    <h2 class="text-center"><b> All Matches</b></h2>

<table id="example" class="display table table-striped mt-30" cellspacing="0" width="100%">
  
<thead>
    <th>Position</th>
    <th>Club</th>
    <th>Played</th>
    <th>Won</th>
    <th>Drawn</th>
    <th>Lost</th>
    <th>GF</th>
    <th>GA</th>
    <th>GD</th>
    <th>Points</th>
    </thead>
    <?php 
       include '../includes/conn.php';
       $sql = 'SELECT * FROM `table`';
       $result = mysqli_query($conn,$sql);
       while ($row = mysqli_fetch_array($result)) {
           ?>
           <tbody>
               <tr>
                   <td><?php echo $row['id']?></td>
                   <td>
                    <span><img src="../image/db_image/<?php echo $row['school_log_image']?>" class="img-radius my-7" width="30" height="30"></span> 
                    <span> <?php echo $row['school_name'];?></span>
                  </td>
                   <td><?php echo $row['played']?></td>
                   <td><?php echo $row['won']?></td>
                   <td><?php echo $row['drawn']?></td>
                   <td><?php echo $row['lost']?></td>
                   <td><?php echo $row['gf']?></td>
                   <td><?php echo $row['ga']?></td>
                   <td><?php echo $row['gd']?></td>
                   <td><?php echo $row['points']?></td>
               </tr>
           </tbody>

           <?php
       }
    ?>
   
      </table>
</div>
<?php
include '../isset/footer.php';
?>