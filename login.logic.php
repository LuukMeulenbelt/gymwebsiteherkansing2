<?php
session_start();



$conn = mysqli_connect("localhost","root","","user");


$usertrim = trim($_POST['username']);

$usertrip = stripclashes($usertrim);
$finaluser = htmlspecialchar($userstrip);

$passtrim = trim($_POST['password']);

$passtrip = stripclashes($passtrim);
$finalpass = htmlspecialchar($passstrip);

$sql = "SELECT * FROM user where username = '$finaluser' AND password = '$finalpass'";

$result = mysql_query($con,$sql);

if(mysqli_num_rows($result)>=1)
{
    $_SESSION["myuser"]= $finaluser;
    header("Location:kleding.php");
}