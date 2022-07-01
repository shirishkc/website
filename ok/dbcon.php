<?php

$server="localhost";
$user="root";
$password="";
$db="emailphp";

$con= mysqli_connect($server,$user,$password,$db);

if(!$con)
{
    die("Connection lost: " .mysqli_connect_error());
}

