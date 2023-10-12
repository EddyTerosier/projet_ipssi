<?php
session_start();

// Vérifiez si l'utilisateur est connecté
if (isset($_SESSION["user"])) {
    // Détruisez la session actuelle
    session_destroy();
}

// Redirigez l'utilisateur vers la page de connexion
header("Location: /connexion.php");
exit();
?>