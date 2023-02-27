<?php  include 'theme/header.php'; ?>
<?php  include 'theme/sidebar.php'; ?>
	
			<div class = "alert alert-info">Accounts / Admin /Send Notification</div>
			<div class = "well col-lg-12">
				<br />
				<br />
				<form action="./includes/sms_done.php" method="POST">
                    <div class="form-group">
                        <label for="" class="control-label">From:</label>
                        <div>
                           <input type="text" name="from" id="" placeholder="" class="form-control">
                        </div>
                    </div>
					<div class="form-group">
                        <label for="" class="control-label">To:</label>
                        <div>
                           <input type="text" name="to" id="" placeholder="" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Messange</label>
                        <div>
                            <textarea class="form-control">
                            </textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success"> Send Notification</button>
                </form>
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