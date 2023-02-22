<?php
include '../includes/conn.php';
include 'header.php';
?>
<div class="container">
	<div>
		<div class="panel-body p-30">
    <h2 class="text-center"><b> All Matches</b></h2>

<table id="example" class="display table table-striped mt-30" cellspacing="0" width="100%">
	 <?php 
	 $sql = " SELECT * FROM matches";
	 $result = mysqli_query($conn,$sql);
	 while ($row = mysqli_fetch_array($result) ) {
		?>
		<tbody> 
			<tr class="text-center">
				<td><?php echo $row['team_one']?></td>
				<td><b>Vs</b></td>
				<td><?php echo $row['team_two']?></td>
	 		</tr>
		
	</tbody>
	<?php
	 }
	 ?>
	
</table>
	</div>
</div>

<?php
include 'footer.php';
?>