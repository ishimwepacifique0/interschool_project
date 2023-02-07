<?php  include 'theme/header.php'; ?>
<?php  include 'theme/sidebar.php'; ?>

<div class = "modal fade" id = "myModal" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content panel-primary">
						<div class = "modal-header panel-heading">
                        <h4 class = "modal-title" id = "myModallabel">Add new Table</h4>
							<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
							
						</div>
						<form method = "POST" action = "asset/new_table.php"  enctype="multipart/form-data">
							<div class  = "modal-body">
								<div class = "form-group">
									<label>Club-Image:</label>
									<input type = "file" required = "required" name = "image" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>School-name:</label>
									<input type = "text" name = "school_name" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Played:</label>
									<input type = "text" name = "played" required = "required" class = "form-control" />
								</div>
                                <div class = "form-group">
									<label>Won:</label>
									<input type = "text" name = "won" required = "required" class = "form-control" />
								</div>
                                <div class = "form-group">
									<label>Drawn:</label>
									<input type = "text" name = "drawn" required = "required" class = "form-control" />
								</div>
                                <div class = "form-group">
									<label>Lost:</label>
									<input type = "text" name = "lost" required = "required" class = "form-control" />
								</div>
                                <div class = "form-group">
									<label>GF:</label>
									<input type = "text" name = "gf" required = "required" class = "form-control" />
								</div>
                                <div class = "form-group">
									<label>GA:</label>
									<input type = "text" name = "ga" required = "required" class = "form-control" />
								</div>
                                <div class = "form-group">
									<label>GD:</label>
									<input type = "text" name = "gd" required = "required" class = "form-control" />
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
			<div class = "alert alert-info text-center">Table </div>
			<div class = "well col-lg-12">
				<button type = "button" class = "btn btn-success" data-target = "#myModal" data-toggle = "modal"><span class = "glyphicon glyphicon-plus"></span> Add new</button>
				<br />
				<br />
				<table id = "table" class = "table table-bordered">
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
					<tbody>
					<?php
						$q_admin = $conn->query("SELECT * FROM `table`") or die(mysqli_error());
						while($f_admin = $q_admin->fetch_array()){
					?>	
						<tr>
                            <td><?php echo $f_admin['id']?></td>
                                <td>
                                    <span><img src="../image/db_image/<?php echo $f_admin['school_log_image']?>" class="img-radius my-7" width="30" height="30"></span> 
                                    <span> <?php echo $f_admin['school_name'];?></span>
                                </td>
                                <td><?php echo $f_admin['played']?></td>
                                <td><?php echo $f_admin['won']?></td>
                                <td><?php echo $f_admin['drawn']?></td>
                                <td><?php echo $f_admin['lost']?></td>
                                <td><?php echo $f_admin['gf']?></td>
                                <td><?php echo $f_admin['ga']?></td>
                                <td><?php echo $f_admin['gd']?></td>
                                <td><?php echo $f_admin['points']?></td>
							<!-- <td><a class = "btn btn-danger radmin_id" name = "<?php echo $f_admin['id']?>" href = "#" data-toggle = "modal" data-target = "#delete"><span class = "fa fa-trash"></span></a> <a class = "btn btn-warning  eadmin_id" name = "<?php echo $f_admin['id']?>" href = "#" data-toggle = "modal" data-target = "#edit_admin"><span class = " fa fa-edit"></span></a></td> -->
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