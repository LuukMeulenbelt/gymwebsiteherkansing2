[10:22] Müskens, Luuk
<?php
session_start();
include 'conn.php';
 
$userid = $_POST['user_id'];
 
$stmt = $connection->prepare("DELETE from user WHERE id=:userid");
$stmt->bindParam(":userid", $userid);
$stmt->execute();
 
header('location:dashboard.php');
?>