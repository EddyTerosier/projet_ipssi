<?php
require_once './inc/database.php';

//RECUPERATION DE L'ID DU PRODUIT
$id = $_POST["id"];

//ON FAIT UNE REQUÊTE POUR RECUPERER L'IMAGE
$result = $pdo->prepare("SELECT image FROM chaussures WHERE id = :id");
//ON PREPARE LA REQUETE POUR EVITER XSS
$result->bindValue(":id", $id);
$result->execute();

//RECUPATION DES DONNEES
$imageData = $result->fetch();

if ($imageData) {

    //ON CREER LE CHEMIN EXACT DE L'IMAGE
    $rootPath = $_SERVER['DOCUMENT_ROOT'];
    $image = $imageData['image'];

    //ON SUPPRIME L'IMAGE
    unlink($rootPath . "/" . $image);
}


//ON FAIT UNE REQUÊTE DE DELETE A LA BDD
$resultDel = $pdo->prepare("DELETE FROM chaussures WHERE id = :id");
//ON PREPARE LA REQUETE POUR EVITER XSS
$resultDel->bindValue(":id", $id);
$resultDel->execute();


//REDICRECTION 
header("Location: produits.php");

?>