
<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form action="" method="post">
				<img src="img/avatar.svg">
				<h2 class="title">Reset password</h2>
                <p> <?php
   if(isset($_SESSION['passmsg']))
   {
    echo $_SESSION['passmsg'];
   }
   else {
    echo $_SESSION['passmsg'] ="";
   }
   
    ?> </p>

				
           		
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	
           		    	<input type="text"  name="pwd-new" placeholder="password" >
            	   </div>
            	</div>
                
                <div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	
           		    	<input type="text" name="pwd-repeat"  placeholder=" Retype-password">
            	   </div>
            	</div>

            	
            	
                <input type="submit"  name="submit" class="btn" value="Reset">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="main.js"></script>
</body>
</html>


<?php

include 'dbcon.php';

if(isset($_POST['submit']))
{
    if(isset($_GET['token']))
    {
        $token = $_GET['token'];
 
    $newpassword=mysqli_real_escape_string($con,$_POST['pwd-new']);
    $cpassword=mysqli_real_escape_string($con,$_POST['pwd-repeat']);


//create password in hashing property
$pass= password_hash($newpassword, PASSWORD_BCRYPT);
$cpass= password_hash($cpassword, PASSWORD_BCRYPT);



// email query (there will be no existing email)




    if($newpassword === $cpassword)
    {
        $updatequery = " update registration set password='$pass' where token='$token'";

        $iquery = mysqli_query($con, $updatequery);

if($iquery)
 {
    
   $_SESSION['msg'] ="Your password has been updated";
   header("Location: login.php");
   exit();
   
    
    
 }
 else {
   
    $_SESSION['passmsg']="Your password has not been updated";
    header("Location: reset.php");
    exit();
       
    
 }
}
 else{
    $_SESSION['passmsg']="Your password are not matching";
 }
    
   
}
else{
    echo "No token found";
}
}
?>