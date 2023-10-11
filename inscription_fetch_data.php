<?php
require_once './inc/database.php';


if (!empty($_POST["firstname"] && $_POST["lastname"] && $_POST["email"] && $_POST["password"])) {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $result = $pdo->prepare("INSERT INTO users(firstname,lastname,email,password) VALUES('$firstname','$lastname','$email','$password')");
  $result->execute();
}

header("Location: connexion.php");
?>