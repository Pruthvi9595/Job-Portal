<?php
include("cheader.php");
?>
			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
							JOBS				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="jobs.php"> JOBS</a><span class="lnr lnr-arrow-right"></span>  <a href="accounting.php"> ACCOUNTING</a></p>
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
					
                        $query = "SELECT * FROM cposts WHERE catagory='Accounting'";
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
<?php
include("cfooter.php");
?>
		
			