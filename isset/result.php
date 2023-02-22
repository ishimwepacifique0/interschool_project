<?php
include '../includes/conn.php';
include 'header.php';
?>
<div class="container">
	<div>
		<div class="panel-body p-30">
    <h2 class="text-center"><b>Result of all Matches</b></h2>

<table id="example" class="display table table-striped mt-30" cellspacing="0" width="100%">
<?php
						$q_admin = $conn->query("SELECT * FROM `results`") or die(mysqli_error());
						while($f_admin = $q_admin->fetch_array()){
					?>	
						<tr class="text-center">
							<td><?php echo $f_admin['school_name_one']?></td>
							<td><b><?php echo $f_admin['score_schoo_one']?></b><td>
							<td>-<td>
                            <td><b><?php echo $f_admin['score_school_two']?></b><td>
							<td><?php echo $f_admin['school_name_two']?></td>
            		</tr>
					<?php
						}
					?>
		
</table>
	</div>
</div>

<?php
include 'footer.php';
?>