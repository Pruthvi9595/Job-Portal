
<?php 
session_start();
include("dbconfig.php");
  if(isset($_POST["login"]))
  {
      $email=$_POST["user_name"];
      $pass=$_POST["password"];
      
        date_default_timezone_set('Asia/Manila');
        $date = date("Y-m-d H:i:s");  

      $sql=mysqli_query($con,"select * from admin where username='$email' and password='$pass'");
      $res=mysqli_fetch_array($sql);
      $id=$res['user_id'];
      $uname=$res['username'];
      if(mysqli_num_rows($sql))
      {
          $res=mysqli_fetch_array($query);
            $_SESSION['id']=$res['user_id'];
            header('Location: Admin/ad_dashboard.php');

            $_SESSION['uname']=$res['username'];
            $_SESSION['id']=$id;
            $_SESSION['uname']=$uname;
            $remarks=" $uname has logged in the Portal ";  
            mysqli_query($con,"INSERT INTO logs(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));
        
      }
      else{
         $error="plz inter valid password";
      }

  }

?>
<html>
<head>
  <title>ADMIN LOGIN</title>
  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/mainn.css">

</head>
<body>
<div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100 p-t-50 p-b-90">
          <span class="login100-form-title p-b-51">
           ADMIN LOGIN
          </span>

<form action="" method="post"  class="login100-form validate-form flex-sb flex-w">
  <div class="error-message"></div>
  
    
    <div class="wrap-input100 validate-input m-b-16" data-validate = "Email is required">
            <input class="input100" name="user_name" type="text" >
            <span class="focus-input100"></span>
  </div>
  
    
    <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
            <input class="input100" name="password" type="password" >
            <span class="focus-input100"></span>
  </div>
  <div class="flex-sb-m w-full p-t-3 p-b-24">
            

        <div>
              <a href="index.php">
                Back to Home
              </a>
            </div>
          </div>
    
  <div class="container-login100-form-btn m-t-17">
    <input type="submit" name="login" value="Login" class="login100-form-btn">
            <span class="focus-input100"></span>
    </div>      
</form>
      </div>
    </div>
  </div>

</body></html>


