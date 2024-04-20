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
        
      
           
        </div>
    </div>

<div id="content">
        <div id="bg" class="">
            <div class="container" style="padding: top 120px;">
            <h1>Account verwijderen</h1>
            
            <form action='userdelete.php' value='<?php echo $product['naam'] ?>'  name='user_delete_logic' method="POST">
             <input type="text" name="user_id" placeholder="ID" required>
            <input type="submit" value="Verwijderen">
</form>
 
    
   </div>
</body>
</html>