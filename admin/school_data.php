<?php  include 'theme/header.php'; ?>
<?php  include 'theme/sidebar.php'; ?>

<div class = "modal fade" id = "myModal" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content panel-primary">
						<div class = "modal-header panel-heading">
                        <h4 class = "modal-title" id = "myModallabel">Add new Schoo attend</h4>
							<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
							
						</div>
						<form method = "POST" action = "includes/new_user.php">
							<div class  = "modal-body">
								<div class = "form-group">
									<label>School Name:</label>
									<input type = "text" required = "required" name = "school_name" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>School log:</label>
									<input type = "file" required = "required" name = "school_log_image" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>School Province:</label>
									<input type = "text" required = "required" name = "school_province" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>School District:</label>
									<input type = "text" required = "required" name = "school_district" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Completition type:</label>
									<select name="completition_type" class="form-control">
                                        <option>select one of below</option>
                                        <option value="football">Football</option>
                                        <option value="basketball">Basketball</option>
                                        <option value="volleyball">Valleyball</option>
                                    </select>
								</div>
								<div class = "form-group">
									<label>Date Register:</label>
									<input type = "date" name = "date_register" class = "form-control" />
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
							<center><a class = "btn btn-danger remove_id" ><span class = "glyphicon glyphicon-trash"></span> Yes</a> <button type = "button" class = "btn btn-warning" data-dismiss = "modal" aria-label = "No"><span class = "glyphicon glyphicon-remove"></span> No</button></center>
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
			<div class = "alert alert-info">School data</div>
			<div class = "well col-lg-12">
				<button type = "button" class = "btn btn-success" data-target = "#myModal" data-toggle = "modal"><span class = "glyphicon glyphicon-plus"></span> Add new</button>
				<br />
				<br />
				<table id = "table" class = "table table-bordered">
					<thead>
						<tr class = "alert-info">
							<th>School Id</th>
							<th>School_Name</th>
							<th>School_log_image</th>
							<th>School_province</th>
							<th>School_District</th>
							<th>Competition_type</th>
							<th>Date Register</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$q_admin = $conn->query("SELECT * FROM `school_data`") or die(mysqli_error());
						while($f_admin = $q_admin->fetch_array()){
					?>	
						<tr>
							<td><?php echo $f_admin['id']?></td>
							<td><?php echo $f_admin['school_name']?></td>
							<td><?php echo $f_admin['school_log_image']?></td>
							<td><?php echo $f_admin['school_province']?></td>
							<td><?php echo $f_admin['district']?></td>
							<td><?php echo $f_admin['competition__type']?></td>
							<td><?php echo $f_admin['date_register']?></td>
							<td><a class = "btn btn-danger radmin_id" name = "<?php echo $f_admin['id']?>" href = "#" data-toggle = "modal" data-target = "#delete"><span class = "fa fa-trash"></span></a> <a class = "btn btn-warning  eadmin_id" name = "<?php echo $f_admin['id']?>" href = "#" data-toggle = "modal" data-target = "#edit_admin"><span class = " fa fa-edit"></span></a></td>
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