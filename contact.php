	<?php
    session_start();
    include('dbconfig.php');
    
?><?php
if(isset($_POST['submit']))
{
  
  $name= strip_tags($_POST['name']);
  $email= strip_tags($_POST['email']);
  $subject= strip_tags($_POST['subject']);
  $message= strip_tags($_POST['message']);
  


  $icon="warning";
  $class="danger";
  if($name=="")  {
    $error[] = "provide title !";  
  }
  else if($email=="")  {
    $error[] = "provide Sector !";
  }else if($subject=="")  {
    $error[] = "provide location !";  
  }
  else  if($message=="")  
    {
    $error[] = "provide type !";  
  }
  

  else
  {
   
    
    
                                 
    $sql= mysqli_query($con,"INSERT INTO contact (name ,email ,subject ,message) VALUES('$name','$email','$subject','$message')");
    if($sql)
    {  
      
       $error[] = "Message  successfully Send";
       echo '<script>alert("Messsage Sent successfully");</script>';
          header('Location: index.php'); 
         $icon="success";
         $class="success";
    }
  } 
}?><!DOCTYPE html>
	<html>
	<head>
		
		
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
								Contact Us				
							</h1>	
							<p class="text-white"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="contact.html"> Contact Us</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start contact-page Area -->
			<section class="contact-page-area section-gap">
				<div class="container">
					<div class="row">
						
						<div class="col-lg-4 d-flex flex-column">
							<a class="contact-btns" href="#">Submit Your CV</a>
							<a class="contact-btns" href="#">Post New Job</a>
							<a class="contact-btns" href="#">Create New Account</a>
						</div>
						<div class="col-lg-8">
							<form class="form-area "  action="contact.php" method="post" class="contact-form text-right">
								<div class="row">	
									<div class="col-lg-12 form-group">
										<input name="name" placeholder="Enter your name" class="common-input mb-20 form-control"  type="text">
									
										<input name="email" placeholder="Enter email address" class="common-input mb-20 form-control"  type="email">

										<input name="subject" placeholder="Enter your subject" class="common-input mb-20 form-control"  type="text">
										<textarea class="common-textarea mt-10 form-control" name="message" placeholder="Messege" ></textarea>
										<button class="primary-btn mt-20 text-white" type="submit" name="submit" >Send Message</button>
										<div class="mt-20 alert-msg" style="text-align: left;"></div>
									</div>
								</div>
							</form>	
						</div>
					</div>
				</div>	
			</section>
			<!-- End contact-page Area -->
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



