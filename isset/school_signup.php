<?php 
 include 'header.php';
 $msg = '';
 $full_uri = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
 echo $msg;
 if (strpos($full_uri, "signup=empty") == true) {
 	$msg = 'please fill all field';
 }elseif (strpos($full_uri, "signup=success") == true) {
 	$msg = 'Data register successfully';
 }
?> 
<style>
    .col-lg-12{
        background-color: skyblue;
    }
    </style>
 <div class="col-lg-12">
    <section class="section">
          <div class="row mt-20">
              <div class="col-md-10 col-md-offset-1 pt-50">

                  <div class="row mt-20">
                      <div class="col-md-12">
                          <div class="panel">
                            <div class="panel-heading">
                                <div class="panel-title text-center">
                                    <h4>School Sign up</h4>
                                                    </div>
                                                </div>
                  <div class="panel-body p-10">

                      <div class="section-title p-10">
                          <p class="sub-title text-center">Interschool Sport Management System</p>
                      </div>
                      <?php
                      if ($msg != '') {
                       	?>
                       	<div class="alert alert-warning text-center">
                       		<?php echo "$msg";?>
                       	</div>
                       	<?php
                       } 

                      ?>
<form class="form-horizontal" method="POST" action="../includes/new_school.php" enctype="multipart/form-data" class="">
	<div class="form-group">
		<label for="school_name" class="col-sm-2 control-label">School name</label>
              <div class="col-sm-10">
                    <input type="text" name="school_name" class="form-control" id="school_name" placeholder="School_name">
                  </div>
               </div>
                                  <div class="form-group">
 <label for="school_log_image" class="col-sm-2 control-label">School log image</label>
                               <div class="col-sm-10">
<input type="file" name="school_log_image" class="form-control" id="school_log_image" placeholder="school_log_image"></div>
</div>

                                  <div class="form-group">
 <label for="school_province" class="col-sm-2 control-label">School province</label>
                               <div class="col-sm-10">
<input type="text" name="school_province" class="form-control" id="school_province" placeholder="School_province"></div>
</div>

 <div class="form-group">
       <label for="completition_type" class="col-sm-2 control-label">competition Type</label>
       <div class="col-sm-10">
       	<select class="form-control" name="completition_type" id="completition_type">
       		<option >Select type</option>
       		<option value="football">Football</option>
       		<option value="volleyball">Volleyball</option>
       		<option value="basketball">Basketball</option>
       	</select>
</div>
</div>
<div class="form-group mt-20">
	<label for="date_register" class="col-sm-2 control-label">
		Date register
	</label>
	<div class="col-sm-10">
		<input type="date" name="date_register" class="form-control" id="date_register">
     </div>
</div>
<div class="form-group mt-20">
	<label for="date_register" class="col-sm-2 control-label">
		District
	</label>
	<div class="col-sm-10">
		<input type="text" name="district" class="form-control" id="districtr">
     </div>
</div>
<div class="form-group mt-20">
	<label for="email" class="col-sm-2 control-label">
		Email
	</label>
	<div class="col-sm-10">
		<input type="email" name="email" class="form-control" id="email">
     </div>
</div>
<div class="form-group mt-20">
	<label for="password" class="col-sm-2 control-label">
		Password
	</label>
	<div class="col-sm-10">
		<input type="password" name="password" class="form-control" id="password">
     </div>
</div>
<div class="form-group mt-20">
	<label for="phonenumber" class="col-sm-2 control-label">
		Phonenumber
	</label>
	<div class="col-sm-10">
		<input type="text" name="phonenumber" class="form-control" id="phonenumber">
     </div>
</div>

<div class="form-group mt-20">
<div class="col-sm-offset-2 col-sm-10">                                                       
<button type="submit" name="submit" class="btn btn-success btn-labeled pull-right">Sign in<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
</div>
</div>
</form>
 
                                                </div>
                                            </div>
                                            <!-- /.panel -->
                                        </div>
                                        <!-- /.col-md-11 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.col-md-12 -->
                            </div>
                            <!-- /.row -->
                        </section>

                    </div>

<?php
 include 'footer.php';
?>