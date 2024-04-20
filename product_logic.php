<?php
session_start();
include 'com.php';
 
// Check of id is ingesteld in de URL
if(isset($_GET['id'])) {
    // Gebruik parameterbinding om SQL-injecties te voorkomen
    $stmt = $conn->prepare("SELECT * FROM producs WHERE id = ?");
    $stmt->execute([$_GET['id']]);
    $product = $stmt->fetch();
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main2.css">
    <link rel="icon" href="assets/logo.jpg">
</head>
<body>
    <div class="update">
    <form action='product_updadate_logic.php' name='product_updadate_logic' method="POST">
        <label>Id van product:</label>
        <input type="text" name="id_producten" value="<?php echo isset($product['id']) ? $product['id'] : ''; ?>" required>
        <label>Naam van product:</label>
        <input type="text" name="naam" value="<?php echo isset($product['naam']) ? $product['naam'] : ''; ?>" required>
        <label>Prijs van product:</label>
        <input type="text" name="prijs" value="<?php echo isset($product['prijs']) ? $product['prijs'] : ''; ?>" required>
        <input type="submit" value="update product">
    </form>
    </div>
</body>
</html>