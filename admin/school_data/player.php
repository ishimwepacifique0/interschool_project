
<div class = "modal fade" id = "myModal" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content panel-primary">
						<div class = "modal-header panel-heading bg-success text-white">
                        <h4 class = "modal-title" id = "myModallabel">Add new Player of <?php echo $row['school_name']?></h4>
							<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
							
						</div>
						<form method = "POST" action = "school_data/includes/insert_player.php">
							<div class  = "modal-body">
								<div class = "form-group">
									<label>Player Name:</label>
									<input type = "text" required = "required" name = "player_name" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>School id:</label>
									<select class="form-control" required name="school_id">
										<option>Select one of the following</option>
                                       <?php
									   $sqlschool = 'SELECT * FROM school_data';
									   $resultsql = mysqli_query($conn,$sqlschool);
									    while ($row1 = mysqli_fetch_array($resultsql)) {
											?>
											<option value="<?php echo $row['id']?>"><?php echo $row1['id'].'-->'.$row1['school_name']?><option>
											<?php
										} 
									   ?>
									</select>
								</div>
								<div class = "form-group">
									<label>Completition type:</label>
									<select name="competition_type" class="form-control">
                                        <option>select one of below</option>
                                        <option value="football">Football</option>
                                        <option value="basketball">Basketball</option>
                                        <option value="volleyball">Valleyball</option>
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
							<th>Player_No</th>
							<th>Player_name</th>
							<th>School_name</th>
							<th>competition_type</th>
						</tr>
					</thead>
					<tbody>
                    <?php
                            $sql = "SELECT * FROM players WHERE school_id = '$id' limit 23";
                            $result = mysqli_query($conn,$sql);
							while ($f_admin = mysqli_fetch_array($result)) {
                            ?>

						<tr>

							<td><?php echo $f_admin['player_id']?></td>
							<td><?php echo $f_admin['player_name']?></td>
							<td><?php echo $row['school_name']?></td>
							<td><?php echo $f_admin['competition_type']?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			<br />
			<br />	
			<br />		
			</div>
