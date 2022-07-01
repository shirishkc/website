<?php
session_start();

include 'dbcon.php';

if(isset($_GET['token']))
{
    $token = $_GET['token'];
    $updatequery = " update  registration set status ='active' where token='$token' ";
    $query = mysqli_query($con,$updatequery);

    if($query)
    {
        if(isset($_SESSION['msg']))
        {
            $_SESSION['msg'] ="Account Updated Sucessfully";
            header("Location:login.php");
        exit();

        }
        else{
            $_SESSION['msg'] ="You are logged out";
            header("Location:login.php");
            exit();
        }
    }
        else{
            $_SESSION['msg'] ="Account Not Updated There is A some Error";
            header("Location:login.php");
            exit();
        }
    }

?>