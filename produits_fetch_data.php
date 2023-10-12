<?php
require_once './inc/database.php';

//VERIFICATION DES DONNEES DANS LES CHAMPS
if (!empty($_POST["nom"] && !empty($_POST["description"]) && !empty($_POST["prix"]))){
    //RECUPERATION DES DONNEES
    $nom = filter_var($_POST["nom"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $description = filter_var($_POST["description"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $prix = filter_var($_POST["prix"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    //VERFICIATION DE LA VALIDITE DU FICHIER (IMAGE)
    if (!empty($_FILES["image"]["name"])){
        //ON DEFINIT LE PATH
        $rootPath = $_SERVER['DOCUMENT_ROOT'];
        $folder = "/assets/";
        //ON CHANGE LE NOM DE L'IMAGE
        $newImageName = uniqid() . "_" . $_FILES["image"]["name"];
        $path = $folder . $newImageName;

        //VERIFICATION DE L'UPLOAD DE L'IMAGE
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $rootPath . $path)){
            //ON FAIT UNE REQUÊTE D'INSERT A LA BDD
            $result = $pdo->prepare("INSERT INTO chaussures (name, description, prix, image) VALUES (:name, :description, :prix, :image)");
            //ON PREPARE LA REQUETE POUR EVITER XSS
            $result->bindValue(":name", $nom);
            $result->bindValue(":description", $description);
            $result->bindValue(":prix", $prix);
            $result->bindValue(":image", $path);
            $result->execute();
            
        } else {
            echo "Erreur de téléchargement : " . $_FILES["image"]["error"];
        }

    } else {
        echo "Erreur lors de l'envoi du formulaire.";
    }
    
} else {
    echo "Erreur lors de l'envoi du formulaire.";
}

//REDICRECTION 
header("Location: produits.php");

?>