<?php
require_once './inc/database.php';


if (!empty($_POST["firstname"]) && !empty($_POST["lastname"]) && !empty($_POST["email"]) && !empty($_POST["password"])) {
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    
    $hashedPassword = password_hash($password, PASSWORD_ARGON2ID);

    $result = $pdo->prepare("INSERT INTO users (firstname, lastname, email, password) VALUES (:firstname, :lastname, :email, :password)");
    $result->bindValue(":firstname", $firstname);
    $result->bindValue(":lastname", $lastname);
    $result->bindValue(":email", $email);
    $result->bindValue(":password", $hashedPassword);

    $result->execute();
    header("Location: /connexion.php");
    exit;
}
?>