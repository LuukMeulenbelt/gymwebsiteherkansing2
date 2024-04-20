<?php
session_start();
$post_username = $_POST['username'];
$post_password = $_POST['password'];
 
require 'com.php';
 
$sql = "SELECT * FROM user WHERE naam=:username AND password=:password";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':username', $post_username);
$stmt->bindParam(':password', $post_password);
$stmt->execute();
 
if ($stmt->rowCount() > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["naam"] = $row['naam'];
        $_SESSION['rol'] = $row['rol'];
    }
    if ($_SESSION['rol'] == "3") {
        header("location: suc6volingelogd.php");
    } 
} else {
    header("Location:login2.php");
}
 
 

?>