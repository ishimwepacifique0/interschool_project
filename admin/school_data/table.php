<div class = "alert alert-info text-center">Table </div>
			<div class = "well col-lg-12"><br />
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
						$q_admin = $conn->query("SELECT * FROM `table` where school_name = '$row[school_name]'") or die(mysqli_error());
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