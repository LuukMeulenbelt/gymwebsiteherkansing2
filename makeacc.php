<?php
session_start();
include 'com.php';

$naam = $_POST["naam"];
$password = $_POST["password"];
$email = $_POST["email"];
$tel = $_POST["telnummer"];
$rol = "3";
 
$stmt = $conn->prepare("INSERT INTO user (naam, email, password, tel, rol) VALUES(:naam, :mail, :pass, :telnummer, :rol)");
$stmt->bindParam(":naam", $naam);
$stmt->bindParam(":pass", $password);
$stmt->bindParam(":mail", $email);
$stmt->bindParam(":telnummer", $tel);
$stmt->bindParam(":rol", $rol);
$stmt->execute();


header ('Location: geregistreerd.php');



?>