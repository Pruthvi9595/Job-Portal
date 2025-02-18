
<?php 
session_start();
    include("dbconfig.php");

if(isset($_POST['btn-signup']))
{ 
	$fname= strip_tags($_POST['fname']);
	$mname= strip_tags($_POST['mname']);
	$lname= strip_tags($_POST['lname']);
	$umail= strip_tags($_POST['txt_umail']);
    $contact= strip_tags($_POST['contact']);
    $gender= strip_tags($_POST['gender']);
    $dob= strip_tags($_POST['dob']);
    $address= strip_tags($_POST['address']);
    $location= strip_tags($_POST['location']);
    $pincode= strip_tags($_POST['pincode']);
    $uname= strip_tags($_POST['txt_uname']);
	$upass= strip_tags($_POST['txt_upass']);
	$occupation= strip_tags($_POST['occupation']);
	$sector= strip_tags($_POST['sector']);
	$academiclevel= strip_tags($_POST['academiclevel']);
	$industry= strip_tags($_POST['industry']);
	
	$icon="warning";
	$class="danger";
	
	      if($fname=="")	{
		$error[] = "provide fname !";
	}else if($mname=="")	{
		$error[] = "provide mname !";
	}else if($lname=="")	{
		$error[] = "provide lname !";
	}else  if($umail=="")	{
		$error[] = "provide email id !";	
	}else if(!filter_var($umail, FILTER_VALIDATE_EMAIL))	{
	    $error[] = 'Please enter a valid email address !';
	}else if($contact=="")	{
		$error[] = "provide Contact !";
	}else if($gender=="")	{
		$error[] = "provide gender !";
	}else if($dob=="")	{
		$error[] = "provide dob !";
	}else if($address=="")	{
		$error[] = "provide Address !";
	}else if($location=="")	{
		$error[] = "provide location !";
	}else if($pincode=="")	{
		$error[] = "provide pincode !";
	}else if($uname=="")	{
		$error[] = "provide username !";	
	}
	else if($upass=="")	{
		$error[] = "provide password !";
	}
	else if($occupation=="")	{
		$error[] = "provide occupation !";
	}
	else if($sector=="")	{
		$error[] = "provide sector !";
	}else if($academiclevel=="")	{
		$error[] = "provide academiclevel !";
	}else if($industry=="")	{
		$error[] = "provide industry !";
	} 
    else
	{
		
		$sql= mysqli_query($con,"insert into reg_user (fname,mname,lname,email,contact,gender,dob,address,location,pincode,username,password,occupation,sector,academiclevel,industry) values('$fname','$mname','$lname','$umail','$contact','$gender','$dob','$address','$location','$pincode','$uname','$upass','$occupation','$sector','$academiclevel','$industry')");
		if($sql)
		{  
		   echo '<script>alert("Registration successfully for login click on sign button");</script>';
		   header("location:user_login.php");
		   $icon="success";
	       $class="success";	
		}
	}	
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>USER REGISTRATION</title>
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/mainn.css">

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<span class="login100-form-title p-b-51">
						USER REGISTRATION
					</span>



	<form class="login100-form validate-form flex-sb flex-w" method="post" action="">
  	<div class="wrap-input100 validate-input m-b-16">
  	  
  	  <input class="input100" type="text" name="fname"  placeholder="Firstname">
  	</div>
  	<div class="wrap-input100 validate-input m-b-16">
  	  
  	  <input class="input100" type="text" name="mname"  placeholder="midname">
  	</div>
  	<div class="wrap-input100 validate-input m-b-16">
  	  
  	  <input class="input100" type="text" name="lname"  placeholder="lastname">
  	</div>
  	<div class="wrap-input100 validate-input m-b-16">
  	  
  	  <input class="input100" type="text" name="contact"  placeholder="contact">
  	</div>
  	<div class="wrap-input100 validate-input m-b-16">
  	  
  	  <input class="input100" type="date" name="dob"  placeholder="dob">
  	</div>
  	<div class="wrap-input100 validate-input m-b-16">
  	  
  	  <input class="input100" type="text" name="address"  placeholder="address">
  	</div>
  	<div class="wrap-input100 validate-input m-b-16">
  	  
  	  <input class="input100" type="text" name="location"  placeholder="location">
  	</div>
  	<div class="wrap-input100 validate-input m-b-16">
  	  
  	  <input class="input100" type="text" name="pincode"  placeholder="pincode">
  	</div>
  	<div class="wrap-input100 validate-input m-b-16">
  	  
  	  <input class="input100" type="text" name="occupation"  placeholder="occupation">
  	</div>
  	<div class="wrap-input100 validate-input m-b-16">
  	  
  	  <input class="input100" type="text" name="sector"  placeholder="sector">
  	</div>
  	<div class="wrap-input100 validate-input m-b-16">
  	  
  	  <input class="input100" type="text" name="academiclevel"  placeholder="academiclevel">
  	</div>
  	<div class="wrap-input100 validate-input m-b-16">
  	  
  	  <input class="input100" type="text" name="industry"  placeholder="industry">
  	</div>
  	<div class="wrap-input100 validate-input m-b-16">
  	  
  	  <select name="gender" class="input100" required>
                               <option value="" class="input100">Select Gender</option>
                                <option value="Male" class="input100">MALE</option>
                                 <option value="Female" class="input100">FEMALE</option>
                               </select>
  	</div>
  	<div class="wrap-input100 validate-input m-b-16">
  	  
  	  <input class="input100" type="text" name="txt_uname"  placeholder="username">
  	</div>
  	<div class="wrap-input100 validate-input m-b-16">
  	  
  	  <input class="input100" type="email" name="txt_umail"  placeholder="email">
  	</div>
  	<div class="wrap-input100 validate-input m-b-16">
  	  
  	  <input class="input100" type="password" name="txt_upass" placeholder="password">
  	</div>
     <div class="flex-sb-m w-full p-t-3 p-b-24">
						

				<div>
							<a href="user_login.php" class="txt1">
								Already Have Account.
							</a>
							&nbsp;
							<a href="index.php" class="txt1">
								Back to Home
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