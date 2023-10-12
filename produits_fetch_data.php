<?php
require_once './inc/database.php';
$result = $pdo->prepare("SELECT * FROM chaussures");
$result->execute();


header("Location: produits.php");
?>