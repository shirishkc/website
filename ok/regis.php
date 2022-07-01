10
70<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> Signup Form</title>
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
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				<img src="img/avatar.svg">
				<h2 class="title">Signup</h2>
				<?php
               if(isset($_GET['error']))
			   {
				if($_GET['error'] == "emptyfields")
				{
					echo '<p class="error"> Fill in all feilds </p>';
				}
				
				elseif($_GET['error'] == "invalidemail")
				{
					echo '<p class="error"> Plz Enter A Valid Email Id </p>';
				}
				elseif($_GET['error'] == "EmailExist")
				{
					echo '<p class="error">  Email Id Alerady Exist </p>';
				}
				elseif($_GET['error'] == "Emailsendingfailed")
				{
					echo '<p class="error"> Email Sending failed  </p>';
				}
				elseif($_GET['error'] == "Passwordnotmatching")
				{
					echo '<p class="error"> Password Are Not Matching </p>';
				}

			}
				?>
				
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		
           		   		<input type="text"   name="uid" placeholder="Enter Username" >
           		   </div>
           		</div>
                   <div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		
           		   		<input type="text" name="mail" placeholder="Email" >
           		   </div>
           		</div>
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

            	
            	<input type="submit" name="signup" class="btn" value="Signup">

				<P style="display: inline-block; margin-top:30px;"> Have an account ?</p> <a href="login.php" style="display: inline-block;">Login</a> 
            </form>
        </div>
    </div>
    <script type="text/javascript" src="main.js"></script>
</body>
</html>


<?php

include 'dbcon.php';

if(isset($_POST['signup']))
{
    $username=mysqli_real_escape_string($con,$_POST['uid']);
    $email=mysqli_real_escape_string($con,$_POST['mail']);
    $password=mysqli_real_escape_string($con,$_POST['pwd-new']);
    $cpassword=mysqli_real_escape_string($con,$_POST['pwd-repeat']);

	if(empty($username) || empty($email) || empty($password)|| empty($cpassword))
    {
        header("Location:regis.php?error=emptyfields");
        exit();
        
    }
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        header("Location:regis.php?error=invalidemail");
        exit();
        
    }

//create password in hashing property
$pass= password_hash($password, PASSWORD_BCRYPT);
$cpass= password_hash($cpassword, PASSWORD_BCRYPT);

$token = bin2hex(random_bytes(15));

// email query (there will be no existing email)
$emailquery = "SELECT * FROM registration WHERE  email='$email' ";
$query= mysqli_query($con,$emailquery);
//check email adess exist or not
$emailcount = mysqli_num_rows($query);

if($emailcount>0)
{
	header("Location:regis.php?error=EmailExist");
    exit();
}
else{
    if($password === $cpassword)
    {
        $insertquery = "insert into registration (username,email,password,cpassword,token,status) values('$username','$email','$pass','$cpass','$token','inactive') ";

        $iquery = mysqli_query($con, $insertquery);

if($iquery)
 {
    
   
    $subject = "Email activation";
    $body = "Hi, $username.Click Here To Activate Your Account http://localhost/Fullwebsite/activate.php?token=$token";
    $headers = "From: devlopercontent@gmail.com";
    
    if (mail($email, $subject, $body, $headers)) {
        $_SESSION['msg'] ="Check your email to activate your account $email";
        
        header("Location:login.php");
        exit();
    } else {
		header("Location:regis.php?error=Emailsendingfailed");
		exit();
    }
    
    
 }
 else {
   
       ?>
       <script>
           alert("Not inserted");
           </script>
           <?php
       
    
 }
    }
    else{
		header("Location:regis.php?error=Passwordnotmatching");
		exit();
    }
}
}