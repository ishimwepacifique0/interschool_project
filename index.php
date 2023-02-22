<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>School</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="assets/css/style-starter.css">
        <script src="js/modernizr/modernizr.min.js"></script>
        <style>
          .list-image{
            padding:1rem;
            display:flex;
          }
          .img-radius{
            border-radius:50%;
          }
          </style>
</head>
<body>
  <!-- Top Menu 1 -->
<div class="list-image">
<?php 
    include 'includes/conn.php';

    $sql = "SELECT * FROM school_data";
    $result =  mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_array($result)) {
      ?>
      <div class="container">
        <a href="isset/detail.php?id=<?php echo $row['id'];?>">
          <img src="image/db_image/<?php echo $row['school_log_image']?>" class="img-radius" width="50px" height="50">
    </a>
      </div>
      <?php
    }
  ?>
</div>
<section class="w3l-top-menu-1">
  <div class="top-hd">
    <div class="container">
  <header class="row top-menu-top">
    <div class="accounts col-md-9 col-6">
        <li class="top_li"><span class="fa fa-phone"></span><a href="tel:+142 5897555">+142 5897555</a> </li>
        <li class="top_li1"><span class="fa fa-envelope-o"></span> <a href="mailto:education-mail@support.com" class="mail"> interschool@gmail.com</a> </li>
    </div>
    <div class="social-top col-md-3 col-6">
    <a href="login.php" class="btn btn-secondary btn-theme4">Sign in</a>
      <a href="isset/school_signup.php" class="btn btn-secondary btn-theme4">Sign up</a>
    </div>
  </header>
</div>
</div>
</section>
<section class="w3l-bootstrap-header mt-3">
  <nav class="navbar navbar-expand-lg navbar-light py-lg-2 py-2">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="image/logo.jpg" alt="" srcset="" class=" mx-auto img-logo" ></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa fa-bars"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="isset/fixture.php">Fixture</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="isset/result.php">Result</a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="isset/table.php">Table</a>
          </li>
        </ul>
        <form action="search-results.html" class="form-inline position-relative my-1 my-lg-0">
          <input class="form-control search" type="search" placeholder="Search here..." aria-label="Search" required="">
          <button class="btn btn-search position-absolute" type="submit"><span class="fa fa-search" aria-hidden="true"></span></button>
        </form>
      </div>
    </div>
  </nav>
</section>
<section class="w3l-features-8">
       <!-- /features -->
      <div class="features py-5">
			<div class="container py-md-3">
				
					
			   <div class="fea-gd-vv text-center row">
          <?php
           include 'includes/conn.php';

           $sql = "SELECT * FROM info_data limit 6";
           $result = mysqli_query($conn,$sql);
           while($row = mysqli_fetch_array($result)){
            ?>
          
					<div class="float-top col-lg-4 col-md-6">	
							<a href="#"><img src="image/db_image/cover_image.jpg" class="img-responsive" alt=""></a>
							<div class="float-lt feature-gd">	
									<h3><a href="#"><?php echo  ucfirst($row['title'])?></a> </h3>
										<p><?php echo ucfirst($row['decription'])?> </p>
									</div>
					</div>
          <?php
        }
          ?>
				   						 				 
		     	</div>  
		    </div>
          </div>
<?php 
   include 'isset/footer.php';
?>