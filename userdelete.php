<?php 

include 'com.php';
 
 
$id = $_POST["user_id"];
 
 
$stmt = $conn->prepare("DELETE FROM user WHERE id=:id_user");
$stmt->bindParam(":id_user", $id);
$stmt->execute();
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main2.css">
    <link href='https://fonts.googleapis.com/css?family=Jockey One' rel='stylesheet'>
</head>
<body>
<div class="header">
        <div class="logo">
            <img src="img/Schermafbeelding 2024-02-26 144208.png" alt="">   
            <div class="back">
                <a href="index.html" class="back">Terug</a>
            </div>
        </div>

    <div class="suc6volingelogdfooter">
        
        <div class="suc6volingelogd">
            <div class="ingelogd">
                <h1> Verwijderd </h1>
            </div>
            <div class="logintext">
                <h3> Uw account is verwijderd </h3> 
           <h3> U kunt nu terug naar het beginscherm </h3> 
           
            </div>
           
        </div>
    </div>
</body>
</html>