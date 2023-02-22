<?php  include 'theme/header.php'; ?>
<?php  include 'theme/sidebar.php'; ?>

<div class = "modal fade" id = "myModal" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content panel-primary">
						<div class = "modal-header panel-heading">
                        <h4 class = "modal-title" id = "myModallabel">Add new Result</h4>
							<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
							
						</div>
						<form method = "POST" action = "includes/save_results.php">
							<div class  = "modal-body">
								<div class = "form-group">
									<label>School_name_one:</label>
									
									<select name="school_name_one" class="form-control">
									<option>Select the school</option>
										<?php
										$sql = "SELECT * FROM school_data";
										$result = mysqli_query($conn,$sql);
										while($row = mysqli_fetch_array($result)){
										?>
										<option value="<?php echo $row['school_name']?>"><?php echo $row['school_name']?></option>
										<?php
										}
										?>
									</select>
								</div>
								<div class = "form-group">
									<label>School_name_two:</label>
									<select name="school_name_two" class="form-control">
										<option>Select the school</option>
										<?php
										$sql = "SELECT * FROM school_data";
										$result = mysqli_query($conn,$sql);
										while($row = mysqli_fetch_array($result)){
										?>
										<option value="<?php echo $row['school_name']?>"><?php echo $row['school_name']?></option>
										<?php
										}
										?>
									</select>								</div>
								<div class = "form-group">
									<label>Score_school_one:</label>
									<input type = "text" name = "score_school_one" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Score_school_two:</label>
									<input type = "text" name = "score_school_two" placeholder = "(Optional)" class = "form-control" />
								</div>
							</div>
							<div class = "modal-footer">
								<button  class = "btn btn-primary" name = "save"><span class = "glyphicon glyphicon-save"></span> Save result</button>
							</div>
						</form>
					</div>
				</div>
			</div>

	
			<div class = "alert alert-info">Accounts / Admin /Result</div>
						<div class = "well col-lg-12">
						<button type = "button" class = "btn btn-success" data-target = "#myModal" data-toggle = "modal"><span class = "glyphicon glyphicon-plus"></span> Add new results</button>
				<br />
				<br />
				<table id = "table" class = "table table-bordered">
					<tbody>
					<?php
						$q_admin = $conn->query("SELECT * FROM `results`") or die(mysqli_error());
						while($f_admin = $q_admin->fetch_array()){
					?>	
						<tr class="text-center">
							<td><?php echo $f_admin['school_name_one']?></td>
							<td><?php echo $f_admin['score_schoo_one']?><td>
                            <td><?php echo $f_admin['score_school_two']?><td>
							<td><?php echo $f_admin['school_name_two']?></td>
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