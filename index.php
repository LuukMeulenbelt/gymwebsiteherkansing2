<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
    <link href='https://fonts.googleapis.com/css?family=Jockey One' rel='stylesheet'>
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="img/Schermafbeelding 2024-02-26 144208.png" alt="">
               
        </div>

        <div class="search">
           Zoekenfdfdfdf
        </div>

        <div class="shoppingcart">
            <a href="login2.php" class="loginbtn">Winkewagen</a>
        </div>

        <div class="login">
              <a href="login2.php" class="loginbtn">Account</a>
        </div>

        

    </div>


    

    <div class="homepage">
        
        <div class="block1">
           
            

            <div class="kleding">
                kleding
            </div>
            <div class="block1tekst">
                verkrijg van alles qua kleding, zoals T-shirt’s, broekken, truien, schoenen en veel meer.
            </div>

            <div class="kledingkopen">
                <a href="kleding.php" class="kledingkopenbtn">Shoppen</a>
            </div>
        </div>

    
        <div class="block2">
            <div class="suplementen">
                Suplementen
            </div>
            <div class="block2tekst">
                Meer eiwitten gemakkelijk tussendoor nemen, of intensiever kunnen sporten? Koop hier je suplementen van Eiwitpoeder tot creatiene voor de optimale spieropbouw.
            </div>

            <div class="suplementenkopen">
                <a href="kleding.php" class="suplementenkopenbtn">Shoppen</a>
            </div>
        </div>

        <div class="block3">
            <div class="abonnementen">
                Abonnementen
            </div>
            <div class="block3tekst">
                Voordelig en dichtbij willen sporten? zoek hier een sportschool voor bij jou in de buurt en voor de beste prijs.
            </div>

            <div class="locatiekopen">
                <a href="kleding.php" class="locatiekopenbtn">Shoppen</a>
            </div>
        </div>

    </div>
   
    

<?php
    include 'com.php';
 
    $stmt = $connection->query("SELECT * FROM products ORDER BY id = 1");
    $user = $stmt->fetch();
    echo $user["naam"] ;
 
    $stmt = $connection->query("SELECT * FROM products");
    while ($row = $stmt->fetch()) {
    echo $row['naam'];
}
?>
</body>
</html>