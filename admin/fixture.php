<?php  include 'theme/header.php'; ?>
<?php  include 'theme/sidebar.php'; ?>
	
			<div class = "alert alert-info">Accounts / Admin /Fixture</div>
			<a href='includes/generate_match.php'><button class="btn btn-danger" name="generate_match">Generate match</button></a>
			<div class = "well col-lg-12">
				<br />
				<br />
				<table id = "table" class = "table table-bordered">
					<thead>
						<tr class = "alert-info text-center">
							<th>Team one</th>
							<th>Vs</th>
							<th>Team two</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$q_admin = $conn->query("SELECT * FROM `matches`") or die(mysqli_error());
						while($f_admin = $q_admin->fetch_array()){
					?>	
						<tr class="text-center">
							<td><?php echo $f_admin['team_one']?></td>
							<td><b>Vs</b></td>
							<td><?php echo $f_admin['team_two']?></td>
            		</tr>
					<?php
						}
					?>
					</tbody>
				</table>
			<br />
			<br />	
			<br />		
			</div>

<?php include 'theme/footer.php' ?>
<script type = "text/javascript">
				$(document).ready(function(){
					$('#table').DataTable();
				});
			</script>
			<script type = "text/javascript">
			$(document).ready(function(){
			$('.radmin_id').click(function(){
				$admin_id = $(this).attr('name');
				$('.remove_id').click(function(){
					window.location = 'includes/delete_description.php?id=' + $admin_id;
				});
			});
			$('.eadmin_id').click(function(){
				$admin_id = $(this).attr('name');
				$('#edit_query').load('load_edit.php?admin_id=' + $admin_id);
			});
		});
	</script>