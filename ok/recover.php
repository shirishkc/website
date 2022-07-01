
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> Recover Form</title>
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
				<h2 class="title">Recover Your Account</h2>
				<?php
               if(isset($_GET['error']))
			   {
				if($_GET['error'] == "emailsendingfailed")
				{
					echo '<p class="error"> Email Sending Failed </p>';
				}
				elseif($_GET['error'] == "noemailfound")
				{
					echo '<p class="error"> No Email Found </p>';
				}
			}
			?>
				
           		
                   <div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		
           		   		<input type="text" name="mail" placeholder="Email" >
           		   </div>
           		</div>
           		
                
               

            	
            	<input type="submit" name="submit" class="btn" value="Send">
				<P style="display: inline-block; margin-top:30px;"> Have an account ?</p> <a href="login.php" style="display: inline-block;">Login</a> 
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
    $email=mysqli_real_escape_string($con,$_POST['mail']);




// email query (there will be no existing email)
$emailquery = "SELECT * FROM registration WHERE  email='$email' ";
$query= mysqli_query($con,$emailquery);
//check email adess exist or not
$emailcount = mysqli_num_rows($query);

if($emailcount)
{ 
    $userdata = mysqli_fetch_assoc($query);
    $username = $userdata['username'];
    $token = $userdata['token'];
    $subject = "Passsword reset";
    $body = "Hi, $username.Click Here Reset your Password http://localhost/Fullwebsite/reset.php?token=$token";
    $headers = "From: devlopercontent@gmail.com";
    
    if (mail($email, $subject, $body, $headers)) {
        $_SESSION['msg'] ="Check your email to reset your account $email";
        
        header("Location:login.php");
        exit();
    } else {
        header("Location:recover.php?error=emailsendingfailed");
        exit();
    }
    
    
 }
 else{
    header("Location:recover.php?error=noemailfound");
        exit();
 }

    }
