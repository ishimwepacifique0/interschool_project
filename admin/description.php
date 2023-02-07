<?php  include 'theme/header.php'; ?>
<?php  include 'theme/sidebar.php'; ?>

<div class = "modal fade" id = "myModal" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content panel-primary">
						<div class = "modal-header panel-heading">
                        <h4 class = "modal-title" id = "myModallabel">Add new Description</h4>
							<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
							
						</div>
						<form method = "POST" action = "asset/description.php" enctype="multipart/form-data">
							<div class  = "modal-body">
								<div class = "form-group">
									<label>Title:</label>
									<input type = "text" required = "required" name = "title" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Image:</label>
									<input type = "file" required = "required" name = "image" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Description:</label>
									<input type = "text" name = "description" required = "required" class = "form-control" />
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
							<h4 class = "modal-title" id = "myModallabel">Edit Description</h4>
						</div>
						<div id = "edit_query"></div>
					</div>
				</div>
			</div>
			<div class = "alert alert-info">Accounts / Admin /Descrption page</div>
			<div class = "well col-lg-12">
				<button type = "button" class = "btn btn-success" data-target = "#myModal" data-toggle = "modal"><span class = "glyphicon glyphicon-plus"></span> Add new</button>
				<br />
				<br />
				<table id = "table" class = "table table-bordered">
					<thead>
						<tr class = "alert-info">
							<th>id</th>
							<th>Title</th>
							<th>Image</th>
							<th>Description</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$q_admin = $conn->query("SELECT * FROM `info_data`") or die(mysqli_error());
						while($f_admin = $q_admin->fetch_array()){
					?>	
						<tr>
							<td><?php echo $f_admin['id']?></td>
							<td><?php echo $f_admin['title']?></td>
							<td><?php echo $f_admin['image']?></td>
							<td><?php echo $f_admin['decription']?></td>
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