<?php
if(isset($_POST['login']))
{
    $name =$_POST['name'];
    $mailfrom = $_POST['email'];
    $message = $_POST['message'];

    // if(empty($name) || empty($mailfrom) || empty($message))
    // {
    //     header("Location:index.php?error=emptyfields");
    //     exit();
        
    // }
	// elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
    // {
    //     header("Location:index.php?error=invalidemail");
    //     exit();
        
    // }



    $mailTO = "alxipasa@gmail.com";
    $headers= "From: ". $mailfrom;
    $txt =" You have recived an email from ".$name.".\n\n".$message;

      mail($mailTO,$headers,$txt);
    header("location:index.php?success=mailsend");
  
}
    