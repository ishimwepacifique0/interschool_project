<?php include 'header.php';?>
<link rel = "stylesheet" href = "css/bootstrap.css" />
<link rel = "stylesheet" href = "css/jquery.dataTables.css" />
<?php 
 $id = $_GET['id'];
 $sql = "SELECT * FROM school_data WHERE id = '$id'";
 $result = mysqli_query($conn,$sql);
 $row = mysqli_fetch_array($result);
 $school_name = $row['school_name'];
?>
<style>
   .img-fluid{
	width: 300px;
   }
  </style>
<div class="w3l-content-photo-5 py-5" id="about">
	<div class="content-main pt-lg-5 pt-md-3 pb-0">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 content-photo">
					<a href="#"><img src="../image/db_image/<?php echo $row['school_log_image']?>" class="img-fluid" alt="content-photo" style="width: 20rem; height: 19rem;"></a>
				</div>
				<div class="col-lg-8 content-left mt-lg-0 mt-10 ">
					<h3>School Name :   <?php echo $row['school_name']?></h3>
					<p>
                        <h4>Province: <?php echo ucfirst($row['school_province']); ?></h4>
                        <h4>District: <?php echo ucfirst($row['district']); ?></h4>
                        <h4>Competition type: <?php echo ucfirst($row['competition__type']); ?></h4>
                    </p>
					<button type = "button" class = "btn btn-primary" data-target = "#myModal" data-toggle = "modal"><span class = "glyphicon glyphicon-ball"></span>Fixtures</button>					
					<button type = "button" class = "btn btn-success" data-target = "#myModalResult" data-toggle = "modal"><span class = "glyphicon glyphicon-ball"></span>Result</button>					
					<button type = "button" class = "btn btn-secondary" data-target = "#myModaltable" data-toggle = "modal"><span class = "glyphicon glyphicon-ball"></span>Table</button>					
					<button type = "button" class = "btn btn-secondary" data-target = "#myModaltable" data-toggle = "modal"><span class = "glyphicon glyphicon-ball"></span>About School</button>					
				</div>
			</div>
		</div>
	</div>
</div>
		<div class = "modal fade" id = "myModal" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content panel-primary">
						<div class = "modal-header panel-heading">
						<h4 class = "modal-title text-center" id = "myModallabel">Fixtures of <?php echo $row['school_name']?></h4>
							<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
							
						</div>
							<div class  = "modal-body">
							<div class="panel-body p-30">
    <h2 class="text-center"><b> All Matches</b></h2>

<table id="example" class="display table table-striped mt-30" cellspacing="0" width="100%">
	 <?php 
	 $sql = " SELECT * FROM matches where team_one = '$school_name' OR team_two = '$school_name'";
	 $result = mysqli_query($conn,$sql);
	 while ($row = mysqli_fetch_array($result) ) {
		?>
		<tbody> 
			<tr>
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
						</form>
					</div>
				</div>
			</div>
			<div class = "modal fade" id = "myModalResult" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content panel-success">
						<div class = "modal-header panel-heading">
						<h4 class = "modal-title text-center" id = "myModallabel">Result of <?php echo $row['school_name']?></h4>
							<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
							
						</div>
							<div class  = "modal-body">
							<table id="example" class="display table table-striped mt-30" cellspacing="0" width="100%">
							<?php
						$q_admin = $conn->query("SELECT * FROM `results` WHERE school_name_one = '$school_name' OR school_name_two = '$school_name' ") or die(mysqli_error());
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
		
					</tbody>
	
</table>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class = "modal fade" id = "myModaltable" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content panel-secondary" style="width: 130%">
						<div class = "modal-header panel-heading">
						<h4 class = "modal-title text-center" id = "myModallabel" style="text-align:center;">Table of <?php echo $row['school_name']?></h4>
							<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
							
						</div>
							<div class  = "modal-body">
							<table id="example" class="display table table-striped mt-30" cellspacing="0" width="100%">
								
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
								</table>
							</div>
							<div class = "modal-footer">
								<button  class = "btn btn-primary" name = "save"><span class = "glyphicon glyphicon-save"></span> Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
    <script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/jquery.dataTables.js"></script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$('#table').DataTable();
		});
	</script>
<?php include 'footer.php'; ?>
