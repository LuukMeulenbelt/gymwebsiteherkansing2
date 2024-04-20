<?php
$stmt = $connection->query("SELECT * FROM products");

$stmt = $connection->query("SELECT * FROM products ORDER BY id DESC LIMIT 1");
$user = $stmt->fetch();


$sql = "INSERT INTO products (naam, prijs, omschrijving, maat) VALUES (?,?,?,?)";
$stmt= $connection->prepare($sql);
$stmt->execute([$name, $prijs, $omschrijving, $maat]);

$data = [
    ['John','Doe', 22],
    ['Jane','Roe', 19],
];
$stmt = $connection->prepare("INSERT INTO products (name, surname, age) VALUES (?,?,?)");
try {
    $pdo->beginTransaction();
    foreach ($data as $row)
    {
        $stmt->execute($row);
    }
    $pdo->commit();
}catch (Exception $e){
    $pdo->rollback();
    throw $e;
}