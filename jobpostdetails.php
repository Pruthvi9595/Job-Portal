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
								COMPANIES				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="about-us.html"> COMPANIES</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
				
			<!-- Start post Area -->
            <section class="post-area section-gap ">
				<div class="container">
					<div class="row justify-content-left d-flex">
						<div class="col-lg-16 post-list" >
							<?php
                              $post_id=$_GET['post_id'];
                              $query = "SELECT * FROM cposts WHERE post_id='$post_id'";
                              $result = mysqli_query($con,$query);
                              while($res = mysqli_fetch_array($result))
                               {  ?>   
							<div class="single-post d-flex flex-row">
								<div class="thumb">
									<img src="img/post.png" alt="">
									<ul class="tags">
										<li>
											<a href="#"><?php echo $res['location']; ?></a>
										</li>
										
									</ul>
								</div>
								

							<div class="details">
									<div class="title d-flex flex-row justify-content-between">
										<div class="titles">
											<a href="companydetails.php?comp_id=<?php echo $res['comp_id'];?>"><h4><?php echo $res['jobtitle']; ?></h4></a>
											<h6><?php echo $res['link'];?>	<h6>				
										</div>
										
									</div>
									<p>
										<h5>Description: </h5><?php echo $res['description']; ?>
   									</p>
									<h5 >Sector: <?php echo $res['sector']; ?></h5>
									<h5 >Regno: <?php echo $res['regno']; ?></h5>
									<h5>Address:<?php echo $res['address']; ?>, <?php echo $res['postalcode']; ?></h5>
									<h5>Contact: <?php echo $res['apemail']; ?>, <?php echo $res['contact']; ?></h5>
								</div>
							</div>

						
						</div>
					</div>
				</div>	<?php }?> 
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
			<footer>
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



