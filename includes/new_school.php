<?php 
  if (isset($_POST['submit'])) {

  	  include 'conn.php';

  	 $school_name =$_POST['school_name'];
  	 $school_log_image = $_FILES['school_log_image']['name'];
	 $school_log_image_tmp = $_FILES['school_log_image']['tmp_name'];
  	 $school_province = $_POST['school_province'];
  	 $completition_type = $_POST['completition_type'];
	 $date_register = "CURRENT_NOW()";
  	 $district = $_POST['district'];
  	 $email = $_POST['email'];
  	 $password = $_POST['password'];
  	 $phonenumber = $_POST['phonenumber'];

	 $filedestination = '../image/db_image/'.$school_log_image;

  	 if (empty($school_name) || empty($school_log_image)||empty($school_province)||empty($completition_type) || empty($date_register) || empty($district) || empty($email) || empty($password)|| empty($phonenumber)  ) {
  	 	header("Location:../isset/school_signup.php?signup=empty");
  	 	exit();
  	 	}else{
  	 		  $sql = "INSERT INTO school_data(school_name,school_log_image,school_province,competition__type,date_register,district,email,password,phonenumber) VALUES('$school_name','$school_log_image','$school_province','$completition_type','$date_register','$district','$email','$password','$phonenumber')";
  	 		  $result = mysqli_query($conn,$sql);
			   move_uploaded_file($school_log_image_tmp,$filedestination);
			   if($result){
				$sqldelete = "DELETE FROM matches";
				$result2 = mysqli_query($conn,$sqldelete);
				}
            	header('Location:../isset/school_signup.php?signup=success');
            	exit();

            }
  	 
  }
?>