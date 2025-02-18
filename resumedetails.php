<?php 
    include("dbconfig.php");
    session_start();
    ?><!DOCTYPE html>
<html>
<head>
  <title>RESUME</title>
</head>
<style type="text/css">
section .section__title {
    letter-spacing: 2px;
    color: #54AFE4;
    font-weight: bold;
    margin-bottom: 10px;
    text-transform: uppercase;
  }
  .container {
  max-width: 700px;   
  background: #fff;
  margin: 0px auto 0px; 
  box-shadow: 1px 1px 2px #DAD7D7;
  border-radius: 3px;  
  padding: 40px;
  margin-top: 50px;
}
  .full-name {
    font-size: 40px;
    text-transform: uppercase;
    margin-bottom: 5px;
  }
  .first-name {
    font-weight: 700;
  }
  
  .last-name {
    font-weight: 300;
  }
   .contact-info {
    margin-bottom: 20px;
  }
  
  .email ,
  .phone {
    color: #999;
    font-weight: 300;
  } 
  
  .separator {
    height: 10px;
    display: inline-block;
    border-left: 2px solid #999;
    margin: 0px 10px;
  }
  
  .position {
    font-weight: bold;
    display: inline-block;
    margin-right: 10px;
    text-decoration: underline;
  }
  .section:last-of-type {
    margin-bottom: 0px;  
  }
  
  .section-title {
    letter-spacing: 2px;
    color: #54AFE4;
    font-weight: bold;
    margin-bottom: 10px;
    text-transform: uppercase;
  }
  
  .section__list-item {
    margin-bottom: 40px;
  }
  .name {
    font-weight: bold;
  }
  
  .section__list-item:last-of-type {
    margin-bottom: 0;
  }
  
  .left ,
  .right {
    vertical-align: top;
    display: inline-block;
  }
  
  .left {
    width: 60%;    
  }
  
  .right {
    tex-align: right;
    width: 39%;    
  }
  
  .name {
    font-weight: bold;
  }
  
  a {
    text-decoration: none;
    color: #000;
    font-style: italic;
  }
  
  a:hover {
    text-decoration: underline;
    color: #000;
  }
  
  .skills {
    
  }
    
  .skills__item {
    margin-bottom: 10px;  
  }
  .input {
      display: none;
    }
    
    label {
      display: inline-block;  
      width: 20px;
      height: 20px;
      background: #C3DEF3;
      border-radius: 20px;
      margin-right: 3px;
    }
    
    input:checked + label {
      background: #79A9CE;
    }
</style>
<body>
  <section>
                        
           <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>

<?php
                         $res_id=$_GET['res_id'];
                        $query1 = "SELECT * FROM resume WHERE res_id='$res_id'";
                        $result1 = mysqli_query($con,$query1);
                        while($res1 = mysqli_fetch_array($result1)) {  
                           $user_id=$res1['user_id'];
                          $query= "SELECT * FROM reg_user WHERE user_id='$user_id'";
                        $result = mysqli_query($con,$query);
                        while($res = mysqli_fetch_array($result)) {  
                                       
                        
                        ?>
<div class="container">
  <div class="header">
    <div class="full-name">
      <span class="first-name"><?php echo $res['fname'];?></span> 
      <span class="last-name"><?php echo $res['lname'];?></span>
    </div>
    <div class="contact-info">
      <span class="email">Email: </span>
      <span class="email-val"><?php echo $res['email'];?></span>
      <span class="separator"></span>
      <span class="phone">Phone: </span>
      <span class="phone-val"><?php echo $res['contact'];?></span>
    </div>
    
    <div class="about">
      <span class="position"><?php echo $res['occupation'];?></span>
      <span class="desc">
       <?php echo $res['occdec'];?>. 
      </span>
    </div>
  </div><br>
   <div class="details">
    <div class="section">
    
  
    <div class="section">
      <div class="section__title">Education</div>
      <div class="section__list">
        <div class="section__list-item">
          <div class="left">
            <div class="name"><?php echo $res1['college'];?></div>
            <div class="addr"><?php echo $res1['addr'];?></div>
            <div class="duration"><?php echo $res1['yers'];?></div>
          </div>
          <div class="right">
            <div class="name"><?php echo $res1['dept'];?></div>
            <div class="desc"><?php echo $res1['descrpt'];?></div>
          </div>
        </div>
        <div class="section__list-item">
          <div class="left">
            <div class="name"><?php echo $res1['college2'];?></div>
            <div class="addr"><?php echo $res1['addr2'];?></div>
            <div class="duration"><?php echo $res1['yers2'];?></div>
          </div>
          <div class="right">
            <div class="name"><?php echo $res1['dept2'];?></div>
            <div class="desc"><?php echo $res1['descrpt2'];?></div>
          </div>
        </div>

      </div>
      
  </div><br>
     <div class="section">
      <div class="section__title">Projects</div> 
       <div class="section__list">
         <div class="section__list-item">
           <div class="name"><?php echo $res1['project'];?></div>
           <div class="text"><?php echo $res1['descr'];?>.</div>
         </div>
         
         <div class="section__list-item">
                    <div class="name"><?php echo $res1['project2'];?></div>
           <div class="text"><?php echo $res1['descr2'];?>.
           </div>
         </div>
       </div>
    </div><br>
     <div class="section">
       <div class="section__title">Skills</div>
       <div class="skills">
         <div class="skills__item">
           <div class="left"><div class="name">
             <?php echo $res1['skill1'];?>
             </div></div>
           
         </div>
         
       </div>
       <div class="skills__item">
           <div class="left"><div class="name">
            <?php echo $res1['skill2'];?></div></div>
          
         </div>
         
       </div>
     <div class="section">
     <div class="section__title">
       Interests
       </div>
       <div class="section__list">
         <div class="section__list-item">
                  <?php echo $res1['intr1'];?>,<?php echo $res1['intr2'];?>.
          </div>
       </div>
     </div>
     </div>
      <?php }}?> 
  </div>
</div>
         </section>
  
 

</body>
</html>