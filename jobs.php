	<?php 
    include("dbconfig.php");
    session_start();
?>
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="img/fav.png">
		<meta name="author" content="codepixer">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta charset="UTF-8">
		<title>CAREER ADVISER</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<style type="text/css">
	footer {
    margin-left:-20px;
    margin-right: -20px;
    padding-left: 20px;
    padding-right: 20px;
    padding-top: 50px;

    background-color: #444444;
   
  }
  footer .p {
    margin-bottom: 9px;

  }
}
</style>
		<body>

			   <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.php"><h4 class="text-white">CAREER ADVISER</h4></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="index.php">Home</a></li>
				          <li><a href="companies.php">COMPANIES</a></li>
				          <li><a href="jobs.php">JOBS</a></li>
				          <li><a href="resumes.php">RESUMES</a></li>
				          <li><a href="blogs.php">BLOGS</a></li>
				         
				          <li><a href="contact.php">CONTACT</a></li>
				           <li><a class="ticker-btn" href="#">LOGIN</a>
				            <ul>
				            	<li><a href="admin_login.php">ADMIN</a></li>
								<li><a href="company_log.php">COMPANY</a></li>
								<li><a href="user_login.php">USER</a></li>
								
				            </ul>
				          		          				          
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->
			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
							JOBS				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="category.html"> JOBS</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
			
			<!-- Start post Area -->

                                
			<section class="post-area section-gap">
				<div class="container">
					<div class="row justify-content-center d-flex">
						<div class="col-lg-8 post-list">
							<?php
                        $query = "SELECT * FROM cposts ORDER BY jobtitle ASC";
                        $result = mysqli_query($con,$query);
                        while($res = mysqli_fetch_array($result)) {  
                            $post_id=$res['post_id'];
                            $comp_name=$res['company'];
                            $query1 = "SELECT * FROM company_reg WHERE comp_name='$comp_name'";
                        $result1 = mysqli_query($con,$query1);
                        while($res1 = mysqli_fetch_array($result1)) {  
                                       
                        
                        ?>
                       
							<div class="single-post d-flex flex-row">
								<div class="thumb">
									<img src="img/post.png" alt="">
									<ul class="tags">
										<li>
											
											<a href="#"><?php echo $res['catagory'];?></a>					
										</li>
									</ul>
								</div>
								

							<div class="details">
									<div class="title d-flex flex-row justify-content-between">
										<div class="titles">
											<a href="jobpostdetails.php?post_id=<?php echo $res['post_id'];?>"><h4><?php echo $res['jobtitle']; ?></h4></a>
											<h6><?php echo $res['company'];?></h6>					
										</div>
										<ul class="btns">
											
											<li><a href="user_login.php">Apply</a></li>
										</ul>
									</div>
									<p>
										<?php echo $res['description'];?>
									</p>
									<h5>Job Nature: <?php echo $res['type']; ?></h5>
									<p class="address"><span class="lnr lnr-map"></span> <?php echo $res1['regno'];?>,<?php echo $res1['address'];?>,<?php echo $res1['postalcode'];?></p>
									<p class="address"><span class="lnr lnr-database"></span><?php echo $res['sal'];?>k</p>
								</div>
							</div>						<?php }}?> 
						</div>
					</div>
				</div>	
			</section>
			  
			<!-- End post Area -->

			<!-- Start callto-action Area -->
			<section class="callto-action-area section-gap" id="join">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content col-lg-9">
							<div class="title text-center">
								<h1 class="mb-10 text-white">Join us today without any hesitation</h1>
								<p class="text-white">join to achive yours dream jobs for secure future join to achieve the goals of company to select the bestest best employer </p>
								<a class="primary-btn" href="#">I am a Candidate</a>
								<a class="primary-btn" href="#">I am a Employer</a>
							</div>
						</div>
					</div>	
				</div>	
			</section>
			<!-- End calto-action Area -->
		
			<!-- start footer Area -->		
			<footer class="footer-area" >
				<div class="container">
					
					
					<div class="container">
                <nav>
                    <ul>
                        <li class="text-white" align="center">
                            
                                                                 CAREER ADVISER
                            
                        </li>
                        <li class="text-white" align="center">
                            
                            
                        </li>
                        <li class="text-white" align="center">
                            
                            
                        </li>
                        <li class="text-white" align="center">
                            
                            
                        </li>
                        
                    </ul>
                </nav>
                <div class="text-white" align="center">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script> Designed and Coded by Satyajit Nikam & Team, Inc.
                </div>
            </div>
        </div>
			</footer>
			<!-- End footer Area -->		

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>			
			<script src="js/parallax.min.js"></script>		
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>



