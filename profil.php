<?php
session_start();
$user = $_SESSION["user"];
// var_dump($user);
// die();
if (!$user) {
    header("location: /connexion.php");
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include_once("./inc/head.php"); ?>
    <title>Addidous - Profil</title>
</head>

<body>
    <!-- HEADER -->
    <?php include_once("./inc/header.php") ?>;
    <!-- FIN HEADER -->
    <h1>Profil</h1>
    <h2>Bonjour
    <?= $user["firstname"]; ?>
    </h2>
    <!-- FOOTER -->
    <?php include_once("./inc/footer.php"); ?>
    <!-- FIN FOOTER -->
</body>

</html>