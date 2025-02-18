<?php
session_start();

include("dbconfig.php");

if(isset($_POST['btn-signup']))
{
	$cname= strip_tags($_POST['cname']);
	$uname= strip_tags($_POST['txt_uname']);
	$umail= strip_tags($_POST['email']);
	$upass= strip_tags($_POST['txt_upass']);
	$contact= strip_tags($_POST['contact']);
	$address= strip_tags($_POST['address']);
	$sector= strip_tags($_POST['sector']);
	$regno= strip_tags($_POST['regno']);
	$location= strip_tags($_POST['location']);
	$postalcode= strip_tags($_POST['postalcode']);
	$description= strip_tags($_POST['description']);
	$icon="warning";
	$class="danger";
	
	if($cname=="")	{
		$error[] = "provide Company Name !";
	}
	
	else if($uname=="")	{
		$error[] = "provide username !";	
	}
	else  if($umail=="")	
    {
		$error[] = "provide email id !";	
	}
	else if(!filter_var($umail, FILTER_VALIDATE_EMAIL))	{
	    $error[] = 'Please enter a valid email address !';
	}
	else if($upass=="")	{
		$error[] = "provide password !";
	}
	else if($contact=="")	{
		$error[] = "provide Contact !";
	}else if($address=="")	{
		$error[] = "provide Address !";
	}else if($sector=="")	{
		$error[] = "provide Sector !";
	}else if($regno=="")	{
		$error[] = "provide regno !";
	}else if($location=="")	{
		$error[] = "provide location !";
	}else if($postalcode=="")	{
		$error[] = "provide postalcode !";
	}else if($description=="")	{
		$error[] = "provide description !";
	}
	else
	{
		//$sql="insert into registration values();"
		$sql= mysqli_query($con,"insert into company_reg (comp_name,username,email,password,contact,address,sector,regno,location,postalcode,description) values('$cname','$uname','$umail','$upass','$contact','$address','$sector','$regno','$location','$postalcode','$description')");
		if($sql)
		{  
		   echo '<script>alert("Registration successfully for login click on sign button");</script>';
		   header("location:company_log.php");
		   $icon="success";
	       $class="success";	
		}
	}	
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>COMPANY REGISTRATION</title>
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/mainn.css">

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<span class="login100-form-title p-b-51">
						COMPANY REGISTRATION
					</span>



	<form class="login100-form validate-form flex-sb flex-w" method="post" action="">
  	
  	<div class="wrap-input100 validate-input m-b-4">
  	  
  	  <input class="input100" type="text" name="cname"  placeholder="Company Name">
  	</div>
  	          
  	<div class="wrap-input100 validate-input m-b-4">
  	  <input class="input100" type="text" name="txt_uname"  placeholder="username">
  	</div>
  	<div class="wrap-input100 validate-input m-b-4">
  	  <input class="input100" type="email" name="email"  placeholder="Email">
  	</div>
  	
  	
  	  <div class="wrap-input100 validate-input m-b-4">
  	  <input class="input100" type="password" name="txt_upass" placeholder="password">
  	</div>
  	<div class="wrap-input100 validate-input m-b-4">
  	  
  	  <input class="input100" type="text" name="contact"  placeholder="Contact">
  	</div>
  	<div class="wrap-input100 validate-input m-b-4">
  	  
  	  <input class="input100" type="text" name="address"  placeholder="Address">
  	</div>
  	<div class="wrap-input100 validate-input m-b-4">
  	  
  	  <input class="input100" type="text" name="sector"  placeholder="Sector">
  	</div>
  	<div class="wrap-input100 validate-input m-b-4">
  	  
  	  <input class="input100" type="text" name="regno"  placeholder="Regno">
  	</div>
  	<div class="wrap-input100 validate-input m-b-4">
  	  
  	  <input class="input100" type="text" name="location"  placeholder="Location">
  	</div>
  	<div class="wrap-input100 validate-input m-b-4">
  	  
  	  <input class="input100" type="text" name="postalcode"  placeholder="PostalCode">
  	</div>
  	<div class="wrap-input100 validate-input m-b-4 rows-5">
  	  
  	  <input class="input100" type="text" name="description"  placeholder="Description">
  	</div>
    
     <div class="flex-sb-m w-full p-t-3 p-b-24">
						

				<div>
							<a href="company_log.php" class="txt1">
								Already Have Account.
							</a>
						</div>
					</div>
  	<div class="container-login100-form-btn m-t-17">
  	  <button class="login100-form-btn" type="submit" class="btn" name="btn-signup">Register</button>
  	</div>
  	
                    </form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	<script src="scripts/jquery-2.1.3.min.js"></script>
<script src="scripts/custom.js"></script>
<script src="scripts/jquery.superfish.js"></script>
<script src="scripts/jquery.themepunch.tools.min.js"></script>
<script src="scripts/jquery.themepunch.revolution.min.js"></script>
<script src="scripts/jquery.themepunch.showbizpro.min.js"></script>
<script src="scripts/jquery.flexslider-min.js"></script>
<script src="scripts/chosen.jquery.min.js"></script>
<script src="scripts/jquery.magnific-popup.min.js"></script>
<script src="scripts/waypoints.min.js"></script>
<script src="scripts/jquery.counterup.min.js"></script>
<script src="scripts/jquery.jpanelmenu.js"></script>
<script src="scripts/stacktable.js"></script>
<script src="scripts/headroom.min.js"></script>
<script src="bootstrap/jquery-3.2.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>