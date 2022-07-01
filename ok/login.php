
<?php
session_start();
ob_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title> Login Page</title>
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
				<h2 class="title">Welcome</h2>
                <p> <?php
   if(isset($_SESSION['msg']))
   {
    echo $_SESSION['msg'];
   }
   else{
    echo $_SESSION['msg']="Welcome To Login Page";  
   }
   if(isset($_GET['error']))
   {
    if($_GET['error'] == "Wrongpassword")
    {
        echo '<p class="error"> Plz Enter a correct Password </p>';
    }
    elseif($_GET['error'] == "Invalidemail")
    {
        echo '<p class="error"> Plz Enter a valid Email Id </p>';
    }
}
   
 ?> </p>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		
           		   		<input type="email" placeholder=" Email" name="uname" value="<?php if(isset($_COOKIE['emailcookie'])) 
    {
        echo $_COOKIE['emailcookie'];
    } ?>"> 
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
                      <input type="text" placeholder="password" name="pwd" value="<?php if(isset($_COOKIE['passwordcookie'])) 
    {
        echo $_COOKIE['passwordcookie'];
    } ?>">   
            	   </div>
            	</div>
                <input type="checkbox"  name="rememberme" class="check" style="	margin-top:10px;">  remember me
                
                <input type="submit" name="login" class="btn">
                <a href="recover.php" style="display:flex; justify-content:center;">Forget password</a>
         <P style="display: inline-block; margin-top:30px;"> Don't have an account ?</p> <a href="regis.php" style="display: inline-block;">Register</a> 
            </form>
        </div>
    </div>
    <script type="text/javascript" src="main.js"></script>
</body>
</html>

<?php

include 'dbcon.php';

if(isset($_POST['login']))
{
    
    $email=mysqli_real_escape_string($con,$_POST['uname']);
    $password=mysqli_real_escape_string($con,$_POST['pwd']);

    $email_search= "SELECT * FROM registration WHERE  email='$email' and status='active' ";
    $query= mysqli_query($con,$email_search);
    $email_count = mysqli_num_rows($query);

    if($email_count)
    {
        $email_pass = mysqli_fetch_assoc($query);
        $db_pass = $email_pass['password']; // to get the corresponding password
        $pass_decode = password_verify($password,$db_pass);
    

    //to find the email is there or not
    if($pass_decode)
    {
        if(isset($_POST['rememberme']))
        {
            setcookie('emailcookie',$email,time()+86400);
            setcookie('passwordcookie',$password,time()+86400);
        header("Location:index.php");
        exit();
        }
        else{
            header("Location:index.php");
        exit();
        }
            
    }
    else{
        header("Location:login.php?error=Wrongpassword");
        exit();
    }
}
else{
    header("Location:login.php?error=Invalidemail");
    exit();
}   
 
}
?>
    