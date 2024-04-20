<?php
include 'com.php';
 
if(isset($_POST['naam'], $_POST['prijs'], $_POST['id_producten'])) {
    $data = [
        'naam' => $_POST['naam'],
        'prijs' => $_POST['prijs'],
        'id' => $_POST['id_producten']
    ];
 
    $sql = "UPDATE producs SET naam=:naam, prijs=:prijs WHERE id=:id";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
 
 
    header('location: pre.php');
    exit;
} else {
 
    echo "Niet alle vereiste gegevens zijn ontvangen.";
}
 
?>