<?php
session_start();
if(!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}
echo "Welcome to the dashboard!";
?>

<div id="content">
        <div id="bg" class=" ">
            <div class="container" style="padding: top 120px;">
            <div class="mx-auto p-5 text-white" id="banner_content" style="border-radius: 0.5rem;" >
            <h1>Account verwijderen</h1>
            
            <form action='userdelete.php' value='<?php echo $product['naam'] ?>'  name='user_delete_logic' method="POST">
             <input type="text" name="user_id" placeholder="Gebruiker" required>
            <input type="submit" value="Verwijderen">
</form>
 
    
   </div>
</body>
</html>