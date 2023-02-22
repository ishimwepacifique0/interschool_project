<?php  include 'theme/header.php'; ?>
<?php  include 'theme/sidebar.php'; ?>

<div class = "modal fade" id = "myModal" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content panel-primary">
						<div class = "modal-header panel-heading">
                        <h4 class = "modal-title" id = "myModallabel">Add new Admin</h4>
							<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
							
						</div>
						<form method = "POST" action = "includes/save_user.php">
							<div class  = "modal-body">
								<div class = "form-group">
									<label>Names:</label>
									<input type = "text" required = "required" name = "name" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Username:</label>
									<input type = "username" required = "required" name = "username" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Email:</label>
									<input type = "email" name = "email" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Password:</label>
									<input type = "password" name = "password" placeholder = "(Optional)" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Type_user:</label>
									<select class=" form-control" name="type_user">
                                        <option value = "admin">Admin</option>
                                        <option value = "user">user</option>
                                    </select>
								</div>
							</div>
							<div class = "modal-footer">
								<button  class = "btn btn-primary" name = "save"><span class = "glyphicon glyphicon-save"></span> Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class = "modal fade" id = "delete" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content ">
						<div class = "modal-body">
							<center><label class = "text-danger">Are you sure you want to delete this record?</label></center>
							<br />
							<center><a class = "btn btn-danger remove_id" ><span class = "fa fa-trash"></span> Yes</a> <button type = "button" class = "btn btn-warning" data-dismiss = "modal" aria-label = "No"><span class = "fa fa-remove"></span> No</button></center>
						</div>
					</div>
				</div>
			</div>
			<div class = "modal fade" id = "edit_admin" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content panel-warning">
						<div class = "modal-header panel-heading">
							<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
							<h4 class = "modal-title" id = "myModallabel">Edit Admin</h4>
						</div>
						<div id = "edit_query"></div>
					</div>
				</div>
			</div>
			<div class = "alert alert-info">Accounts / Admin</div>
			<div class = "well col-lg-12">
				<button type = "button" class = "btn btn-success" data-target = "#myModal" data-toggle = "modal"><span class = "glyphicon glyphicon-plus"></span> Add new</button>
				<br />
				<br />
				<table id = "table" class = "table table-bordered">
					<thead>
						<tr class = "alert-info">
							<th>Names</th>
							<th>Username</th>
							<th>Email</th>
							<th>Password</th>
							<th>Type_user</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$q_admin = $conn->query("SELECT * FROM `user`") or die(mysqli_error());
						while($f_admin = $q_admin->fetch_array()){
					?>	
						<tr>
							<td><?php echo $f_admin['names']?></td>
							<td><?php echo $f_admin['username']?></td>
							<td><?php echo $f_admin['email']?></td>
							<td><?php echo $f_admin['password']?></td>
							<td><?php echo htmlentities($f_admin['type_user'])?></td>
							<td>
							<a class = "btn btn-danger radmin_id" name = "<?php echo $f_admin['id']?>" href = "#" data-toggle = "modal" data-target = "#delete"><span class = "fa fa-trash"></span></a>
							 <a class = "btn btn-warning  eadmin_id" name = "<?php echo $f_admin['id']?>" href = "#" data-toggle = "modal" data-target = "#edit_admin"><span class = "fa fa-edit"></span></a>
							</td>
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
					window.location = 'includes/delete_user.php?id=' + $admin_id;
				});
			});
			$('.eadmin_id').click(function(){
				$admin_id = $(this).attr('name');
				$('#edit_query').load('load_edit.php?admin_id=' + $admin_id);
			});
		});
	</script>

<?php include 'theme/footer.php' ?>